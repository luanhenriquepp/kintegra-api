<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

}
