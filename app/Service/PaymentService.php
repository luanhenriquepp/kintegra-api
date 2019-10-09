<?php

namespace App\Service;

use App\Payment;
use Illuminate\Database\Eloquent\Collection;

class PaymentService
{

    /**
     * @return Payment[]|Collection
     */
    public function getAll()
    {
        return Payment::all();
    }
}
