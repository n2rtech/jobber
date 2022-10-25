<?php

use App\Http\Controllers\AutocompleteController;
use App\Http\Controllers\CompanyController;
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
use App\Http\Controllers\UtilityController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes | Created by : N2R Technologies (https://www.n2rtechnologies.com/)
|--------------------------------------------------------------------------
*/

# Clear Cache Route
Route::get('clear-cache', function () {

    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');

    return "Application cache has been cleared.";

});

# Authentication Routes
Auth::routes(['register' => false]);

# Homepage Route
Route::get('/', [HomeController::class, 'index'])->name('home');

# Customers Route
Route::resource('customers', CustomerController::class);

Route::post('customer/autocomplete', [AutocompleteController::class, 'autocomplete'])->name('customers.autocomplete');

# Schedules Route
Route::resource('schedules', ScheduleController::class);

# Jobs Route
Route::resource('jobs', JobController::class);

# Invoice Route
Route::resource('invoices', InvoiceController::class);

# Estimates Route
Route::resource('estimates', EstimateController::class);

# Sales Leads Route
Route::resource('sales-leads', SalesLeadController::class);

# Job Forms Route
Route::resource('job-forms', JobFormController::class);

# Manage Team Route
Route::resource('manage-team', ManageTeamController::class);

# Email Template Route
Route::resource('email-templates', EmailTemplateController::class);

# job-titles Route
Route::resource('job-titles', JobTitleController::class);

# Products Route
Route::resource('products', ProductController::class);

# Tax rates Route
Route::resource('tax-rates', TaxRateController::class);

# Company Settings Route
Route::resource('company-settings', CompanyController::class);

# Upload Photo Form Route
Route::get('customer/upload-photos/{id}', [UtilityController::class, 'photoUploadForm'])->name('customer.upload-photos');

# Upload Photo Route
Route::post('customer/photos/upload', [UtilityController::class, 'photosUpload'])->name('customer.photos-upload');

# Upload Document Form Route
Route::get('customer/upload-documents/{id}', [UtilityController::class, 'documentsUploadForm'])->name('customer.upload-documents');

# Upload Document Route
Route::post('customer/documents/upload', [UtilityController::class, 'documentsUpload'])->name('customer.documents-upload');

# Add Note Form Route
Route::get('customer/add-notes/{id}', [UtilityController::class, 'notesUploadForm'])->name('customer.add-notes');

# Add Note Route
Route::post('customer/notes/add', [UtilityController::class, 'notesUpload'])->name('customer.notes-add');

# Send Email Form Route
Route::get('customer/send-email/{id}', [UtilityController::class, 'sendEmailForm'])->name('customer.send-email');

# Send Email Route
Route::post('customer/email/send', [UtilityController::class, 'emailSend'])->name('customer.email-send');

# Refresh Database Route
Route::get('refresh-database', function () {

    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');

    dd("Hello ! Database has been refreshed and sample data has been inserted!");

});
