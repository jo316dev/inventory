<?php



Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::prefix('management')->group(function(){

        Route::get('/', 'ManagementController@index')->name('management.index');
    });

    Route::prefix('brands')->group(function(){

        Route::get('/', 'BrandController@index')->name('brand.index');
        Route::get('/create', 'BrandController@create')->name('brand.create');
        Route::post('/store', 'BrandController@store')->name('brand.store');
        Route::get('/edit/{id}', 'BrandController@edit')->name('brand.edit');
        Route::put('/update/{id}', 'BrandController@update')->name('brand.update');
        Route::delete('/delete/{id}', 'BrandController@destroy')->name('brand.delete');

    });
});

// Route::get('/admin/brands', 'Admin\BrandController@index')->name('brand.index');