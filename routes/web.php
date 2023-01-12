<?php

use App\Http\Controllers\TestController;
use App\Http\Livewire\AddProduct;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Index;
use App\Http\Livewire\Lockscreen;
use App\Http\Livewire\Login;
use App\Http\Livewire\Members;
use App\Http\Livewire\Services;
use App\Http\Livewire\Settings;

use App\Http\Livewire\Products;
use App\Http\Livewire\OtpVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\NewMember;
use App\Http\Livewire\Reports;

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

Auth::routes();

Route::get('/', Login::class);
Route::get('lockscreen', Lockscreen::class);
Route::get('forgot-password', ForgotPassword::class);
Route::get('verifyotp',OtpVerification::class);

//dumy testing
Route::get('test',[TestController::class,'index']);

Route::group(['middleware'=>'auth'], function() {
	
Route::get('home', Index::class);
Route::get('add-product', AddProduct::class);

//acount managemtn

Route::get('services', Services::class);
Route::get('settings', Settings::class);

//members
Route::get('new-member',NewMember::class);
Route::get("members",Members::class);
Route::get("member-details",[Members::class,'show']);
Route::post("save-followup",[Members::class,'save_followup']);
Route::post("save-product",[Members::class,'save_product']);
Route::post("save-offence",[Members::class,'save_offence']);

Route::post('save-member',[NewMember::class,'save']);
Route::get('followup-report',[Members::class,'followups']);

// products
Route::get('products',Products::class);

});


//profile
Route::group(['prefix' => 'profile','middleware'=>'auth'], function() {
	Route::get('/{user_id?}',  [ProfileController::class,'index'])->name('profile');
	Route::post('/update',  [ProfileController::class,'update'])->name('profile.update');
	Route::post('/changepass',  [ProfileController::class,'changePass'])->name('profile.changepass');
});


//permissions and access control
Route::group(['prefix' => 'permissions','middleware'=>'auth'], function() {
	
	Route::get('/',  [PermissionController::class,'permissions'])->name('permissions.permissions');
	Route::get('/roles',  [PermissionController::class,'index'])->name('permissions.roles');
	Route::post('/role',  [PermissionController::class,'saveRole'])->name('permissions.role');
	Route::post('/permission',  [PermissionController::class,'createPermission'])->name('permissions.permission');
	Route::post('/torole',  [PermissionController::class,'permissionsToRole'])->name('permissions.torole');
	Route::get('/users',  [PermissionController::class,'users'])->name('permissions.users');
	Route::post('/user',  [PermissionController::class,'users'])->name('permissions.filerusers');
	Route::post('/saveuser',  [PermissionController::class,'saveUser'])->name('permissions.saveuser');
	Route::post('/userrole',  [PermissionController::class,'roleToUser'])->name('permissions.userrole');
	
	Route::get('/changepass',  [PermissionController::class,'changePassword'])->name('permissions.changepass');
	Route::post('/reset',  [PermissionController::class,'resetUser'])->name('permissions.reset');

	Route::post('/delete',  [PermissionController::class,'deleteUser'])->name('permissions.delete');
    Route::any('/trail',  [PermissionController::class,'trail'])->name('permissions.trail');
});

//products

Route::group(['prefix' => 'products','middleware'=>['auth','web']], function() {
	
	Route::get('/categories',  [Products::class,'categories'])->name('products.categories');
	Route::get('/packaging',  [Products::class,'packagings'])->name('products.packaging');
	Route::post('/save-packaging-type',  [Products::class,'save_packaging'])->name('products.save_packaging');
	Route::post('/save-category',  [Products::class,'save_category'])->name('products.save_category');
});

//settings
Route::group(['prefix' => 'settings','middleware'=>['auth','web']], function() {
	
    Route::get('/', Settings::class)->name('settings');
	Route::get('/general',  [Settings::class,'general'])->name('settings.general');
	Route::post('/save',  [Settings::class,'store'])->name('settings.savegen');
});

//settings
Route::group(['prefix' => 'reports','middleware'=>['auth','web']], function() {
	Route::get('/followups',  [Reports::class,'followups'])->name('reports.followups');
	Route::get('/membership',  [Reports::class,'membership'])->name('reports.membership');
});