<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

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

    // Distributor
    Route::delete('distributors/destroy', 'DistributorController@massDestroy')->name('distributors.massDestroy');
    Route::resource('distributors', 'DistributorController');

    // Location
    Route::delete('locations/destroy', 'LocationController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationController');

    // Store
    Route::delete('stores/destroy', 'StoreController@massDestroy')->name('stores.massDestroy');
    Route::resource('stores', 'StoreController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductController');

    // Inventory
    Route::delete('inventories/destroy', 'InventoryController@massDestroy')->name('inventories.massDestroy');
    Route::resource('inventories', 'InventoryController');

    // Order
    Route::delete('orders/destroy', 'OrderController@massDestroy')->name('orders.massDestroy');
    Route::resource('orders', 'OrderController');

    // Order Status
    Route::delete('order-statuses/destroy', 'OrderStatusController@massDestroy')->name('order-statuses.massDestroy');
    Route::resource('order-statuses', 'OrderStatusController');

    // Order Item
    Route::delete('order-items/destroy', 'OrderItemController@massDestroy')->name('order-items.massDestroy');
    Route::resource('order-items', 'OrderItemController');

    // Product Status
    Route::delete('product-statuses/destroy', 'ProductStatusController@massDestroy')->name('product-statuses.massDestroy');
    Route::resource('product-statuses', 'ProductStatusController');

    // Inventory Log
    Route::resource('inventory-logs', 'InventoryLogController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Product Log
    Route::resource('product-logs', 'ProductLogController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Order Log
    Route::resource('order-logs', 'OrderLogController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Order Report
    Route::resource('order-reports', 'OrderReportController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Product Report
    Route::resource('product-reports', 'ProductReportController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Store Report
    Route::resource('store-reports', 'StoreReportController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
