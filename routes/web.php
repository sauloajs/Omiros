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

Route::get('/', function () {
    $links = [
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTW7qzZdFv1ZdVCJWMjgomObxRu_AAiBgLvqRjt53K6pOC-uMPz',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQgTYxr7idHieRsSZFum4t-PiLN6-x4pWPbPh49j5l795GSKCI2',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTx53f6nw0wuX0JFrscHIKYHRuYMp_jqqnrco3JSQPJ8-VeiYK',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQEpyVJ96l-eIaM7sjaruEPw6euTUzEMkZ0qmS6e6Udrdn5Z6bY',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTzz_PtN6gZVqzt8GcNlnlUP-xyZEszoskNt8haB0LVMqRfqNYZ',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTzxWM3wfaJZI0S9ka8r2KU4qEvR6lxym0RLYl1lV_4x0azFYxq',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRkcGnxHbDFPHKJOVk5_q57WIESqOqrJRvLCV1Cf0Zg0uPI22Dc',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSU9NMbHFFZu2jnEYb3KXYj_dFR3iecohRC-cKZ3V8zIgDfUr56',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQrN1f9dvXshGNEkEG6zHlbK5EbwcOeNcrplcUcsKtE5RdhjMa4',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0OQr3p8HuUk5xMb8KzAjec-WCcwGY_6UkOlKNgeaNHycBbX8h',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTmsR3Rjjjz5RLN1Jn6TbjpONkKmGT1fJYkCgaud1E5IipI28y-',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQB0aVZLSoPajAd97nQ-HdtbA4rUmDJrnpOWFYVyjrjzvw_tbwM',
    ];

    $repeat = [
        1, 2, 3, 4, 5
    ];

    return view('welcome', compact('links', 'repeat'));
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
