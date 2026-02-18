<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.home');
})->name('home');

Route::get('/menu', function () {
    return view('Menu.menu');
})->name('menu');

Route::get('/shop', function () {
    return view('Shop.shop');
})->name('shop');

Route::get('/our-strory', function () {
    return view('Our_Story.our_story');
})->name('our-strory');

Route::get('/recipes', function () {
    return view('Recipes.recipes');
})->name('recipes');

Route::get('/contact', function () {
    return view('Contact.contact');
})->name('contact');

Route::get('/product_details', function () {
    return view('Product_details.product_details');
})->name('product_details');

Route::get('/blog_details', function () {
    return view('Blog_Details.blog_details');
})->name('blog-details');

Route::get('/cart', function () {
    return view('Cart.cart');
})->name('cart');

Route::get('/account', function () {
    return view('Account.account');
})->name('account');