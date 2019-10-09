<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * @return HasMany
     */
    public function expensePosted()
    {
        return $this->hasMany(ExpensePosted::class, '', 'cd_expense_posted');
    }
}
