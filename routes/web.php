<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

     $news = \App\News::all();

     $even = \App\Event::all();


     $dal = \App\DailyAlerts::all();
    
    return view('index' ,  compact('news' ,'even', 'dal'));
});


Route::get('/news/{title}', function ($title) {

    $news =\App\News::where([['title', '=', $title]])->first();
    
   // dd($course->title);
    return view('newsdetails' , compact('news'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/courses', function () {

	
	  $course = \App\Course::all();
	//   dd($locat);
    return view('courses',  compact('course'));
});

Route::get('/faculty', function () {

      $facul = \App\Faculty::all();

      $faculty=  DB::table('faculties')->groupBy('field')->get();

//DB::table('faculties')->groupBy('field')->having('id', '>', 1)->get();
      
     /* dd($faculty);*/
    return view('faculty' , compact('faculty', 'facul'));
});

Route::get('/cour/{title}', function ($title) {

    $cours =\App\Course::where([['title', '=', $title]])->first();
    
   // dd($course->title);
    return view('coursedetails' , compact('cours'));
});

Route::get('/fadet', function () {
    return view('facultydetail');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/event/{title}', function ($title) {

    $event =\App\Event::where([['title', '=', $title]])->first();
    
   // dd($course->title);
    return view('eventdetails' , compact('event'));
});

Route::get('/news', function () {
    return view('newsdetails');
});


Route::get('download/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $file_path = public_path() .'/images/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
})
->where('filename', '[A-Za-z0-9\-\_\.]+');


Route::post('/contact',[ 
	'uses' => 'ContactController@contact',
    'as' => 'contact'
]); 


