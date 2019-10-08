<?php

use App\Payment;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment                   = new Payment();
        $payment->cd_payment       =  'D';
        $payment->ds_payment       = 'Débito';
        $payment->save();

        $payment                   = new Payment();
        $payment->cd_payment       =  'C';
        $payment->ds_payment       = 'Crédito';
        $payment->save();
    }
}
