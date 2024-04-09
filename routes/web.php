<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
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
// Route::get('/', function () {
//     return Redirect::to('/Home');
// });

// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});


Route::get('/search-data','PublicPages@searchdata');



//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

Route::get('/privacy-policy', function() {
    return view('policy');
});


// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});



Route::get('/search-product','PublicPages@search');


Route::get('/', function () {
 return redirect('/admin');
});


Route::post('/enquiry/store','EnquirysController@store');

Route::get('/admin','Auth\LoginController@showLoginForm')->name('admin');
Route::post('/admin','Auth\LoginController@login');



Route::group(['middleware' => 'auth'],function(){
Route::post('/logout','Auth\LoginController@logout');
//Home Routes...
Route::get('/admins', 'HomeController@index')->name('home');
Route::get('/home/enquiries', 'EnquirysController@view');
//Category Routes...
Route::get('/admin/categories/add', 'CategoriesController@new');
Route::post('/admin/categories/add/store', 'CategoriesController@store');
Route::get('/admin/categories/view', 'CategoriesController@view');
Route::get('/admin/categories/edit/{cid}', 'CategoriesController@edit');
Route::post('/admin/categories/update', 'CategoriesController@update');
Route::post('/admin/categories/change-status/{cid}', 'CategoriesController@changestatus');

//Product Routes...
Route::get('/admin/products/add', 'ProductsController@new');
Route::post('/admin/products/add/store', 'ProductsController@store');
Route::get('/admin/products/view', 'ProductsController@view');
Route::get('/admin/products/edit/{pid}', 'ProductsController@edit');
Route::post('/admin/products/update', 'ProductsController@update');
Route::get('/admin/products/change-status/{pid}', 'ProductsController@changestatus');
Route::post('/admin/products/view/import', 'ProductsController@import');  
Route::post('/admin/products/view/search', 'ProductsController@search');
Route::post('/update-product-with-all-category-and-update', 'ProductsController@productcategorykeywords');

//visual Routes...
Route::get('/admin/visual/add', 'VisualController@create');
Route::post('/admin/visual/add/store', 'VisualController@store');
 Route::get('/admin/visual/view', 'VisualController@show');
  Route::get('/admin/visual/edit/{id}', 'VisualController@edit');
  Route::get('/admin/visual/delete/{id}', 'VisualController@destroy');
  Route::post('/admin/visual/update/{id}', 'VisualController@update')->name('/admin.visual.update');




//Blog Routes...
Route::get('/admin/blogs/add', 'BlogsController@new');
Route::post('/admin/blogs/add/store', 'BlogsController@store');
Route::get('/admin/blogs/view', 'BlogsController@view');
Route::get('/admin/blogs/edit/{pid}', 'BlogsController@edit');
Route::post('/admin/blogs/update', 'BlogsController@update');
Route::get('/admin/blogs/change-status/{bid}', 'BlogsController@changestatus');
});




Route::get('/{data}','PublicPages@index');