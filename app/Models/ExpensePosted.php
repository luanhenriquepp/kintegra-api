<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensePosted extends Model
{

    protected $table = 'tb_expense_posted';

    protected $primaryKey = 'cd_expense_posted';

    protected $fillable = [
        'ds_expense_posted',
        'dt_expense_posted',
        'expense_posted_status',
        'expense_posted_value',
        'cd_payment_category',
        'cd_payment',
        'cd_payment_code',
        'cd_user'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function paymentCategory()
    {
        return $this->hasMany(PaymentCategory::class,'cd_payment_category', 'cd_payment_category');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class,'cd_payment', 'cd_payment');
    }

    public function paymentCode()
    {
        return $this->belongsTo(PaymentCode::class,'cd_payment_code', 'cd_payment_code');
    }

    public function scopeDsExpensePosted($query)
    {
        if (!$request = request()->get('ds_expense_posted')) {
            return null;
        }
        return $query->where('ds_expense_posted', 'LIKE', '%' . $request . '%');
    }

    public function scopeDtExpensePosted($query)
    {
        if (!$request = request()->get('dt_expense_posted')) {
            return null;
        }
        return $query->where('dt_expense_posted', 'LIKE', '%' . $request . '%');
    }

    public function scopeExpensePostedStatus($query)
    {
        if (!$request = request()->get('expense_posted_status')) {
            return null;
        }
        return $query->where('expense_posted_status', 'LIKE', '%' . $request . '%');
    }
}
