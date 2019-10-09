<?php

namespace App\Http\Controllers;

use App\ExpensePosted;
use App\Http\Requests\ExpensePostedRequest;
use App\Service\ExpensePostedService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpensePostedController extends Controller
{
    protected $service;

    /**
     * ExpensePostedController constructor.
     * @param ExpensePostedService $service
     */
    public function __construct(ExpensePostedService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return LengthAwarePaginator|Response
     */
    public function index()
    {
        return $this->service->getAll();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ExpensePostedRequest $request
     * @return JsonResponse
     */
    public function store(ExpensePostedRequest $request)
    {
        return  $this->service->createExpensePosted($request);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return ExpensePosted[]|Builder[]|Collection
     */
    public function show($id)
    {
        return $this->service->getById($id);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        return  $this->service->terminateExpensePosted($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return JsonResponse|Response
     */
    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}
