<?php

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

Route::post('/send', 'mailController@send');
Route::get('/email', 'mailController@email');

Route::get('/', 'PagesController@index');

Route::get('/index', 'PagesController@dashboard');

Route::get('/layout_navbar_fixed', 'PagesController@layout_navbar_fixed');

Route::get('/alpaca_advanced', 'PagesController@alpaca_advanced');

Route::get('/error_403', 'PagesController@error_403');
Route::get('/error_404', 'PagesController@error_404');
Route::get('/error_405', 'PagesController@error_405');
Route::get('/error_500', 'PagesController@error_500');

Route::get('/error_503', 'PagesController@error_503');

Route::get('/jumani', 'PagesController@jumani');

Route::get('/general_feed', 'PagesController@general_feed');
Route::get('/user_pages_list', 'PagesController@user_pages_list');
Route::get('/user_pages_profile', 'PagesController@user_pages_profile');
Route::get('/user_pages_profile_cover', 'PagesController@user_pages_profile_cover');
Route::get('/user_pages_profile_tabbed', 'PagesController@user_pages_profile_tabbed');
Route::get('/user_pages_cards', 'PagesController@user_pages_cards');

//login

Route::get('/login_validation', 'PagesController@login_validation');

Route::get('/login_unlock', 'PagesController@login_unlock');

Route::get('/login_transparent', 'PagesController@login_transparent');

Route::get('/login_tabbed', 'PagesController@login_tabbed');

Route::get('/login_simple', 'PagesController@login_simple');

Route::get('/login_registration_advanced', 'PagesController@login_registration_advanced');

Route::get('/login_registration', 'PagesController@login_registration');

Route::get('/login_password_recover', 'PagesController@login_password_recover');

Route::get('/login_modals', 'PagesController@login_modals');

Route::get('/login_hide_navbar', 'PagesController@login_hide_navbar');

Route::get('/login_background', 'PagesController@login_background');

Route::get('/login_advanced', 'PagesController@login_advanced');

//form
Route::get('/form_bootstrap_select', 'PagesController@form_bootstrap_select');

Route::get('/form_checkboxes_radios', 'PagesController@form_checkboxes_radios');

Route::get('/form_controls_extended', 'PagesController@form_controls_extended');

Route::get('/form_dual_listboxes', 'PagesController@form_dual_listboxes');

Route::get('/form_editable', 'PagesController@form_editable');

Route::get('/form_floating_labels', 'PagesController@form_floating_labels');

Route::get('/form_input_groups', 'PagesController@form_input_groups');

Route::get('/form_inputs_basic', 'PagesController@form_inputs_basic');

Route::get('/form_inputs_grid', 'PagesController@form_inputs_grid');

Route::get('/form_layout_horizontal', 'PagesController@form_layout_horizontal');

Route::get('/form_layout_vertical', 'PagesController@form_layout_vertical');

Route::get('/form_multiselect', 'PagesController@form_multiselect');

Route::get('/form_select_box_it', 'PagesController@form_select_box_it');

Route::get('/form_select2', 'PagesController@form_select2');

Route::get('/form_tag_inputs', 'PagesController@form_tag_inputs');

Route::get('/form_validation', 'PagesController@form_validation');

Route::post('/webgeneral/{id}/update', 'webgeneralsController@update');

//Route::get('/load', 'PagesController@load');

//Route::get('/addLoad', 'PagesController@addLoad');
//Route::post('/webgeneral/{id}/update', 'webgeneralsController@update');

//Route::get('/webgeneral', 'webgeneralsController@index') ;
//Route::get('/webgeneral/{id}/edit', 'webgeneralsController@edit') ;
//Route::post('/webgeneral/update/{id}/', 'webgeneralsController@update') ;
//Route::post('webgeneral/update/{id}', function(){ return 'asdasdasd';});

//Route::get('/load', 'PagesController@load');

//Route::get('/addLoad', 'PagesController@addLoad');


Route::get('/exceldrivers', 'PagesController@makeExcelDrivers');
Route::get('/csvdrivers', 'PagesController@makeCsvDrivers');
Route::get('/pdfdrivers', 'PagesController@makePdfDrivers');

Route::resource('users', 'usersController') ;
Route::resource('load', 'loadController') ;
Route::resource('customer', 'customersController') ;
Route::resource('delivery', 'deliveriesController') ;
Route::resource('driver', 'driversController') ;
Route::resource('shipper', 'shippersController') ;
Route::resource('truck', 'trucksController') ;
Route::resource('maintenanceType', 'maintenanceTypesController') ;
//Route::resource('maintenance', 'maintenancesController') ;
Route::resource('expenseCategory', 'expensesController') ;
Route::resource('webgeneral', 'webgeneralsController') ;
Route::resource('feedback', 'feedbacksController') ;
Route::resource('accExpense', 'accExpensesController') ;
Route::resource('accExpense', 'accExpensesController') ;
Route::resource('accExpense', 'accExpensesController') ;
//Route::resource('excel', 'excelController') ;


//Route::get() ;







Route::get('/welcome', 'PagesController@welcome');

Route::get('/hello', 'PagesController@hello');

#Dynamic route
Route::get('/dynamic/{id}', function ($id) {
    return 'Hello this is '.$id ;
});
#Dynamic route
Route::get('/dynamic/{id}/{name}', function ($id, $name) {
    return 'Hello this is '.$name.' with an id '.$id ;
});

Route::group(['middleware' => 'usersession'], function () {
    Route::get('/', function () {
        // Uses User Session Middleware
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');