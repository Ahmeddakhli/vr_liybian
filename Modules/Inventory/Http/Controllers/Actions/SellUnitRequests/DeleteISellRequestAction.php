<?php

namespace Modules\Inventory\Http\Controllers\Actions\SellUnitRequests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Modules\Inventory\ISellRequest;
use Modules\Inventory\ISellUnitRequest;

class DeleteISellRequestAction
{
    public function execute($id)
    {
        // Find sell request
        $i_sell_request = ISellUnitRequest::find($id);

        // Delete sell request
        $i_sell_request->delete();

        // Return response
        return null;
    }
}
