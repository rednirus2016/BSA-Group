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

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/keywords.xml', 'SitemapController@keywords');
Route::get('/city.xml', 'SitemapController@city');
Route::get('/category.xml', 'SitemapController@categories');

Route::get('/search-product','PublicPages@search');
Route::get('/contact', function () {
return view('contact');
});
Route::get('/about-us', function () {
return view('about');
});
Route::get('/pcd-pharma-franchise', function () {
return view('pcd');
});
Route::get('/third-party-manufacturing', function () {
return view('third');
});
Route::post('/enquiry/store','EnquirysController@store');



Route::get('/', function () {
return view('welcome');
});


Route::get('/contact-us', function () {
return view('contact');
});
Route::get('/rumi-pharma', 'CategoriesController@rumi');
Route::get('/thea', 'CategoriesController@thea'); 
Route::get('/nyx', 'CategoriesController@nyx');
Route::get('/janus-gold', 'CategoriesController@gold');
Route::get('/all-Category', 'CategoriesController@all');
Route::get('/category/{id}', 'CategoriesController@alldetail');
Route::post('/results', 'CategoriesController@results');
Route::get('/results/{keywords}/{name}/{category}/{cit}', 'CategoriesController@finalresult');
Route::get('/product/{productId}/{categoryid}', 'CategoriesController@products');
Route::get('/admin','Auth\LoginController@showLoginForm')->name('admin');
Route::post('/admin','Auth\LoginController@login');
Route::group(['middleware' => 'auth'],function(){
Route::post('/logout','Auth\LoginController@logout');
//Home Routes...
Route::get('/admin/home', 'HomeController@index')->name('home');
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
//Blog Routes...
Route::get('/admin/blogs/add', 'BlogsController@new');
Route::post('/admin/blogs/add/store', 'BlogsController@store');
Route::get('/admin/blogs/view', 'BlogsController@view');
Route::get('/admin/blogs/edit/{pid}', 'BlogsController@edit');
Route::post('/admin/blogs/update', 'BlogsController@update');
Route::get('/admin/blogs/change-status/{bid}', 'BlogsController@changestatus');
});
Route::get('/{data}','PublicPages@index');