<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/admin-payroll', function () {
    return view('a-4-payroll');
});

Route::get('/admin-aboutus', function () {
    return view('a-6-aboutus');
});

Route::get('/admin-accessrole', function () {
    return view('a-7-accessrole');
});

Route::get('/admin-customaccess', function () {
    return view('a-7-customaccess');
});

Route::get('/admin-customevaluation', function () {
    return view('a-8-customevaluation');
});

Route::get('/admin-evaluation', function () {
    return view('a-8-evaluation');
});

Route::get('/admin-evaluation-evaluate', function () {
    return view('a-8-evaluation-evaluate');
});

Route::get('/admin-evaluation-viewevaluation', function () {
    return view('a-8-evaluation-viewevaluation');
});


Route::get('/employee-employeeselfservice', function () {
    return view('e-1-employee');
});

Route::get('/employee-timesheet', function () {
    return view('e-2-timesheet');
});

Route::get('/employee-workschedule', function () {
    return view('e-2-workschedule');
});

Route::get('/employee-payroll', function () {
    return view('e-3-payroll');
});

Route::get('/employee-timeattendance', function () {
    return view('e-3-timeattendance');
});

Route::get('/employee-certificateofemployment', function () {
    return view('e-4-coe');
});

Route::get('/employee-leaveapplicationform', function () {
    return view('e-4-laf');
});

Route::get('/employee-otherwaives', function () {
    return view('e-4-ow');
});


Route::get('/hr-jobvacancies', function () {
    return view('h-1-vacancies');
});

Route::get('/hr-jobcandidates', function () {
    return view('h-1-candidates');
});

Route::get('/hr-employeelist', function () {
    return view('h-2-employee');
});

Route::get('/hr-timesheet', function () {
    return view('h-3-timesheet');
});

Route::get('/hr-workschedule', function () {
    return view('h-3-workschedule');
});

Route::get('/hr-payroll', function () {
    return view('h-4-payroll');
});

Route::get('/hr-certificateofemployment', function () {
    return view('h-5-coe');
});

Route::get('/hr-leaveapplicationform', function () {
    return view('h-5-laf');
});

Route::get('/hr-otherwaives', function () {
    return view('h-5-ow');
});


Route::get('/manager-workschedule', function () {
    return view('m-2-workschedule');
});

Route::get('/officerincharge-workschedule', function () {
    return view('oic-2-workschedule');
});


Route::get('/user-recruitment', function () {
    return view('u-1-recruitment');
});

Route::get('/user-recruitment-jobapplication', function () {
    return view('u-1-recruitment-jobapplication');
});


Route::get('/', function () {
    return view('index');
});
