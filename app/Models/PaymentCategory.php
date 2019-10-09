<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentCategory extends Model
{

    protected $primaryKey = 'cd_payment_category';

    protected $table = 'tb_payment_category';

    protected $fillable = [
        'ds_payment_category',
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
        return $this->hasMany(ExpensePosted::class, '', 'ds_payment_category');
    }
}
