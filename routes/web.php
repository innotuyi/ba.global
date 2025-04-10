<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/medical-jobs', [ServicesController::class, 'medicalJobs'])->name('services.medical_jobs');
Route::get('/services/medical-jobs/physiotherapy', [ServicesController::class, 'physiotherapy'])->name('services.physiotherapy');
Route::get('/services/medical-jobs/laboratory', [ServicesController::class, 'laboratory'])->name('services.laboratory');
Route::get('/services/medical-jobs/laboratory/reagents', [ServicesController::class, 'reagents'])->name('services.reagents');
Route::get('/services/medical-jobs/laboratory/equipment', [ServicesController::class, 'labEquipment'])->name('services.lab_equipment');
Route::get('/services/medical-jobs/laboratory/consumables', [ServicesController::class, 'consumables'])->name('services.consumables');
Route::get('/services/medical-jobs/equipment', [ServicesController::class, 'equipment'])->name('services.equipment');
Route::get('/services/medical-jobs/equipment/beds', [ServicesController::class, 'beds'])->name('services.beds');
Route::get('/services/medical-jobs/equipment/machines', [ServicesController::class, 'machines'])->name('services.machines');
Route::get('/services/medical-jobs/equipment/others', [ServicesController::class, 'others'])->name('services.others');
Route::get('/services/non-medical', [ServicesController::class, 'nonMedical'])->name('services.non_medical');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/contacts/email', [ContactsController::class, 'email'])->name('contacts.email');
Route::get('/contacts/telephone', [ContactsController::class, 'telephone'])->name('contacts.telephone');
Route::get('/contacts/in-person', [ContactsController::class, 'inPerson'])->name('contacts.in_person');


Route::get('/', function () {
    return view('welcome');
});
