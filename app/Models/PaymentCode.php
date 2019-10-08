<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentCode extends Model
{
    protected $keyType = 'string';

    protected $table = 'tb_payment_code';

    public $incrementing = false;

    protected $primaryKey = 'cd_payment_code';

    protected $fillable = [
        'ds_payment_code'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function expensePosted()
    {
        return $this->hasMany(ExpensePosted::class, '', 'cd_expense_posted');
    }
}
