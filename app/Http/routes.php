<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


 Route::get('/movies', function () {
    //$movies = \App\Movie::where('title','=','shuga')->get();
    $movies = \App\Movie::where('rating','>',2)->get();
    return $movies;
    $movie= \App\Movie();
    $movie->title='Spiderman';
    $movie->genre='spiders';
    $movie->rating=3;
    $movie->save();
     return \App\Movie::all ();
  });


//Route::get('/movies','MoviesController@index');


 //Route::get('/movies', function () {
      //$Movies = \App\Movie::where('title','=','shuga')->get();
      //$Movies = \App\movie::where('rating','>'2)->get(); //select * from movies where rating > 2
      //return $movies;
        //$movie= new \App\Movie();
        //$Movie->title='Akirachix';
        //$movie->genre='awesome';
        //$movie->rating=5;
        //$movie->save();
       // $movie= \App\Movie::find(5);
       // $movie->genre='Horror';
       // $movie->rating=4;
       // $movie->save();
       // return $movie;
     //return \App\Movie::all();

        Route::get('/students', function () {
      //$Students = \App\Students::where('lastname','=','Maich')->get();
      //return $Students;
        $students= new \App\Students();
        $students->id='6';
        $students->firstname='Cate';
        $students->lastname='Mwai';
        $students->save();
       // $movie= \App\Movie::find(5);
       // $movie->genre='Horror';
       // $movie->rating=4;
       // $movie->save();
       // return $movie;
     return \App\Students::all();
Route::get('/movies','studentsController@index');

  
	     });