<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function Transaction()
    {
        // $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');



        $this->data['transactions']=Transaction::all();
       return view('employee.transaction',$this->data);
    }
 public function profit()
 {
    $this->data['employee']=DB::table('employees')->count('id');
    $this->data['earn']=DB::table('payments')->sum('amount');
    $this->data['pay']=DB::table('salaries')->sum('amount');
    $this->data['profit']=DB::table('payments')->sum('amount')-DB::table('salaries')->sum('amount');
    return view('main.dashboard',$this->data);
 }

}