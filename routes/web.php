<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::resource('books', BookController::class);











// use App\Http\Controllers\ProductController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');






// use App\Http\Controllers\GrettingController;
// use App\Http\Controllers\photoController;
// use App\Http\Controllers\studentController;
// use App\Http\Controllers\UserController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/great', function () {
//     return ('welcome');
// });

// Route::get('/user/{id}/{name}', function ($userid, $username) {
//     return view('users.user', [
//         'id' => $userid,
//         'name' => $username
//     ]);
// });

// Route::get('/kajol', [UserController::class, 'user']);

// Route::get('/greeting/{id}/{name}', [GrettingController::class, 'greeting']);

// resource controller thats gave us CRUD Operation in One controller 
// Route::resource('photos', photoController::class);
// php make:controller photoController --resource
// php artisan route:list 


//create single controller in one controller 
// Route::get('students', studentController::class);
// php make:controller studentController --invokable
