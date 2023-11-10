<?php

namespace Modules\DomainSetting\Http\Controllers\Actions;

use Cache;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\DomainSetting\Domain;
use Modules\DomainSetting\Http\Resources\domainsResource;

class GetDomainFrontAction
{
    public function __construct()
    {
        //
    }
    public function execute()
    {
        // Get domains
        $domains =  Domain::paginate(8);

        // Transform result
        $domains = domainsResource::collection($domains);

        $domains = new LengthAwarePaginator(
            json_decode(json_encode($domains)),
            $domains->total(),
            $domains->perPage(),
            $domains->currentPage(),
            [
                'path' => \Request::url(),
                'query' => [
                    'page' => $domains->currentPage()
                ]
            ]
        );

        // Return the result
        return $domains;
    }
}
