<?php

namespace App\Service;

use App\PaymentCategory;


class PaymentCategoryService
{
    protected $category;

    public function __construct(PaymentCategory $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category::all();
    }
}
