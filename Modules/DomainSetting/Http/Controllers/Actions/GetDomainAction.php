<?php

namespace Modules\DomainSetting\Http\Controllers\Actions;

use Cache;
use Modules\DomainSetting\Domain;
use Modules\DomainSetting\Http\Resources\domainsResource;

class GetDomainAction
{
    public function execute()
    {
        // Get the domains
        $domains = Domain::all();

        // Transform the domains
        $domains = domainsResource::collection($domains);

        // Return the domains
        return $domains;
    }
}
