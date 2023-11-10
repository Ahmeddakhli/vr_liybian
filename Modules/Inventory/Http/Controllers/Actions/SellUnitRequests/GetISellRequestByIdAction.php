<?php

namespace Modules\Inventory\Http\Controllers\Actions\SellUnitRequests;

use Modules\Inventory\Http\Resources\ISellRequestResource;
use Modules\Inventory\ISellRequest;
use Modules\Inventory\ISellUnitRequest;

class GetISellRequestByIdAction
{
    public function execute($id)
    {
        // Get sell request
        $i_sell_request = ISellUnitRequest::find($id);

        // Transform sell requests
        $i_sell_request = $i_sell_request ? new ISellRequestResource($i_sell_request) : null;

        // Return response
        return $i_sell_request;
    }
}
