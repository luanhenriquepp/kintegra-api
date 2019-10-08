<?php

use App\ExpenseCategory;
use Illuminate\Database\Seeder;

class ExpenseCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  1;
        $category->ds_expense_category      = 'Água';
        $category->save();

        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  2;
        $category->ds_expense_category      = 'Luz';
        $category->save();

        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  3;
        $category->ds_expense_category      = 'Bar';
        $category->save();

        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  4;
        $category->ds_expense_category      = 'Restaurante';
        $category->save();

        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  5;
        $category->ds_expense_category      = 'Diversão';
        $category->save();

        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  6;
        $category->ds_expense_category      = 'Transporte';
        $category->save();

        $category                           = new ExpenseCategory();
        $category->cd_expense_category      =  7;
        $category->ds_expense_category      = 'Outros';
        $category->save();
    }
}
