<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplicantController;

$url = config('app.url');
URL::forceRootUrl($url);

Route::middleware('guest')->get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->hasRole('Admin')) {
            return redirect()->route('admin.dashboard');
        }

        if ($user->hasRole('Office Staff')) {
            return redirect()->route('office-staff.dashboard');
        }

        if ($user->hasRole('Finance Staff')) {
            return redirect()->route('finance-staff.dashboard');
        }

        // Default to applicant dashboard
        return redirect()->route('applicant.dashboard');
    })->name('dashboard');

    // Admin dashboard route
    Route::get('/admin/dashboard', function () {
        return view('admin-dashboard');
    })->name('admin.dashboard');

    // Office staff dashboard route
    Route::get('/office/dashboard', function () {
        return view('office-staff-dashboard');
    })->name('office-staff.dashboard');

    // Finance staff dashboard route
    Route::get('/finance/dashboard', function () {
        return view('finance-staff-dashboard');
    })->name('finance-staff.dashboard');

    // Applicant dashboard route
    Route::get('/applicant/dashboard', function () {
        return view('applicant-dashboard');
    })->name('applicant.dashboard');
});


// User accessing Admin page check
Route::get('/admin/requirements', function () {
    $user = Auth::user();

    // authentication check
    if (!$user || !$user->hasRole('Admin')) {
        abort(403); // Forbidden if not an admin
    }

    return view('admin_requirements');
})->middleware('auth');

Route::get('/admin/vault', function () {
    $user = Auth::user();

    // authentication check
    if (!$user || !$user->hasRole('Admin')) {
        abort(403); // Forbidden if not an admin
    }

    return view('admin_vault');
})->middleware('auth');

// User accessing Office Staff page check
Route::get('/officestaff/applications', function () {
    $user = Auth::user();

    // authentication check
    if (!$user || !$user->hasRole('Office Staff')) {
        abort(403); // Forbidden if not an admin
    }

    return view('officestaff-application');
})->middleware('auth');

Route::get('/officestaff/requirements', function () {
    $user = Auth::user();

    // Explicit authentication check
    if (!$user || !$user->hasRole('Office Staff')) {
        abort(403); // Forbidden if not an admin
    }

    return view('officestaff_requirements');
})->middleware('auth');

// User accessing Applicant page check
Route::get('/applicant/apply', function () {
    $user = Auth::user();

    // authentication check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403); // Forbidden if not an admin
    }

    return view('apply');
})->middleware('auth');

Route::post('/applicant/apply', [ApplicantController::class, 'create'])->name('applicant.apply');

Route::get('/applicant/vault', function () {
    $user = Auth::user();

    // authentication check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403); // Forbidden if not an admin
    }

    return view('applicant_vault');
})->middleware('auth');

Route::get('/applicant/requirements', function () {
    $user = Auth::user();

    // Explicit authentication check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403); // Forbidden if not an admin
    }

    return view('applicant_requirements');
})->middleware('auth');

Route::get('/',[ApplicantController::class,'index'])->name('index');
Route::post('/',[ApplicantController::class,'create'])->name('create');
Route::get('/show',[ApplicantController::class,'show'])->name('show');