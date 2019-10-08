<?php

namespace App\Service;

use App\Payment;

class PaymentService
{
    protected $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function getAll()
    {
        return $this->payment::all();
    }
}
