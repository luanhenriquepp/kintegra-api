<?php

namespace App\Service;

use App\PaymentCategory;
use Illuminate\Database\Eloquent\Collection;

class PaymentCategoryService
{
    /**
     * @return PaymentCategory[]|Collection
     */
    public function getAll()
    {
        return PaymentCategory::all();
    }
}
