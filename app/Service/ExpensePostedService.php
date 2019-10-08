<?php

namespace App\Service;

use App\ExpensePosted;

class ExpensePostedService
{
    protected $expensePosted;

    public function __construct(ExpensePosted $expensePosted)
    {
        $this->expensePosted = $expensePosted;
    }

    public function getAll()
    {
        return $this->expensePosted::with('paymentCategory', 'payment', 'paymentCode')->paginate();
    }
}
