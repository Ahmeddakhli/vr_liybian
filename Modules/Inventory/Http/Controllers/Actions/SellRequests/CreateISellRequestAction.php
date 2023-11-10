<?php

namespace Modules\Inventory\Http\Controllers\Actions\SellRequests;

use Lang;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Modules\Inventory\ISellRequest;
use Modules\Inventory\Jobs\ISellRequestMailJob;
use Illuminate\Http\Exceptions\HttpResponseException;
use Modules\Notifications\Jobs\GeneralNotificationJob;
use Modules\Notifications\Http\Helpers\NotificationObject;
use Modules\Inventory\Http\Resources\ISellRequestResource;
use App\Http\Controllers\Actions\Users\GetUsersHaveEitherPermissionAction;
use Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\FileUnacceptableForCollection;

class CreateISellRequestAction
{
    public function execute($data, $attachments = null)
    {
        // Create sell request
        $i_sell_request = ISellRequest::create($data);

        // Upload attachments
        if ($attachments) {
            $path = storage_path('tmp/uploads');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $errors = array();
            foreach ($attachments as $attachment) {

                $name = uniqid() . '_' . trim($attachment->getClientOriginalName());
                $attachment->move($path, $name);

                $full_path = storage_path('tmp/uploads/' . $name);

                // Associate the file with the sell request collection
                try {
                    $i_sell_request
                        ->addMedia(storage_path('tmp/uploads/' . $name))
                        ->toMediaCollection(request()->getHttpHost() . ',inventory,sell_requests,' . $i_sell_request->id . ',' . 'attachments');
                } catch (FileUnacceptableForCollection $e) {
                    $errors[] = [
                        'field' => 'file',
                        'message' => Lang::get('inventory::inventory.file_is_unacceptable')
                        // 'message' => $e->getMessage()
                    ];
                }
            }

            if (count($errors)) {
                throw new HttpResponseException(response()->json([
                    'errors' => $errors
                ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
            }
        }

        // Sending a Mail by Sell Your Unit Request
        // Prepare Mail Data
        $data['unit_name'] = $i_sell_request->unit_name;
        $data['compound'] = $i_sell_request->compound;
        $data['purpose'] = $i_sell_request->purpose->purpose;
        $data['purpose_type'] = $i_sell_request->purposeType->purpose_type;
        $data['comments'] = $i_sell_request->comments;
        $data['name'] = $i_sell_request->name;
        $data['email'] = $i_sell_request->email;
        $data['phone'] = $i_sell_request->phone;
        $data['service'] = $i_sell_request->service?$i_sell_request->service->value:null;
        // Send mail to receivers
        try {
            ISellRequestMailJob::dispatch($data);
        } catch (\Exception $th) {
        }
        // Transform sell request
        $i_sell_request = new ISellRequestResource($i_sell_request);

        // Return response
        return $i_sell_request;
    }
}
