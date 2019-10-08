<?php

namespace App\Http\Controllers;

use App\ExpensePosted;
use App\Service\ExpensePostedService;
use Illuminate\Http\Request;

class ExpensePostedController extends Controller
{
    protected $service;

    public function __construct(ExpensePostedService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpensePosted  $expensesPosted
     * @return \Illuminate\Http\Response
     */
    public function show(ExpensePosted $expensesPosted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpensePosted  $expensesPosted
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpensePosted $expensesPosted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpensePosted  $expensesPosted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpensePosted $expensesPosted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpensePosted  $expensesPosted
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpensePosted $expensesPosted)
    {
        //
    }
}
