<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Finance\InvoiceController;
use App\Http\Controllers\Finance\PaymentController;
use App\Http\Controllers\Finance\RecurrenceController;
use App\Http\Controllers\Finance\ReportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StandardLetterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SwapoutController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes | Created by : N2R Technologies (https://www.n2rtechnologies.com/)
|--------------------------------------------------------------------------
*/

#1 Clear Cache Route
Route::get('clear-cache', function () {

    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');

    return "Application cache has been cleared.";

});

#2 Authentication Routes
Auth::routes(['register' => false]);

#3 Homepage Route
Route::get('/', [HomeController::class, 'index'])->name('home');

#4 Customers Route
Route::resource('customers', CustomerController::class);

#5 Suppliers Route
Route::resource('suppliers', SupplierController::class);

#6 Swapouts Route
Route::resource('swapouts', SwapoutController::class);

#7 Bookings Route
Route::resource('bookings', BookingController::class);

#8 Sales Enquiries Route
Route::resource('sales-enquiries', EnquiryController::class);

#9 Finance > Invoices Route
Route::resource('invoices', InvoiceController::class);

#10 Finance > Recurrence Route
Route::resource('recurrence', RecurrenceController::class);

#11 Finance > Payments Route
Route::resource('payments', PaymentController::class);

#12 Finance > Sales Reports Route
Route::resource('sales-reports', ReportController::class);

#13 Standard Letters Route
Route::resource('standard-letters', StandardLetterController::class);

#14 Users Route
Route::resource('user-management', UserController::class);

#15 All Settings Route
Route::get('all-settings', [SettingsController::class, 'allSettings'])->name('all-settings');

#16 System Settings Route
Route::get('system-settings', [SettingsController::class, 'systemSettings'])->name('system-settings');

#17 Tax Rates Route
Route::get('tax-rates', [SettingsController::class, 'taxrates'])->name('tax-rates');

#18 Invoicing Route
Route::get('invoicing', [SettingsController::class, 'invoicing'])->name('invoicing');

#19 Payment Types Route
Route::get('payment-types', [SettingsController::class, 'paymentTypes'])->name('payment-types');

#20 Backup Database Route
Route::get('backup-database', [SettingsController::class, 'backupDatabase'])->name('backup-database');

#21 Products Route
Route::resource('products', ProductController::class);
