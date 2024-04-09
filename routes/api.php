<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/blogs', 'PublicPages@blogs');
Route::get('/allProducts', 'PublicPages@allProducts');
Route::get('/bsa-dibcard', 'PublicPages@dibcard');
Route::get('/biocare', 'PublicPages@biocare');
Route::get('/bsapharma', 'PublicPages@bsapharma');
Route::get('/orthocare', 'PublicPages@orthocare');
Route::get('/aquamin', 'PublicPages@aquamin');
Route::get('/UC', 'PublicPages@UC');
Route::get('/BOSWELLIN', 'PublicPages@BOSWELLIN');
Route::get('/HALDIMAX', 'PublicPages@HALDIMAX');
Route::get('/BIOPERINE', 'PublicPages@BIOPERINE');
Route::get('/DIGEZYME', 'PublicPages@DIGEZYME');
Route::get('/ULTRAGEN', 'PublicPages@ULTRAGEN');
Route::get('/CARNIPURE', 'PublicPages@CARNIPURE');
Route::get('/gynaecare', 'PublicPages@gynaecare');
Route::get('/herbal', 'PublicPages@herbal');
Route::get('/latest', 'PublicPages@latest');
Route::get('/Reports', 'PublicPages@Reports');
Route::get('/video', 'PublicPages@video');
Route::get('/get/mr', 'PublicPages@getmr');
Route::delete('/get/mr/{id}', 'PublicPages@deletemr');

Route::post('/userdata/ppt', 'PublicPages@userdatappt');
Route::get('/getppt/byuserid/', 'PublicPages@userdatapptbyid');
Route::delete('/deleteppt/byuserid/{userid}/{productname}', 'PublicPages@userpptdelete');

Route::get('/getvisual/user/{id}', 'PublicPages@getvisualbyid');

Route::post('/userdata', 'PublicPages@userdata');
Route::post('/store/doctor/visual', 'PublicPages@storevidualdoctor');
Route::post('/allProducts/{keywords}', 'PublicPages@allProducts');
Route::post('/add/doctor', 'PublicPages@adddoctor');
Route::get('/get/doctor/', 'PublicPages@getdoctore');
Route::get('/getallproduct/', 'PublicPages@getallproduct');
Route::delete('/get/doctor/{id}', 'PublicPages@getdoctorid');

Route::post('/admin/doctor/update/status','PublicPages@updatestatus');

Route::post('/productcategories', 'PublicPages@productcategories');
Route::get('/productcategories/{id}', 'PublicPages@productcategoriesss');
Route::get('/rumi-division', 'PublicPages@rumi');
Route::get('/allproductwithid/{id}', 'PublicPages@products');

Route::get('/searchCategory', 'PublicPages@searchCategory');

Route::post('/carts', 'PublicPages@addtocart');
Route::post('/savedproduct', 'PublicPages@savedproduct');
Route::get('/allsavedproduct', 'PublicPages@allsavedproduct');
Route::delete('/deletesavedproduct', 'PublicPages@deletesavedproduct');
Route::post('/savedpptproduct', 'PublicPages@savedpptproduct');
Route::get('/allsavedpptproduct', 'PublicPages@allsavedpptproduct');
Route::post('/getcarts', 'PublicPages@getcartdata');
Route::put('/getcarts', 'PublicPages@updatecartdata');
Route::delete('/getcarts', 'PublicPages@deletecartdata');

Route::post('/addAddress', 'PublicPages@addAddress');
Route::post('/getAddress', 'PublicPages@getAddress');

Route::post('/placeOrder','PublicPages@placeOrder');

Route::post('/get_place_order','PublicPages@get_place_order');
Route::post('/get_place_order_details','PublicPages@get_place_order_details');

Route::post('/mr/create', 'PublicPages@mrcreate');
Route::post('/mr_login', 'PublicPages@mr');
Route::post('/update_mr_deatils', 'PublicPages@update_mr_deatil');
Route::post('/change_admin_password', 'PublicPages@updateAdminPassword');

Route::post('/add-enquiries', 'PublicPages@addenquiries');