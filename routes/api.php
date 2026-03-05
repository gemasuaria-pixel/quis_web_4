<?php
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//default endpoint api: http://api.test/api

Route::get('/users', function () {
    $users = user::all();
    $json_users = json_encode($users);
    return $json_users;
});

Route::get('/user/search', function (Request $request) {
    $users = User::where('name', 'like', '%'. $request->nama.'%')->get();
     return json_encode($users);
});

Route::get('/user', function (Request $request) {
    $user = User::find($request->id)->get();
     return json_encode($user);
});