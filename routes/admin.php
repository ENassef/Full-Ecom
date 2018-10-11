<?php



Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    
    Config::set('auth.defines', 'admin');
    Route::get('login','AdminAuth@login');
    //Route::group(['middleware' => 'admin:admin'],function(){
        
        Route::get('/',function(){
            return view('admin.home');
        }); 
    //});
    
});