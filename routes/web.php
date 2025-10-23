<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {return view('home');});
Route::get('/contact', function () {return view('contact');});
Route::resource('jobs',JobController::class);
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);











//Until Route reloading starts, the fill was looking like this

//<?php
// use Illuminate\Support\Facades\Route;
// use App\Models\Job;
// use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Redirect;

// Route::get('/', function () {
//     return view('home');
// });

// //This is the route to shlow all jobs
// Route::get('/jobs', function () {
//     $jobs=Job::with('employer')->latest()->simplePaginate(4);  //Eager loading updated from $jobs=Job::all(); to prevent N+1 Problem
    
//     return view('jobs.index',
//         ['jobs'=>$jobs]);
    
// });

// //We need to create a route that serve to create new job
// Route::get('/jobs/create',function(){
// //dd('hello there');
// return view('jobs.create');
// });

// //This is the route to show a single detailed job
// Route::get('/jobs/{id}', function ($id) {   //this is saying 'listen for a request to jobs slash anything(including create), this route block any jobs route created under it, eeven if it is declared explicitley!
//     $job=Job::find($id);
//     return view('jobs.show',['job'=>$job]);
// });

// Route::post('/jobs', function(){
//      request()->validate([
//         'title'=>['required', 'min:5'],
//         'salary'=>['required']
//      ]);
    
//     Job::create([
//         'title'=>request('title'),
//         'salary'=>request('salary'),
//         'employer_id'=>1
//     ]);
//     return Redirect('/jobs');

// });

// Route::get('/jobs/{id}/edit', function ($id) {   
//     $job=Job::find($id);
//     return view('jobs.edit',['job'=>$job]);
// });

// Route::patch('/jobs/{id}', function ($id) {   
//     request()->validate([
//         'title'=>['required', 'min:5'],
//         'salary'=>['required']
//      ]);
//     $job=Job::findOrFail($id);

//     $job->update([
//         'title'=>request('title'),
//         'salary'=>request('salary')
//     ]);
//        return redirect('/jobs/'.$job->id);

// });

// Route::delete('/jobs/{id}', function ($id) {   
//     Job::findOrFail($id)->delete();
//     return redirect('/jobs');
// });


// Route::get('/contact', function () {
//     return view('contact');
// });




// And ThematicBreakRenderer

// Route::get('/', function () {return view('home');});
// Route::get('/jobs', [JobController::class,'index']);
// Route::get('/jobs/create',[JobController::class,'create']);
// Route::get('/jobs/{job}',   [JobController::class,'show']);  //this is saying 'listen for a request to jobs slash anything(including create), this route block any jobs route created under it, eeven if it is declared explicitley!
// Route::post('/jobs', [JobController::class,'store'] );
// Route::get('/jobs/{job}/edit', [JobController::class,'edit']);
// Route::patch('/jobs/{job}', [JobController::class,'update']);
// Route::delete('/jobs/{job}', [JobController::class,'destroy']);
// Route::get('/contact', function () {return view('contact');});
