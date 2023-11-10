<?php

namespace Modules\DomainSetting\Http\Controllers\Actions;

use Modules\DomainSetting\Domain; 
use DB;
use Carbon\Carbon;


class DeleteDomainAction
{
    public function execute($id)
    {
        // Get the domains
        $domains = Domain::find($id);

        // Delete the domains
        $domains->delete();

        // Return the response
        return null;
    }
}