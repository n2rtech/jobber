<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\SalesLeadController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobFormController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\ManageTeamController;
use App\Http\Controllers\TaxRateController;
use Illuminate\Support\Facades\Auth;

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

#5 Schedules Route
Route::resource('schedules', ScheduleController::class);

#6 Jobs Route
Route::resource('jobs', JobController::class);

#7 Invoice Route
Route::resource('invoices', InvoiceController::class);

#8 Estimates Route
Route::resource('estimates', EstimateController::class);

#9 Sales Leads Route
Route::resource('sales-leads', SalesLeadController::class);

#10 Job Forms Route
Route::resource('job-forms', JobFormController::class);

#11 Manage Team Route
Route::resource('manage-team', ManageTeamController::class);

#12 Email Template Route
Route::resource('email-templates', EmailTemplateController::class);

#13 job-titles Route
Route::resource('job-titles', JobTitleController::class);

#14 Products Route
Route::resource('products', ProductController::class);

#15 Products Route
Route::resource('tax-rates', TaxRateController::class);

Route::get('refresh-database', function () {

    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');

    dd("Hello ! Database has been refreshed and sample data has been inserted!");

});
