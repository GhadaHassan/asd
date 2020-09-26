<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Dashboard')->prefix('dashboard')->middleware('admin')->group(function(){

    Route::get('home','HomeController@index');

    Route::resource('users','UsersController')->except(['show','delete']);
    Route::delete('users/delete/{id}','UsersController@delete')->name('dashboard/users.delete');

    Route::resource('cars','CarsController')->except(['show','delete']);
    Route::delete('cars/delete/{id}','CarsController@delete')->name('dashboard/cars.delete');

    Route::resource('cites','CityController')->except(['show','delete']);
    Route::delete('cites/delete/{id}','CityController@delete')->name('dashboard/cites.delete');

    Route::resource('clinicDay','ClinicDayController')->except(['show','delete']);
    Route::delete('clinicDay/delete/{id}','ClinicDayController@delete')->name('dashboard/clinicDay.delete');

    Route::resource('clinic','ClinicController')->except(['show','delete']);
    Route::delete('clinic/delete/{id}','ClinicController@delete')->name('dashboard/clinic.delete');

    Route::resource('clothes','ClothesController')->except(['show','delete']);
    Route::delete('clothes/delete/{id}','ClothesController@delete')->name('dashboard/clothes.delete');

    // Route::resource('clothes','ClothesController')->except(['show','delete']);
    // Route::delete('clothes/delete/{id}','ClothesController@delete')->name('dashboard/clothes.delete');

    Route::resource('departments','DepartmentsController')->except(['show','delete']);
    Route::delete('departments/delete/{id}','DepartmentsController@delete')->name('dashboard/departments.delete');

    Route::resource('docDegrees','DocDegreesController')->except(['show','delete']);
    Route::delete('docDegrees/delete/{id}','DocDegreesController@delete')->name('dashboard/docDegrees.delete');

    Route::resource('docSpecialties','DocSpecialtiesController')->except(['show','delete']);
    Route::delete('docSpecialties/delete/{id}','DocSpecialtiesController@delete')->name('dashboard/docSpecialties.delete');

    Route::resource('doctors','DoctorsController')->except(['show','delete']);
    Route::delete('doctors/delete/{id}','DoctorsController@delete')->name('dashboard/doctors.delete');

    Route::resource('governorates','GovernoratesController')->except(['show','delete']);
    Route::delete('governorates/delete/{id}','GovernoratesController@delete')->name('dashboard/governorates.delete');

    Route::resource('levels','LevelsController')->except(['show','delete']);
    Route::delete('levels/delete/{id}','LevelsController@delete')->name('dashboard/levels.delete');

    Route::resource('maintenance','MaintenanceController')->except(['show','delete']);
    Route::delete('maintenance/delete/{id}','MaintenanceController@delete')->name('dashboard/maintenance.delete');

    Route::resource('markets','MarketsController')->except(['show','delete']);
    Route::delete('markets/delete/{id}','MarketsController@delete')->name('dashboard/markets.delete');

    Route::resource('restaurants','RestaurantsController')->except(['show','delete']);
    Route::delete('restaurants/delete/{id}','RestaurantsController@delete')->name('dashboard/restaurants.delete');

    Route::resource('services','ServicesController')->except(['show','delete']);
    Route::delete('services/delete/{id}','ServicesController@delete')->name('dashboard/services.delete');

    Route::resource('subjects','SubjectsController')->except(['show','delete']);
    Route::delete('subjects/delete/{id}','SubjectsController@delete')->name('dashboard/subjects.delete');

    Route::resource('groups','GroupController')->except(['show','delete']);
    Route::delete('groups/delete/{id}','GroupController@delete')->name('dashboard/subjegroupscts.delete');

    Route::resource('techer','TeachersController')->except(['show','delete']);
    Route::delete('techer/delete/{id}','TeachersController@delete')->name('dashboard/techer.delete');

    Route::resource('transports','TransportsController')->except(['show','delete']);
    Route::delete('transports/delete/{id}','TransportsController@delete')->name('dashboard/transports.delete');

    Route::resource('villages','villagesController')->except(['show','delete']);
    Route::delete('villages/delete/{id}','villagesController@delete')->name('dashboard/villages.delete');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
