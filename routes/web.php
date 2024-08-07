<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// landing page
Route::get('/', function () {
    return view('landing-page.beranda.beranda');
});

Route::get('/beranda', function () {
    return view('landing-page.beranda.beranda');
});

Route::get('/tentang-kami', function () {
    return view('landing-page.about.about');
});

Route::get('/blog', function () {
    return view('landing-page.blog.blog');
});

Route::get('/faqs', function () {
    return view('landing-page.faqs.faqs');
});

Route::get('/kontak', function () {
    return view('landing-page.contact.contact');
});

// dashboard user
Route::get('/ticket', function () {
    return view('dasboard.ticket.ticket');
});

Route::get('/chair', function () {
    return view('dasboard.chair.chair');
});

Route::get('/seat', function () {
    return view('dasboard.seat/seat');
});

Route::get('/payment', function () {
    return view('dasboard.payment.payment');
});

Route::get('/transfer', function () {
    return view('dasboard.transfer.transfer');
});

Route::get('/dashboard', function () {
    return view('dasboard.dashboard.dashboard');
});

Route::get('/detail-tiket', function () {
    return view('dasboard.detail-tiket.detail-tiket');
});

Route::get('/profil', function () {
    return view('dasboard.profil.profil');
});

Route::get('/ubah-password', function () {
    return view('dasboard.ubah-password.ubah-password');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

