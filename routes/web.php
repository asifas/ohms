<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{BloodBankController,
    CompanyController,
    DonorController,
    HomeController,
    AppointmentController,
    BedController,
    BedCategoryController,
    DoctorController,
    BedFloorController,
    InPatientController,
    DepartmentController,
    MedicineCategoryController,
    MedicineController,
    OutPatientController,
    PrescriptionController};

Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    Route::controller(AppointmentController::class)->group(function () {
        Route::get('/appointment', 'form')->name('appointment');
        Route::post('/appointment', 'store')->name('appointment.post');
        Route::get('/appointment-list', 'index')->name('appointment.list');
        Route::get('/appointment/{id}', 'destroy')->name('appointment.destroy');
    });

    Route::controller(DoctorController::class)->group(function () {
        Route::get('/doctor-list', 'index')->name('doctor.list');
        Route::get('/doctor', 'create')->name('doctor.add');
        Route::post('/doctor', 'store');
        Route::get('/doctor/{id}','destroy')->name('doctor.destroy');
    });

    Route::controller(BedFloorController::class)->group(function(){
        Route::get('/floor','index')->name('bed.floor');
        Route::post('/floor','store')->name('bed.floor');
        Route::get('/floor/{id}/edit','show')->name('bed.floor.edit');
        Route::get('/floor/{id}','destroy')->name('bed.destroy');
    });

    Route::controller(BedCategoryController::class)->group(function(){
        Route::get('/bed-category','index')->name('bc.index');
        Route::post('/bed-category','store')->name('bc.store');
        Route::get('/bed-category/{id}','destroy')->name('bc.destroy');
    });
    Route::controller(BedController::class)->group(function(){
        Route::get('/bed','index')->name('b.index');
        Route::post('/bed','store')->name('b.store');
        Route::get('/bed/{id}','destroy')->name('b.destroy');
    });

    Route::controller(DepartmentController::class)->group(function (){
        Route::get('/departments', 'index')->name('departments');
        Route::get('/department', 'show')->name('department');
        Route::post('/department',  'store')->name('department.create');
        Route::get('/department/{id}', 'destroy')->name('department.destroy');
    });

    Route::controller(OutPatientController::class)->group(function (){
        Route::get('out-patient','index')->name('out.patient.list');
        Route::post('out-patient','store')->name('out.patient.store');
        Route::get('out-patient/{id}','destroy')->name('out.patient.destroy');
    });

    Route::controller(InPatientController::class)->group(function (){
        Route::get('in-patient','index')->name('in.patient.list');
        Route::post('in-patient','store')->name('in.patient.store');
        Route::get('in-patient/{id}','destroy')->name('in.patient.destroy');
    });


    Route::controller(CompanyController::class)->group(function () {
        Route::get('/company', 'index')->name('com.index');
        Route::post('/company', 'store')->name('com.store');
        Route::get('/company/{id}', 'destroy')->name('com.destroy');
    });

    Route::controller(MedicineCategoryController::class)->group(function () {
        Route::get('/medicine-category', 'index')->name('mc.index');
        Route::post('/medicine-category', 'store')->name('mc.store');
        Route::get('/medicine-category/{id}', 'destroy')->name('mc.destroy');
    });

    Route::controller(MedicineController::class)->group(function () {
        Route::get('/medicine', 'index')->name('medicine.index');
        Route::post('/medicine', 'store')->name('medicine.store');
        Route::get('/medicine/{id}', 'destroy')->name('medicine.destroy');
    });

    // TODO :: Back-end routes start here Blood Group (incomplete)
    Route::controller(BloodBankController::class)->group(function () {
        Route::get('/blood', 'index')->name('blood.index');
        Route::post('/blood', 'store')->name('blood.store');
        Route::get('/blood/{id}', 'destroy')->name('blood.destroy');
    });

    // TODO :: Back-end routes start here Donor Group
    Route::controller(DonorController::class)->group(function () {
        Route::get('/donor', 'index')->name('donor.index');
        Route::post('/donor', 'store')->name('donor.store');
        Route::get('/donor/{id}', 'destroy')->name('donor.destroy');
    });

    Route::controller(PrescriptionController::class)->group(function () {
        Route::get('/prescriptions', 'index')->name('prescription.index');
        Route::get('/prescription', 'create')->name('prescription.create');
        Route::post('/prescriptions', 'store')->name('prescription.store');
        Route::get('/prescriptions/{id}', 'destroy')->name('prescription.destroy');
    });
});


