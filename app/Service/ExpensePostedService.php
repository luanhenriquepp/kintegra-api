<?php

namespace App\Service;

use App\ExpensePosted;
use App\Http\Requests\ExpensePostedRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpensePostedService
{

    public function getAll()
    {
        return ExpensePosted::with('paymentCategory', 'payment', 'paymentCode')
            ->where('cd_user', auth()->user()->cd_user)
            ->dsExpensePosted()
            ->dtExpensePosted()
            ->expensePostedStatus()
            ->paginate();
    }

    public function createExpensePosted(ExpensePostedRequest $request)
    {

        $expensePosted = ExpensePosted::create([
            'ds_expense_posted'         => $request->get('ds_expense_posted'),
            'dt_expense_posted'         => $request->get('dt_expense_posted'),
            'expense_posted_status'     => $request->get('expense_posted_status'),
            'expense_posted_value'      => $request->get('expense_posted_value', 0),
            'cd_payment_category'       => $request->get('cd_payment_category'),
            'cd_payment'                => $request->get('cd_payment'),
            'cd_user'                   => auth()->user()->cd_user,
            'cd_payment_code'           => $request->get('cd_payment_code'),
        ]);

        $expensePosted->save();

        return response()->json([
            'data'      => $expensePosted,
            'message'   => 'Lançamento criado com sucesso!',
            'success'   => true,
        ], Response::HTTP_CREATED);
    }

    /**
     * @param $id
     * @return ExpensePosted[]|Builder[]|Collection
     */
    public function getById($id)
    {
        return ExpensePosted::with('paymentCategory', 'payment', 'paymentCode')
            ->findOrFail($id);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function delete($id)
    {
        $expensePosted = $this->getById($id);
        $expensePosted->delete();

        return response()->json([
           'success' => true,
            'message' => 'Item excluído com sucesso!'
        ], Response::HTTP_OK);
    }

    public function terminateExpensePosted(Request $request, $id)
    {
        $expensePosted = ExpensePosted::findOrFail($id);

        $expensePosted->expense_posted_status = $request->input('expense_posted_status');

        $expensePosted->update($request->only($expensePosted->expense_posted_status));

        return response()->json([
            'data' => $expensePosted,
            'success' => true,
            'message' => 'Atualizado com sucesso!'
        ], Response::HTTP_ACCEPTED);
    }
}
