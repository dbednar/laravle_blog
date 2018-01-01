<?php

// App::bind('App\Billing\Stripe',function(){
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });



//$stripe = App::make('App\Billing\Stripe');
//$stripe = resolve('App\Billing\Stripe');
//dd($stripe);

Route::get('/tasks','TaskController@index');
Route::get('/task/{task}','TaskController@show');

Route::get('','PostsController@index')->name('home');

Route::get('/posts/{post}','PostsController@show');

Route::get('/post/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::post('/posts/{post}/comments','CommentController@store');

Route::get('/register','RegistrationController@create');

Route::get('/login','SessionsController@create');

Route::post('/register','RegistrationController@store');

Route::get('/logout','SessionsController@destroy');


Route::post('/login','SessionsController@store');

/*

Route::get('', function () {

    $tasks = Tasks::all();
  return $tasks;
    return view('welcome',compact('tasks'));
    //return view('welcome')->with('name','damian');


    return view('welcome',[
      'name'=> 'damian',

  ]);

});

Route::get('/tasks/{id}', function ($id) {

    $task = Tasks::find($id);



    return view('tasks.show',compact('task'));

});

Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->get();


    return view('tasks.index',compact('tasks'));

});
Route::get('about',function(){

    return view('about');
});
*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
