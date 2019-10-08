<?php

namespace App\Http\Controllers;

use App\ExpenseCategory;
use App\Service\ExpenseCategoryService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpenseCategoryController extends Controller
{
    protected  $service;

    public function __construct(ExpenseCategoryService $service)
    {
        $this->service = $service;
    }


    /**
     * @return ExpenseCategory[]|Collection
     */
    public function index()
    {
        return  $this->service->getAll();
    }

}
