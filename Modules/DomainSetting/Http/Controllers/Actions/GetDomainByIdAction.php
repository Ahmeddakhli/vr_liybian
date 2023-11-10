<?php

namespace Modules\DomainSetting\Http\Controllers\Actions;

use Modules\DomainSetting\Domain;
use Modules\DomainSetting\Http\Resources\domainsResource;

class GetDomainByIdAction
{
    public function execute($id)
    {
    	// Get the domains
        $domains = Domain::find($id);

        // Return the response
        return $domains ? new domainsResource($domains) : null;
    }
}
