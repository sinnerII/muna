<?php

use Munastack\Support\Facades\Route;
use App\Controllers\User;


//Route::get('/', [User::class, 'info'])->whereIs(['a' => '\d+'])->whereIs(['b' => '\w+'])->name('routeName');

Route::get('/', function() {
	echo "Root page";
});

Route::get('/test', [User::class, 'info'])->name('test');

Route::get('/user/{id?}/{uid}/{slug}/action', [User::class, 'showInfo'])->name('user-action');

Route::get('/user/{id}/{slug?}/action', function($id, $slug='edit') {
	print_r("Mazafaka Closure");
})->name('closure-name');

Route::post('/', [User::class, 'index2']);
Route::post('/user', [User::class, 'index3']);


Route::put('/posts/10/edit', [User::class, 'index2']);

Route::put('/text/', function() {
	print_r("Closure");
});

Route::delete('/posts/10/delete', [User::class, 'index2']);

Route::match(['get','post'], '/mazafaka', function() {
	echo "MATCH";
});

Route::map('asdfa',[App\Controller::class, 'index']);
