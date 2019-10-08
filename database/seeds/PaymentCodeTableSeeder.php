<?php

use App\PaymentCode;
use Illuminate\Database\Seeder;

class PaymentCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentCode                           = new PaymentCode();
        $paymentCode->cd_payment_code          = 'P';
        $paymentCode->ds_payment_code          = 'Pagar';
        $paymentCode->save();

        $paymentCode                           = new PaymentCode();
        $paymentCode->cd_payment_code          = 'R';
        $paymentCode->ds_payment_code          = 'Receber';
        $paymentCode->save();
    }
}
