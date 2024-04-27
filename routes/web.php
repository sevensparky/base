<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Yajra\Acl\Models\Permission;
use Yajra\Acl\Models\Role;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'panel'], function() {

    Route::get('admin', [AdminController::class, 'index'])->name('admin.panel');
    Route::get('calendar', [AdminController::class, 'calendar'])->name('panel.calendar');

    Route::resource('categories', CategoryController::class)->except('show');
    // Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::resource('articles', ArticleController::class)->except('show');
    Route::resource('settings', SettingController::class)->except('show', 'destroy');
    Route::get("profile/@{username}", [UserController::class, 'profileView'])->name('user.view');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    // Route::resource('users', UserController::class)->except('');
    Route::resource('roles', RoleController::class)->except('show');
    Route::resource('permissions', PermissionController::class)->except('show');
    Route::resource('user-role', UserRoleController::class)->parameters(['user-role' => 'user'])->except('show');

    Route::get('password/change/view', [UserController::class, 'passwordChangeView'])->name('password.change.view');
    Route::post('password/change', [UserController::class, 'passwordChange'])->name('password.change');

    // Route::get('/{locale?}', function ($locale = null) {
    //     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
    //         app()->setLocale($locale);
    //     }

    //     return view('admin.admin');
    // });

    // Route::get('language/{locale}', function ($locale) {
    //     app()->setLocale($locale);
    //     session()->put('locale', $locale);

    //     return back();
    // });

    Route::get('/{locale?}', [AdminController::class, 'setLanguage'])->name('set.language');

    Route::get('language/{locale}', [AdminController::class, 'switchLanguage'])->name('switch.language');

});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Authentication Routes...
// Route::get('login', LoginController::class ,'showLoginForm')->name('login');
// Route::post('login', LoginController::class ,'login');
// Route::post('logout', LoginController::class ,'logout')->name('logout');

// Registration Routes...
// Route::get('register', RegisterController::class ,'showRegistrationForm')->name('register');
// Route::post('register', RegisterController::class ,'register');

// Password Reset Routes...
// Route::get('password/reset', ForgotPasswordController::class ,'showLinkRequestForm');
// Route::post('password/email', ForgotPasswordController::class ,'sendResetLinkEmail');
// Route::get('password/reset/{token}', ResetPasswordController::class ,'showResetForm');
// Route::post('password/reset', ResetPasswordController::class ,'reset');



// GET|HEAD   home          ... home › HomeController@index
// GET|HEAD   login         ..... login › Auth\LoginController@showLoginForm
// POST       login          ......... Auth\LoginController@login
// POST       logout         .......... logout › Auth\LoginController@logout

// GET|HEAD   password/confirm      ....... password.confirm › Auth\ConfirmPasswordController@showConfirmForm
// POST       password/confirm        .......... Auth\ConfirmPasswordController@confirm
// POST       password/email      ......... password.email › Auth\ForgotPasswordController@sendResetLinkEmail
// GET|HEAD   password/reset      ...... password.request › Auth\ForgotPasswordController@showLinkRequestForm
// POST       password/reset       .......... password.update › Auth\ResetPasswordController@reset
// GET|HEAD   password/reset/{token}      ....... password.reset › Auth\ResetPasswordController@showResetForm

// GET|HEAD   register        . register › Auth\RegisterController@showRegistrationForm
// POST       register           Auth\RegisterController@register

// GET|HEAD   sanctum/csrf-cookie      .... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show

Route::get('test', function() {
    // $users = User::all();

    // foreach($users as $user){
    //     dump($user->id, $user->userRole);
    // }

    // dd($users);

    // $result = Role::create([
    //     'name' => 'manager',
    //     'slug' => 'manager',
    //     'description' => 'مدیریت سایت'
    // ]);
    // $result = Permission::create([
    //     'name' => 'edit-article',
    //     'slug' => 'edit-article',
    //     'description' => 'ویرایش مقالات'
    // ]);
    // $result = Role::whereName('manager')->first()->permissions()->sync([1, 2]);

    // dd($result);

    // $user = User::first();

    // $res = setDateToJalali($user->created_at, '%B %d، %Y');


        // dd(app()->getLocale());
        app()->isLocale('en') ? dump('En') : dump('Fa');
        // dd();

});
