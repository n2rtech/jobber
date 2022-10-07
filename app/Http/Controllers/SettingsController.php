<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allSettings()
    {
        return view('settings.all-settings');
    }

    public function systemSettings()
    {
        return view('settings.system-settings');
    }

    public function taxrates()
    {
        return view('settings.tax-rates');
    }

    public function invoicing()
    {
        return view('settings.invoicing');
    }

    public function paymentTypes()
    {
        return view('settings.payment-types');
    }

    public function backupDatabase()
    {
        return view('settings.backup-database');
    }
}
