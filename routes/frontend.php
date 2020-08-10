<?php
Route::get('/','FrontendController@index')->name('home');

Route::get('/blog','BlogController@blog')->name('blog');

Route::get('/about','FrontendController@about')->name('about');

Route::get('/blogDetails','BlogController@blogDetails')->name('blogDetails');

Route::get('/contact_us','FrontendController@contact_us')->name('contact_us');

Route::get('/faq','FrontendControllerController@faq')->name('faq');

Route::get('/product','ProductController@product')->name('product');
Route::get('/product_detail','ProductController@product_detail')->name('product_detail');

Route::get('/shopping_cart','shoppingcartController@shopping_cart')->name('shopping_cart');

Route::get('/shopping_1','CheckordersController@Checkout')->name('shopping_1');
Route::post('/shopping_1','CheckordersController@PostCheckout')->name('shopping_1');

Route::get('/add-cart/{id}','FrontendController@Addcart')->name('add-cart');
Route::get('/remove/{id}','FrontendController@DeleteItemCart')->name('remove');
Route::get('/remove-shopping-cart/{id}','shoppingcartController@DeleteItemShopCart')->name('remove-shopping-cart');
Route::get('/save-shopping-cart/{id}/{quanty}','shoppingcartController@SaveItemShopCart')->name('save-shopping-cart');
Route::get('/Save-all','shoppingcartController@SaveAllItemShopCart')->name('Save-all');
Route::get('/Dell-all','shoppingcartController@DellAllItemShopCart')->name('Dell-all');






Route::get('/singup','login_sing_upController@getsingup')->name('singup');
Route::post('/singup','login_sing_upController@postsingup')->name('singup');

Route::get('/singin','login_sing_upController@getsingin')->name('singin');

Route::post('/singin','login_sing_upController@postsingin')->name('singin');

Route::get('/logout','login_sing_upController@getlogout')->name('logout');


?>