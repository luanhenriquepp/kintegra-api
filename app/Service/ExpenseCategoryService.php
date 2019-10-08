<?php

namespace App\Service;

use App\ExpenseCategory;


class ExpenseCategoryService
{
    protected $category;

    public function __construct(ExpenseCategory $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category::all();
    }
}
