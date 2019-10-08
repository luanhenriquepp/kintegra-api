<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $keyType = 'string';

    public $incrementing = false;

    protected $table = 'tb_payment';

    protected $primaryKey = 'cd_payment';

    protected $fillable = [
        'ds_payment'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function expensePosted()
    {
        return $this->hasMany(ExpensePosted::class, '', 'cd_payment');
    }
}
