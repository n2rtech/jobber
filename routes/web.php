<?php

use App\Http\Controllers\AutocompleteController;
use App\Http\Controllers\CalendarSettingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\SalesLeadController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceSettingController;
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

Route::get('customers/convert/lead/{id}', [CustomerController::class, 'convertToLead'])->name('customers.lead');

Route::post('customer/autocomplete', [AutocompleteController::class, 'autocomplete'])->name('customers.autocomplete');

# Schedules Route
Route::resource('schedules', ScheduleController::class);

Route::post('schedule/email-template', [ScheduleController::class, 'emailTemplate'])->name('schedules.email-template');
Route::post('schedule/text-template', [ScheduleController::class, 'textTemplate'])->name('schedules.text-template');
# Jobs Route
Route::resource('jobs', JobController::class);

# Send Job Confirmation Route
Route::post('jobs/send-confirmation', [JobController::class, 'confirmation'])->name('jobs.confirmation');

# Change Status Complete Route
Route::post('jobs/change-status', [JobController::class, 'changeStatus'])->name('jobs.change-status');

Route::post('jobs/mark-unscheduled', [JobController::class, 'unschedule'])->name('jobs.mark-unscheduled');

# Assign Team Route
Route::post('jobs/assign-team', [JobController::class, 'assignTeam'])->name('jobs.assign');

# Save Job Form
Route::put('job/save/job-form/{id}', [JobController::class, 'saveJobForm'])->name('job.notes-add');

# Add Note Form Route
Route::get('job/add-notes/{id}', [UtilityController::class, 'jobNotesUploadForm'])->name('job.add-notes');

# Add Note Route
Route::post('job/notes/add', [UtilityController::class, 'jobNotesUpload'])->name('job.notes-add');



# Invoice Route
Route::resource('invoices', InvoiceController::class);

# Estimates Route
Route::resource('estimates', EstimateController::class);

Route::get('estimates/convert/{id}', [EstimateController::class, 'convertToInvoice'])->name('estimates.convert');

# Sales Leads Route
Route::resource('sales-leads', SalesLeadController::class);

Route::get('sales-leads/convert/lead/{id}', [SalesLeadController::class, 'convertToCustomer'])->name('sales-leads.customer');

# Job Forms Route
Route::resource('job-forms', JobFormController::class);

# Manage Team Route
Route::resource('manage-team', ManageTeamController::class);

# Email Template Route
Route::resource('email-templates', EmailTemplateController::class);

Route::post('email-template/default', [EmailTemplateController::class, 'autocomplete'])->name('email-templates.default');

# Job-titles Route
Route::resource('job-titles', JobTitleController::class);

# Products Route
Route::resource('products', ProductController::class);

# Tax rates Route
Route::resource('tax-rates', TaxRateController::class);

# Company Settings Route
Route::resource('company-settings', CompanyController::class);

# Invoice Settings Route
Route::get('invoice-settings', [InvoiceSettingController::class, 'invoiceSettings'])->name('invoice-settings.index');
Route::post('invoice-settings', [InvoiceSettingController::class, 'storeInvoiceSettings'])->name('invoice-settings.store');

Route::get('calendar-settings', [CalendarSettingController::class, 'calendarSettings'])->name('calendar-settings.index');
Route::post('calendar-settings', [CalendarSettingController::class, 'storeCalendarSettings'])->name('calendar-settings.store');

# Upload Photo Form Route
Route::get('customer/upload-photos/{id}', [UtilityController::class, 'photoUploadForm'])->name('customer.upload-photos');

# Upload Photo Route
Route::post('customer/photos/upload', [UtilityController::class, 'photosUpload'])->name('customer.photos-upload');

# Delete Photo Route
Route::get('customer/delete-photos/{id}', [UtilityController::class, 'photoDelete'])->name('customer.delete-photo');

# Upload Document Form Route
Route::get('customer/upload-documents/{id}', [UtilityController::class, 'documentsUploadForm'])->name('customer.upload-documents');

# Upload Document Route
Route::post('customer/documents/upload', [UtilityController::class, 'documentsUpload'])->name('customer.documents-upload');

# Delete Document Route
Route::get('customer/delete-documents/{id}', [UtilityController::class, 'documentDelete'])->name('customer.delete-document');

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

//search customer
Route::post('customer-search',[CustomerController::class,'customerSearch'])->name('customer-search');
