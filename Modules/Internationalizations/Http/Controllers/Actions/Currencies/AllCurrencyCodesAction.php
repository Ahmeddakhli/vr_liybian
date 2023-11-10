<?php

namespace Modules\Internationalizations\Http\Controllers\Actions\Currencies;

use Cache;
use Propaganistas\LaravelIntl\Facades\Currency;
use stdClass;

class AllCurrencyCodesAction
{
    public function __construct()
    {
        //
    }

    public function execute()
    {
        return Cache::rememberForever('internationalizations_module_currency_codes', function() {
            $currency_codes_list = array_keys(['LYD' => 'LYD','EGP' => 'EGP', 'USD' => 'USD']);

            return $currency_codes_list;
        });
    }
}