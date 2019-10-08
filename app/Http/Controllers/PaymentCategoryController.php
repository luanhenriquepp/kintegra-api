<?php

namespace App\Http\Controllers;

use App\PaymentCategory;
use App\Service\PaymentCategoryService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaymentCategoryController extends Controller
{
    protected  $service;

    public function __construct(PaymentCategoryService $service)
    {
        $this->service = $service;
    }


    /**
     * @return PaymentCategory[]|Collection
     */
    public function index()
    {
        return  $this->service->getAll();
    }

}
