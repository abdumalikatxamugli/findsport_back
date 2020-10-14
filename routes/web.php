<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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
Route::get('getimage', function () {
    $path = urldecode($_GET['path']);
   

    $file = Storage::get($path);
     $type = mime_content_type(storage_path()."/app/".$path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('unimg');
// ===========Auth routes ================================
Auth::routes();
// Auth::routes(['register' => false]);
// Route::get('/regad', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/regad', 'Auth\RegisterController@register');


// ==============Admin===============================

Route::get('/admin', 'Admin\Admin@index')->middleware('auth')->name('admin');

Route::get('/signin', function(){return view('admin.login.index');})->name('mylogin');




// ================= FRONTEND ==============================//

// home redirect
// Route::get('/', function(){
//   return redirect(route('home',['l'=>'ru']));
// });


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function(){
        // places
        Route::get('/places', "Admin\Places@list")->name("places.list");
        Route::match(['get', 'post'], '/places/create', "Admin\Places@create")->name('places.create');
        Route::get('place/delete/{id}', "Admin\Places@delete")->name("places.delete");
        Route::match(['get', 'post'], '/place/{id}/', "Admin\Places@one")->name('places.edit');

        // sections
        Route::get('/sections', "Admin\Section@list")->name("sections.list");
        Route::match(['get', 'post'], '/sections/create', "Admin\Section@create")->name('sections.create');
        Route::get('section/delete/{id}', "Admin\Section@delete")->name("sections.delete");
        Route::match(['get', 'post'], '/section/{id}/', "Admin\Section@one")->name('sections.edit');

        // delete trainer

        Route::get('trainer_delete/{sec_id}/{id}', 'Admin\Trainers@delete')->name('delete_trainer');
        // add trainer
        Route::post('trainer_add/{sec_id}', 'Admin\Trainers@add')->name('add_trainer');


    });
    
});
Route::middleware(['auth'])->group(function () {
    generic_route("/admin/sport", "Admin\SportController", "sport");
    generic_route("/admin/media", "Admin\MediaModelController", "media");
    generic_route("/admin/clubs", "Admin\ClubController", "clubs");
});
// media lib

Route::post('/mmap', "MediaLibrary@set_mapping")->name('media_map');


Route::post('/medialib/upload', "MediaLibrary@upload_media")->name('upload_media');


/**frontend routes

*/ 

// home
Route::get('/{l}/', 'Frontend@home')->name('home');
// places list
Route::get('/{l}/places', 'Frontend@places')->name('places');
// sections list
Route::get('/{l}/sections', 'Frontend@sections')->name('sections');
// clubs list
Route::get('/{l}/clubs', 'Frontend@clubs')->name('clubs');
// media example
Route::get('/{l}/media', 'Frontend@media')->name('media');

// section inner page
Route::get('/{l}/sections/{id}','Frontend@section')->name('section');
// place inner page
Route::get('/{l}/places/{id}','Frontend@place')->name('place');
// club inner page
Route::get('/{l}/clubs/{id}','Frontend@club')->name('club');

// ============== Storage Helper Routes =====================
Route::get('img/{master_table}/{name}', function ($master_table,$name) {
    $path = storage_path("app/$master_table/" . $name);
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


