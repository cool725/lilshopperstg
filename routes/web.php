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
    return view('home');
});
Route::get('/holiday-shop-gifts', function () {
    $momGifts = [
        [
            'id' => 'K4-0203',
            'type' => 'M2-1',
            'title' => 'COOL MOM STICKER',
            'profits' => ['0.50', '0.50', '0.50']
        ],
        [
            'id' => 'K4-0400',
            'type' => 'M4-1',
            'title' => '#1 MOM PVC KEYCHAIN',
            'profits' => ['1.00', '1.00', '1.25']
        ],
        [
            'id' => 'K4-0401',
            'type' => 'M4-2',
            'title' => '#1 GRANDMA PVC KEYCHAIN',
            'profits' => ['1.00', '1.00', '1.25']
        ],
        [
            'id' => 'K4-0503',
            'type' => 'M5-1',
            'title' => 'BEST EVER MOM HEART PEN',
            'profits' => ['1.50', '1.75', '2.00']
        ],
        [
            'id' => 'K4-0504',
            'type' => 'M5-2',
            'title' => 'BEST EVER GRANDMA HEART PEN',
            'profits' => ['1.50', '1.75', '2.00']
        ],
        [
            'id' => 'K-3408',
            'type' => 'M5-3',
            'title' => 'DESIGNER RING ASSORTMENT',
            'profits' => ['1.50', '1.75', '2.00']
        ],
        [
            'id' => 'K-3409',
            'type' => 'M5-4',
            'title' => 'ALL SEASONS EARRING ASSORTMENT',
            'profits' => ['1.50', '1.75', '2.00']
        ],
        [
            'id' => 'K4-0602',
            'type' => 'M6-1',
            'title' => 'MOM DONUT JAR 2D MAGNET',
            'profits' => ['2.00', '2.25', '2.50']
        ],
    ];
    $dadGifts = [
        [
            'id' => 'K7-0203',
            'type' => 'D2-1',
            'title' => 'TOP DAD SUPER STICKER',
            'profits' => ['0.50', '0.50', '0.50']
        ],
    ];
    $childGifts = [
        [
            'id' => 'K1-0101',
            'type' => 'C1-1',
            'title' => 'AMAZING GROWING SEA CREATURES (30 ASST.)',
            'profits' => ['0.25', '0.25', '0.25']
        ],
    ];

    return view('holiday-shop-gifts', [
        'momGifts' => $momGifts,
        'dadGifts' => $dadGifts,
        'childGifts' => $childGifts,
    ]);
});
Route::get('/price-codes', function () {
    return view('price-codes');
});
Route::get('/merchandise-guarantee', function () {
    return view('merchandise-guarantee');
});

Route::get('/online-access', function () {
    return view('online-access');
});
Route::get('/cash-register-app', function () {
    return view('cash-register-app');
});
