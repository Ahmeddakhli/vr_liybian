<?php

namespace Modules\DomainSetting\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\DomainSetting\Http\Controllers\Actions\CreateDomainAction;
use Modules\DomainSetting\Http\Controllers\Actions\DeleteDomainAction;
use Modules\DomainSetting\Http\Controllers\Actions\GetdomainsAction;
use Modules\DomainSetting\Http\Controllers\Actions\UpdateDomainAction;
use Modules\DomainSetting\Http\Controllers\Actions\ApplydomainsAction;
use Modules\DomainSetting\Http\Requests\CreatedomainsRequest;
use Modules\DomainSetting\Http\Requests\DeletedomainsRequest;
use Modules\DomainSetting\Http\Requests\UpdatedomainsRequest;
use Modules\DomainSetting\Http\Requests\ApplydomainsRequest;
use App\Http\Helpers\ServiceResponse;

class DomainController extends Controller
{
    /**
     * Store domains
     *
     * @param  [integer] number_of_available_vacancies
     * @param  [array] translations 
     * @return [json] ServiceResponse object
     */
    public function store(CreatedomainsRequest $request, CreateDomainAction $action)
    {
        // Create the domains
        $domains = $action->execute($request->except([]));

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains created successfully';
        $resp->status = true;
        $resp->data = $domains;
        return response()->json($resp, 200);
    }

    /**
     * Update domains
     *
     * @param  [integer] id
     * @param  [integer] number_of_available_vacancies
     * @param  [array] translations 
     * @return [json] ServiceResponse object
     */
    public function update(UpdatedomainsRequest $request, UpdateDomainAction $action)
    {
        // Update the domains
        $domains = $action->execute($request->input('id'), $request->except(['id']));

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains updated successfully';
        $resp->status = true;
        $resp->data = $domains;
        return response()->json($resp, 200);
    }

    /**
     * Delete domains
     *
     * @param  [integer] id
     * @return [json] ServiceResponse object
     */
    public function delete(DeletedomainsRequest $request, DeleteDomainAction $action)
    {

        // Delete the domains
        $action->execute($request->input('id'));

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains deleted successfully';
        $resp->status = true;
        $resp->data = null;
        return response()->json($resp, 200);
    }

    /**
     * Index domainss
     * @return Response
     */
    public function index(Request $request, GetdomainsAction $action)
    {
        // Search the domainss
        $domainss = $action->execute();

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains retrieved successfully';
        $resp->status = true;
        $resp->data = $domainss;
        return response()->json($resp, 200);
    }

    /**
     * Apply on domains
     * @return Response
     */
    public function apply(ApplydomainsRequest $request, ApplydomainsAction $action)
    {
        $response = $action->execute($request->all(), $request->attachment);

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = $response ? 'Application sent successfully' : 'Error occured while applying on the domains';
        $resp->status = $response;
        $resp->data = null;
        return response()->json($resp, 200);
    }
}
