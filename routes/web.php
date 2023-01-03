<?php

use App\Http\Controllers\TestController;
use App\Http\Livewire\AddProduct;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Index;
use App\Http\Livewire\Lockscreen;
use App\Http\Livewire\Login;
use App\Http\Livewire\Members;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Services;
use App\Http\Livewire\Settings;

use App\Http\Livewire\Institutions;
use App\Http\Livewire\Products;
use App\Http\Livewire\OrderSummary;
use App\Http\Livewire\OrderApproval;
use App\Http\Livewire\Users;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Permissions;
use App\Http\Livewire\OrderSchedules;
use App\Http\Livewire\NotificationQueries;
use App\Http\Livewire\OtpVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Livewire\NewMember;

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

Route::post('save-member',[NewMember::class,'save']);
Route::get('followup-report',[Members::class,'followups']);

// products
Route::get('products',Products::class);

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
