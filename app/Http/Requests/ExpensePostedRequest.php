<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpensePostedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ds_expense_posted' => 'max:255',
            'dt_expense_posted' => 'required',
            'expense_posted_status' => 'in:0,1',
            'expense_posted_value' => 'required',
            'cd_payment_category' => 'required',
            'cd_payment' => 'required|in:C,D',
            'cd_payment_code' => 'required|in:P,R'
        ];
    }
}
