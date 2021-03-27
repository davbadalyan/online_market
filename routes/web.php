<?php

use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;




Route::get('/', [RequestController::class, 'home'])->name('home');

Route::get('/products', [RequestController::class, 'products'])->name('products');

Route::get('/products/{id}', [RequestController::class, 'showOneProduct'])->name('product-data-one');

Route::get('/about', [RequestController::class, 'about'])->name('about');

Route::get('/signIn', [RequestController::class, 'signIn'])->name('signIn');

Route::post('/signIn/check', [RequestController::class, 'signIn_check'])->name('signIn-check');

Route::get('/signUp', [RequestController::class, 'signUp'])->name('signUp');

Route::post('/signUp/check', [RequestController::class, 'signUp_check'])->name('signUp-check');



// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: '. $id. ' NAME: '. $name;
// });




// Route::get('/contacts/all', [ContactController::class, 'allData'])->name('contact-data');