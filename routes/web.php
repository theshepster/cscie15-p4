<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'LandingController@index');

# built-in authentication routes from `php artisan make:auth`
Auth::routes();

# home page dashboard
Route::get('/home', 'HomeController@index')->name('home');

# logout
Route::get('/logout', 'Auth\LoginController@logout');

# decks
Route::resource('decks', 'DeckController');
Route::get('/decks/review/{deck_id}', 'DeckController@review');

# cards
Route::resource('cards', 'CardController', ['except' => 'create']);
Route::get('/cards/create/{deck_id}', 'CardController@create')->name('cards.create');

/*
|--------------------------------------------------------------------------
| Debug Route
|--------------------------------------------------------------------------
|
| Routes for debugging various functions.
|
*/

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
