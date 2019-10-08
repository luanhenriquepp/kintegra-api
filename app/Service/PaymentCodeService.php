<?php

namespace App\Service;

use App\PaymentCode;

class PaymentCodeService
{
    protected $paymentCode;

    public function __construct(PaymentCode $paymentCode)
    {
        $this->paymentCode = $paymentCode;
    }

    public function getAll()
    {
        return  $this->paymentCode::all();
    }
}
