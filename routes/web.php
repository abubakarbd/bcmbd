<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('download','DownloadController@onDownload');

Auth::routes(['register' => false]);
//Admin Route
Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'Admin'],function() {
	Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::get('profile', 'AdminController@profile')->name('Admin.profile');
	Route::post('password', 'AdminController@password')->name('Admin.password');

	Route::get('app','AppController@index')->name('app.index');


	Route::get('agent/list','AgentController@index')->name('agent.index');
	Route::get('agent/create','AgentController@AgentForm')->name('agent.Form.create');
	Route::post('agent/create','AgentController@AgentFormSave')->name('agentForm.Save');
	Route::get('agent/active/{id}','AgentController@active')->name('agent.active');
	Route::get('agent/inactive/{id}','AgentController@inactive')->name('agent.inactive');
	Route::get('agent/delete/{id}','AgentController@delete')->name('agent.delete');


	Route::get('agent/pakage/list','AgentController@pakage')->name('agent.pakage.index');
	Route::get('agent/pakage/edit/{id}','AgentController@pakageEdit')->name('pakage.Edit');
	Route::get('agent/pakage/create/{id}','AgentController@AgentFormPakage')->name('agent.Form.pakage.create');
	Route::post('agent/pakage/create','AgentController@AgentFormPakageSave')->name('agentForm.pakage.Save');
	Route::post('agent/pakage/update','AgentController@pakageUpdate')->name('agentForm.pakage.update');
});

//Agent Route
Route::group(['prefix'=>'agent','middleware'=>['agent','auth'],'namespace'=>'agent'],function() {
	Route::get('dashboard', 'AgentDashboardController@index')->name('Agent.dashBoard');
	Route::get('profile', 'AgentDashboardController@profile')->name('Agent.profile');
	Route::post('password', 'AgentDashboardController@password')->name('Agent.password');
	Route::post('update', 'AgentDashboardController@profileUpdate')->name('Agent.profile.update');


	Route::get('user/list','UserController@index')->name('user.index');
	Route::get('user/create','UserController@userForm')->name('userForm.create');
	Route::post('user/save','UserController@saveUser')->name('userForm.save');
	Route::get('user/view/{id}','UserController@viewUser')->name('user.View');
	Route::get('user/edit/{id}','UserController@editUser')->name('user.Edit');
	Route::post('user/update','UserController@update')->name('user.Update');
	Route::get('user/allactive/{id}','UserController@allActive')->name('user.bill.Active');
	Route::get('user/active/{id}','UserController@active')->name('user.Active');
	Route::get('user/inactive/{id}','UserController@inactive')->name('user.inActive');
	Route::get('user/delete/{id}','UserController@delete')->name('user.Delete');
	

	Route::get('bill/shit','ClientBillController@billShit')->name('bill.shit');
	Route::get('bill/create','ClientBillController@create')->name('bill.create');
	Route::post('bill/save','ClientBillController@agentbillSave')->name('bill.save');
	Route::get('bill/month/list/{month?}','ClientBillController@billMonthList')->name('bill.month.index');
	Route::get('bill/month/show','ClientBillController@billMonthShow')->name('admin.sales.monthly');


	Route::post('bill/pay/january','ClientBillController@january')->name('user.bill.pay.january');
	Route::post('bill/pay/february','ClientBillController@february')->name('user.bill.pay.february');
	Route::post('bill/pay/march','ClientBillController@march')->name('user.bill.pay.march');
	Route::post('bill/pay/april','ClientBillController@april')->name('user.bill.pay.april');
	Route::post('bill/pay/may','ClientBillController@may')->name('user.bill.pay.may');
	Route::post('bill/pay/june','ClientBillController@june')->name('user.bill.pay.june');
	Route::post('bill/pay/july','ClientBillController@july')->name('user.bill.pay.july');
	Route::post('bill/pay/august','ClientBillController@august')->name('user.bill.pay.august');
	Route::post('bill/pay/september','ClientBillController@september')->name('user.bill.pay.september');
	Route::post('bill/pay/october','ClientBillController@october')->name('user.bill.pay.october');
	Route::post('bill/pay/november','ClientBillController@november')->name('user.bill.pay.november');
	Route::post('bill/pay/december','ClientBillController@december')->name('user.bill.pay.december');

	Route::get('mane/create','LineManeController@create')->name('mane.create');
	Route::post('mane/save','LineManeController@formSave')->name('linemaneForm.save');
	
	Route::get('mane/list','LineManeController@index')->name('linemane.index');
	Route::get('mane/active/{id}','LineManeController@active')->name('mane.Active');
	Route::get('mane/inactive/{id}','LineManeController@inactive')->name('mane.inActive');
	Route::get('mane/delete/{id}','LineManeController@delete')->name('mane.Delete');

});

//Line Mane Route
Route::group(['prefix'=>'lmane','middleware'=>['linemane','auth'],'namespace'=>'lmane'],function(){
	Route::get('dashboard','LinemaneController@index')->name('Linemane.dashboard');
	Route::get('profile', 'LinemaneController@profile')->name('Linemane.profile');
	Route::post('password', 'LinemaneController@password')->name('Linemane.password');


	Route::get('user/list','LinemaneUcerController@index')->name('lmane.user.index');
	Route::get('bill/create','BillController@create')->name('lmane.bill.create');
	Route::post('bill/save','BillController@billSave')->name('lmane.bill.save');
});
