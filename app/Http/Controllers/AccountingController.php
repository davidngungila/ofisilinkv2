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
        return view('accounting.imprest', ['title' => 'Imprest Request & Retirement']);
    }
    
    public function chartOfAccounts()
    {
        return view('accounting.chart-of-accounts', ['title' => 'Chart of Accounts']);
    }
    
    public function journal()
    {
        return view('accounting.journal', ['title' => 'Journal Entries & Ledger']);
    }
    
    public function payableReceivable()
    {
        return view('accounting.payable-receivable', ['title' => 'Accounts Payable & Receivable']);
    }
    
    public function budget()
    {
        return view('accounting.budget', ['title' => 'Budget Planning & Forecasting']);
    }
    
    public function reports()
    {
        return view('accounting.reports', ['title' => 'Financial Reports']);
    }
    
    public function cashFlow()
    {
        return view('accounting.cash-flow', ['title' => 'Cash Flow & Reconciliation']);
    }
    
    public function tax()
    {
        return view('accounting.tax', ['title' => 'Tax & PAYE Management']);
    }
    
    public function assets()
    {
        return view('accounting.assets', ['title' => 'Fixed Assets & Depreciation']);
    }
}

