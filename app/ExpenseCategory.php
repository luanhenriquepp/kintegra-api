<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{

    protected $primaryKey = 'cd_expense_category';

    protected $table = 'tb_expense_category';

    protected $fillable = [
        'ds_expense_category',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
