<?php

namespace App\Service;

use App\PaymentCode;

class PaymentCodeService
{

    /**
     * @return mixed
     */
    public function getAll()
    {
        return  PaymentCode::all();
    }
}
