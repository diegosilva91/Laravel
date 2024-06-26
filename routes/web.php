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

Route::get('/', function () {
    return view('welcome');
    //return 'Hi';
});
Route::get('control', function () {
    $name='Diego';
	$options=array(
	    'name'=>$name,
	    'lastName'=>'Silva',
        'profile'=>'admin'
    );
	return view('control')->with('options',$options);
    //    return view('control',compact('name'));
    //    return view('control', ['name'=>$name]);
    //    return view('control')->with('name',$name);
    //	  return view('control', [
    //		'name'=>$name,
    //		'lastName'=>$lastName]);
});
Route::get('users/{users}/{id}', function ($users,$id) {
    return 'Welcome '.$users. ' with ID='.$id;
});

//Route::get('users/{users}/{id}', function ($users,$id) {
Route::get('users/{id}', function ($id) {
    $users=App\Users::find($id);
    echo $users->username;
//    return 'Welcome '.$users. ' with ID='.$id;
});
Route::get('users-name/{username}', function ($username) {
    $users=App\Uers::where('username','=',$username)->first();
    echo $users->password;
});
Route::get('friends', 'FriendsController@showFriend');
