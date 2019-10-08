<?php

namespace App\Http\Controllers;

use App\PaymentCode;
use App\Service\PaymentCodeService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PaymentCodeController extends Controller
{
    protected $service;

    public function __construct(PaymentCodeService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return PaymentCode[]|Collection
     */
    public function index()
    {
        return $this->service->getAll();
    }


}
