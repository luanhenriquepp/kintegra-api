<?php

use App\PaymentCategory;
use Illuminate\Database\Seeder;

class PaymentCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  1;
        $category->ds_payment_category      = 'Água';
        $category->save();

        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  2;
        $category->ds_payment_category      = 'Luz';
        $category->save();

        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  3;
        $category->ds_payment_category      = 'Bar';
        $category->save();

        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  4;
        $category->ds_payment_category      = 'Restaurante';
        $category->save();

        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  5;
        $category->ds_payment_category      = 'Diversão';
        $category->save();

        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  6;
        $category->ds_payment_category      = 'Transporte';
        $category->save();

        $category                           = new PaymentCategory();
        $category->cd_payment_category      =  7;
        $category->ds_payment_category      = 'Outros';
        $category->save();
    }
}
