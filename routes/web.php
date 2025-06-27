<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
    $name = 'arwa';
     $departments =[
        '1'=> 'Tichnical',
        '2'=> 'Financial',
        '3'=> 'Sales',
    ];
    // return view('about', ['name' => $name] );
    return view('about',compact('name'));

});
Route::post('/about',function () {
    $name =$_POST['name'];
    $departments =[
        '1'=> 'Tichnical',
        '2'=> 'Financial',
        '3'=> 'Sales',
    ];
    return view('/about',compact('name'));
});