<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\RequirementController;
use App\Livewire\OfficeStaffDashboard;
use App\Http\Controllers\StaffApplyController;
use App\Http\Controllers\AdminVaultController;
use App\Http\Controllers\ApplicantVaultController;
use App\Http\Controllers\ApplicationFirstStepController;
use App\Http\Controllers\SecondApplyController;
use App\Http\Controllers\FourthApplyController;


$url = config('app.url');
URL::forceRootUrl($url);

Route::middleware('guest')->get('/', function () {
    return view('welcome');
});

Route::get('/vaults', function () {
    return view('applicant_vault');
})->name('vaults');

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
        abort(403); // Forbidden
    }

    return view('admin_requirements');
})->middleware('auth');

Route::get('/admin/vault', function () {
    $user = Auth::user();

    // authentication check
    if (!$user || !$user->hasRole('Admin')) {
        abort(403); // Forbidden
    }

    return view('admin_vault');
})->middleware('auth');



Route::get('/officestaff/requirements', function () {
    $user = Auth::user();

    // Explicit authentication check
    if (!$user || !$user->hasRole('Office Staff')) {
        abort(403); // Forbidden
    }

    return view('officestaff_requirements');
})->middleware('auth');

Route::get('/apply', function () {
    $user = Auth::user();

    // Explicit authentication check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403); // Forbidden
    }

    return view('apply-choice');
})->middleware('auth')->name('applicant.application');

// User accessing Applicant page
Route::get('/first-apply', [ApplicationFirstStepController::class, 'create'])->name('applications.create');

Route::post('/first-apply', [ApplicationFirstStepController::class, 'store'])->name('applications.store');

Route::get('/with-existing', function () {
    $user = Auth::user();

    // Explicit authentication check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403); // Forbidden
    }

    return view('oops');
})->middleware('auth')->name('with.existing');

Route::get('/applicant/submission', function () {
    $user = Auth::user();

    // Explicit authentication check
    if (!$user || !$user->hasRole('Applicant')) {
        abort(403); // Forbidden
    }

    return view('submission_requirements');
})->middleware('auth');

Route::get('/officestaff/applications', [StaffApplyController::class, 'index'])->name('officestaff.appliations');
Route::get('/second-apply', [SecondApplyController::class, 'create'])->name('second-apply.create');
Route::post('/second-apply', [SecondApplyController::class, 'store'])->name('second-apply');
Route::get('/fourth-apply', [FourthApplyController::class, 'create'])->name('fourth-apply.create');
Route::post('/fourth-apply', [FourthApplyController::class, 'store'])->name('fourth-apply');

//Requirements
Route::get('/applicant/requirements', [RequirementController::class, 'index'])->name('applicant_requirements');
Route::get('/officestaff/requirements', [RequirementController::class,'viewOfficeRequirements'])->name('officestaff_requirements');

Route::post('/applicant/submission', [RequirementController::class, 'store'])->name('submission_requirements');
Route::post('/officestaff/requirements/batch-update', [RequirementController::class, 'batchUpdateStatus'])->name('batch_update_status');

Route::get('/admin/requirements', [RequirementController::class, 'viewAdminRequirements'])->name('admin_requirements');
Route::post('/admin/issue-proof/{applicantName}', [RequirementController::class, 'issueProofOwnership'])->name('issue_proof');

//Vaults
Route::get('/applicant/vault', [ApplicantVaultController::class, 'viewApplicantVaults'])->name('applicant_vaults');
Route::get('/admin/vault', [AdminVaultController::class, 'viewAdminVaults'])->name('admin_vaults');