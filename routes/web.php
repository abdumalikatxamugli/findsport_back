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
// =========== Artisan helpers ========================
Route::get('/clear-cache', 'ArtisanController@clearCache');
Route::get('/clear-config', 'ArtisanController@configCache');

// ===========Auth routes ================================
Auth::routes();
// Auth::routes(['register' => false]);
// Route::get('/regad', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/regad', 'Auth\RegisterController@register');


// ==============Admin===============================

Route::get('/admin', 'Admin@index')->middleware('auth')->name('admin');

Route::get('/signin', function(){return view('admin.login.index');})->name('mylogin');

Route::get('/admin/emp/{type}/create', 'Admin@create_employee')
			->middleware('auth')
			->name('create_emp');

Route::post('/admin/emp/save', 'Admin@save_employee')
			->middleware('auth')
			->name('save_emp');

Route::get('/admin/emp/{type}/', 'Admin@index_employees')
			->middleware('auth')
			->name('index_emp');

Route::get('/admin/emp/{type}/edit/{id}', 'Admin@edit_employees')
			->middleware('auth')
			->name('edit_emp');

Route::get('/admin/emp/{type}/delete/{id}', 'Admin@delete_employees')
			->middleware('auth')
			->name('delete_emp');


// ================= FRONTEND ==============================//

// home redirect
Route::get('/', function(){
  return redirect(route('home',['l'=>'ru']));
});

// home

Route::get('/{l}', 'Frontend@home')->name('home');



// ============== Storage Helper Routes =====================
Route::get('img/{master_table}/{master_id}/{name}', function ($master_table,$master_id,$name) {
    $path = storage_path("app/uploads/$master_table/$master_id/" . $name);
    // print_r($path);
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('img');
