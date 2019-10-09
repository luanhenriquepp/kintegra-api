<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Service\PaymentService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $service;

    /**
     * PaymentController constructor.
     * @param PaymentService $service
     */
    public function __construct(PaymentService $service)
    {
        return $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Payment[]|Collection
     */
    public function index()
    {
        return $this->service->getAll();
    }

}
