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

Route::auth();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function ($guard = null) {
        if (Auth::guard($guard == 'admin')->check()) {
            return redirect('/admin');
        }
	})->middleware('auth');
    
    Route::get('/', function () {
        return view('login');
    });

// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
		$data['role'] = \App\UserRole::whereUserId(Auth::id())->get();
		return view('home', $data);
	});
	Route::post('upgrade', function(Request $request){
		if($request->ajax()){
			$msg['success'] = 'false';
			$user = \App\User::find($request->id);
			if($user)
				$user->putRole($request->level);
				$msg['success'] = 'true';

			return response()
				->json($msg);
		}
	});
});

// Route untuk user admin
	Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
        $upload_settuweb = DB::SELECT('select * from upload_settuweb');
		return view('admin.dashboard_settuweb', $data)->with(compact('upload_settuweb'));
	});
});

// Route untuk user yang member
Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function(){
	Route::get('/', function(){
		return view('formupload.setelahtuweb.settuweb');
	});
});

Route::get('/settuweb','SettuwebController@index')->name('settuweb');
Route::post('/upload/settuweb','SettuwebController@upload_settuweb')->name('uploadsettuweb');

Route::get('/dashboard','SettuwebController@tampil')->name('dashboard');

Route::get('/download/file/{id}/{type}', 'SettuwebController@download_file')->name('download');
Route::get('/downloadZip/{id}', 'SettuwebController@downloadZip')->name('downloadZip');

//create user
Route::get('/createusers', 'AdminController@create')->name('createuser');
Route::post('/user', 'AdminController@storeusers')->name('user');
	
});