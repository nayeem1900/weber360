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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('ibch', 'Frontend\FrontendController@ibch')->name('ibch');
Route::get('ibhmirpur', 'Frontend\FrontendController@ibhmirpur')->name('ibhmirpur');
Route::get('ibmoh', 'Frontend\FrontendController@ibmoh')->name('ibmoh');
Route::get('ibhmugdha', 'Frontend\FrontendController@ibhmugdha')->name('ibhmugdha');
Route::get('ibh_luxmipur', 'Frontend\FrontendController@ibhluxmipur')->name('ibh_luxmipur');
Route::get('ibch_manikgonj', 'Frontend\FrontendController@ibch_manikgonj')->name('ibchmanikgonj');
Route::get('workflow_automation_and_data_engineering', 'Frontend\FrontendController@wade')->name('wade');
Route::get('foundation_committee', 'Frontend\FrontendController@foundationcommittee')->name('foundationcommittee');
Route::get('executive_committee', 'Frontend\FrontendController@executivecommittee')->name('executivecommittee');
Route::get('audit_committee', 'Frontend\FrontendController@auditcommittee')->name('auditcommittee');
Route::get('hospital_committee', 'Frontend\FrontendController@hospitalcommittee')->name('hospitalcommittee');
Route::get('community_hospital_committee', 'Frontend\FrontendController@communityhospitalcommittee')->name('communityhospitalcommittee');
Route::get('education_committee', 'Frontend\FrontendController@educationcommittee')->name('educationcommittee');
Route::get('health_education_committee', 'Frontend\FrontendController@healtheducationcommittee')->name('healtheducationcommittee');
Route::get('nursing_barisal', 'Frontend\FrontendController@nursingbarisal')->name('nursingbarisal');
Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');
Route::get('etender', 'Frontend\FrontendController@etender')->name('etender');
Route::get('career', 'Frontend\FrontendController@career')->name('career');
Route::get('jakat', 'Frontend\FrontendController@jakat')->name('jakat');
Route::get('hospital-info', 'Frontend\FrontendController@hospitalinfo')->name('hospital-info');
Route::get('educational-institute', 'Frontend\FrontendController@educationinfo')->name('educational-institute');
Route::get('job-apply', 'Frontend\FrontendController@jobapply')->name('job-apply');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/employee', 'HomeController@index')->name('home.employee');*/

Route::group(['middleware'=>'auth'],function (){
    Route::prefix ('users')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });
    Route::prefix ('profiles')->group (function () {
        //sliders
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


    });
    Route::prefix ('logos')->group (function () {
        //admin-dashboard
        Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
        Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
        Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
        Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
        Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
        Route::post('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
    });
    Route::prefix ('sliders')->group (function () {
        //slider
        Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
        Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
        Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
        Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
        Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
        Route::post('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
    });
    Route::prefix ('etenders')->group (function () {
        //slider
        Route::get('/view', 'Backend\EtenderController@view')->name('etenders.view');
        Route::get('/add', 'Backend\EtenderController@add')->name('etenders.add');
        Route::post('/store', 'Backend\EtenderController@store')->name('etenders.store');
        Route::get('/edit/{id}', 'Backend\EtenderController@edit')->name('etenders.edit');
        Route::post('/update/{id}', 'Backend\EtenderController@update')->name('etenders.update');
        Route::post('/delete/{id}', 'Backend\EtenderController@delete')->name('etenders.delete');
        Route::post('/download', 'Backend\EtenderController@download')->name('etenders.download');
    });
    Route::prefix ('wde')->group (function () {
        //wde
        Route::get('/view', 'Backend\WdeController@view')->name('wdes.view');
        Route::get('/add', 'Backend\WdeController@add')->name('wdes.add');
        Route::post('/store', 'Backend\WdeController@store')->name('wdes.store');
        Route::get('/edit/{id}', 'Backend\WdeController@edit')->name('wdes.edit');
        Route::post('/update/{id}', 'Backend\WdeController@update')->name('weds.update');
        Route::post('/delete/{id}', 'Backend\WdeController@delete')->name('weds.delete');
        Route::post('/download', 'Backend\EtenderController@download')->name('etenders.download');
    });

    Route::prefix ('carriers')->group (function () {
        //slider
        Route::get('/view', 'Backend\CarrierController@view')->name('carriers.view');
        Route::get('/add', 'Backend\CarrierController@add')->name('carriers.add');
        Route::post('/store', 'Backend\CarrierController@store')->name('carriers.store');
        Route::get('/edit/{id}', 'Backend\CarrierController@edit')->name('carriers.edit');
        Route::post('/update/{id}', 'Backend\CarrierController@update')->name('carriers.update');
        Route::post('/delete/{id}', 'Backend\CarrierController@delete')->name('carriers.delete');
        Route::post('/download', 'Backend\CarrierController@download')->name('carriers.download');
    });

    Route::prefix ('departments')->group (function () {

        Route::get('/view', 'Backend\DepartmentController@view')->name('departments.view');
        Route::get('/add', 'Backend\DepartmentController@add')->name('departments.add');
        Route::post('/store', 'Backend\DepartmentController@store')->name('departments.store');
        Route::get('/edit/{id}', 'Backend\DepartmentController@edit')->name('departments.edit');
        Route::post('/update/{id}', 'Backend\DepartmentController@update')->name('departments.update');

    });

});
