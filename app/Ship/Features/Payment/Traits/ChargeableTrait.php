<?php

namespace App\Ship\Features\Payment\Traits;

use App\Ship\Features\Payment\Proxies\PaymentsProxy;
use Illuminate\Support\Facades\App;

/**
 * Class ChargeableTrait.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
trait ChargeableTrait
{

    /**
     * @param $amount
     * @param $currency
     */
    public function charge($amount, $currency)
    {
        return App::make(PaymentsProxy::class)->charge($this, $amount, $currency);
    }
}
