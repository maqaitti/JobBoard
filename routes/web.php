<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('home');
});

//This is the route to shlow all jobs
Route::get('/jobs', function () {
    $jobs=Job::with('employer')->cursorPaginate(4);  //Eager loading updated from $jobs=Job::all(); to prevent N+1 Problem
    return view('jobs.index',['jobs'=>$jobs]);
});

//We need to create a route that serve to create new job
Route::get('/jobs/create',function(){
//dd('hello there');
return view('jobs.create');
});

//This is the route to show a single detailed job
Route::get('/jobs/{id}', function ($id) {   //this is saying 'listen for a request to jobs slash anything(including create), this route block any jobs route created under it, eeven if it is declared explicitley!
    $job=Job::find($id);
    return view('jobs.show',['job'=>$job]);
});

Route::post('/jobs', function(){
    Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);
    return Redirect('/jobs');

});

Route::get('/contact', function () {
    return view('contact');
});