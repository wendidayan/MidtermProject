<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

// Route for access-denied page
Route::get('/access-denied', function () {
    return view('access-denied'); // return the view for access denied
})->name('access-denied');

// Route for restricted page (only professors can access)
Route::get('/feedback', function () {
    return view('feedback', ['role' => session('role'), 'username' => session('username')]);
})->middleware(CheckRole::class)->name('feedback');

// Route for the home page (Login Page)
Route::get('/login', function () {
    return view('login', ['role' => session('role'), 'username' => session('username')]);
});

// Route for handling the username submission
Route::post('/handle-username', function (\Illuminate\Http\Request $request) {
    $username = $request->input('username');
    session(['username' => $username]);  // Store username in session

    return redirect('/home');  // Redirect to the home page
})->name('handle-username');

// Route for home with the username stored in session
Route::get('/home', function () {
    $username = session('username', 'Guest');  // Get username or default to 'Guest'
    return view('home', ['username' => $username]);
})->where('username', '[a-zA-Z]*');  // Only alphabetic characters allowed

// Other static and laboratory pages with username passed from the session
Route::get('/about', function () {
    return view('about', ['username' => session('username')]);
});

Route::get('/contacts', function () {
    return view('contacts', ['username' => session('username')]);
});

Route::get('/laboratory1', function () {
    return view('laboratory1');
});
Route::get('/laboratory2', function () {
    return view('laboratory2');
});
Route::get('/laboratory3', function () {
    return view('laboratory3');
});
Route::get('/laboratory4', function () {
    return view('laboratory4');
});

// Route to display the role selection form
Route::get('/', function () {
    return view('role');  // return the view where your sections are defined
});

// Route for handling role selection
Route::post('/handle-role-selection', function (\Illuminate\Http\Request $request) {
    $role = $request->input('role');
    session(['role' => $role]);  // Store role in session

    if ($role === 'none') {
        return redirect('/access-denied');
    }
    return redirect('/login');  // Redirect to login
})->name('handle-role-selection');


// Route to display the role selection form
Route::get('/restricted', function () {
    return view('restricted');  // return the view where your sections are defined
});