<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function pettyCash()
    {
        return view('accounting.petty-cash', ['title' => 'Petty Cash Management']);
    }
    
    public function imprest()
    {
        return view('accounting.imprest', ['title' => 'Imprest Management']);
    }
    
    public function refund()
    {
        return view('accounting.refund', ['title' => 'Refund Management']);
    }
}

