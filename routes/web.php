<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Students;

// List all Students
Route::get('/', function () {
    return view('login',[
        'title'=> 'Students Login',
        'students' => Students::all()
    ]);
});

// List Single Student
Route::get('/students/{id}', function($id){
    return view('student', [
        'student' => Students::find($id)
    ]);
});