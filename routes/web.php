<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('/results', 'HomeController@results')->name('results');
Route::get('/notification', 'HomeController@notification')->name('notification');
Route::get('notification_detail/{id}','HomeController@notification_detail')->name('notification_detail');
Route::get('/whoiswho', 'HomeController@whoiswho')->name('whoiswho');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/vacancy', 'HomeController@vacancy')->name('vacancy');
Route::get('/tender', 'HomeController@tender')->name('tender');
Route::get('/download', 'HomeController@download')->name('download');
Route::get('/acts', 'HomeController@acts')->name('acts');
Route::get('/rules', 'HomeController@rules')->name('rules');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/publications', 'HomeController@publications')->name('publications');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    //Notification
    Route::delete('notification/destroy', 'NotificationController@massDestroy')->name('notification.massDestroy');
    Route::resource('notification', 'NotificationController');
    
    // News Categories
    Route::delete('news-categories/destroy', 'NewsCategoryController@massDestroy')->name('news-categories.massDestroy');
    Route::post('news-categories/media', 'NewsCategoryController@storeMedia')->name('news-categories.storeMedia');
    Route::post('news-categories/ckmedia', 'NewsCategoryController@storeCKEditorImages')->name('news-categories.storeCKEditorImages');
    Route::get('news-categories/check-slug', 'NewsCategoryController@checkSlug')->name('news-categories.checkSlug');
    Route::resource('news-categories', 'NewsCategoryController');

    // Product Categories
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::get('product-categories/check-slug', 'ProductCategoryController@checkSlug')->name('product-categories.checkSlug');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tags
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Products
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::get('products/check-slug', 'ProductController@checkSlug')->name('products.checkSlug');
    Route::resource('products', 'ProductController');

});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }

});

Route::get('/{category:slug}/{childCategory:slug?}/{childCategory2?}', 'HomeController@category')->name('category');
Route::get('/{category}/{childCategory}/{childCategory2}/{productSlug}/{product}', 'HomeController@product')->name('product');