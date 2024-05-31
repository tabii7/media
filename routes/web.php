<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Script\ScriptController;
use App\Http\Controllers\Auth\UserDetailController;

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\LocationVendor\LocationVendorController;
use App\Http\Controllers\PropertyVendor\PropertyVendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('scenes', function () {
    return view('writer.script_scenes');
});
Route::get('script', function () {
    return view('writer.script');
});


Route::post('/scripts', [ScriptController::class, 'store'])->name('scripts.store');
Route::post('/scripts/{script}/scenes', [ScriptController::class, 'addScene'])->name('scripts.scenes.add');


Route::get('view/script', [ScriptController::class, 'Script_show'])->name('scripts.view');
Route::get('script/show/{id}', [ScriptController::class, 'single_Script'])->name('scripts.show');

Route::get('script/edit/{id}', [ScriptController::class, 'edit_Script'])->name('scripts.edit');
Route::post('script/update/{id}', [ScriptController::class, 'update_Script'])->name('script.update');
Route::get('/scripts/{script}/scenes/{scene}/edit', [ScriptController::class, 'edit_scene'])->name('edit.scene');
Route::post('/scripts/{script}/scenes/{scene}', [ScriptController::class, 'update'])->name('scenes.update');
Route::delete('/scenes/{scene}', [SceneController::class, 'destroy'])->name('delete.scene');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('admin/dashboard','admin.dashboard')->middleware(['auth','role:admin']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('roles',RoleController::class);
    Route::resource('permissions',PermissionController::class);
    Route::post('roles/{role}/permissions',[RoleController::class,'givePermission'])->name('roles.permission');
    Route::delete('roles/{role}/permissions/{permission}',[RoleController::class,'revokePermission'])->name('roles.permission.revoke');

    Route::post('permissions/{permissions}/roles',[PermissionController::class,'assignRoles'])->name('permission.roles.assign');
    Route::delete('permissions/{permission}/roles/{role}',[PermissionController::class,'removeRole'])->name('permission.roles.remove');

    Route::get('users',[UserController::class,'index'])->name('users');
    Route::get('user/{id}/assign-role',[UserController::class,'assign_role'])->name('users.assignRole');
    Route::get('user/{id}/assign-role',[UserController::class,'assign_role'])->name('users.assignRole');
    Route::post('user/{user}/assign-role-action',[UserController::class,'assign_role_action'])->name('users.assignRole.action');
    Route::delete('user/{user}/remove-role/{role}',[UserController::class,'removeRole'])->name('users.removeRole');
});

Route::view('testing','testing');
Route::middleware(['auth.basic'])->group(function () {
    Route::get('user-detail',[UserDetailController::class,'create'])->name('auth.user.detail');
    Route::post('user-detail-store',[UserDetailController::class,'store'])->name('user.detail.store');
    
    Route::get('user-experience/create',[ExperienceController::class,'create'])->name('experience.create');
    Route::post('user-experience/store',[ExperienceController::class,'store'])->name('experience.store');

    Route::get('actor/create',[ActorController::class,'create'])->name('actor.create');
    Route::post('actor/post',[ActorController::class,'store'])->name('actor.post');
    
    Route::get('writer/create',[WriterController::class,'create'])->name('writer.create');
    Route::post('writer/store',[WriterController::class,'store'])->name('writer.store');


    // routes for vendor

    Route::post('/vendor/store', [VendorController::class, 'store'])->name('vendor.store');
});








// location and property vendor routes 

Route::get('property-vendor/dashboard',[PropertyVendorController::class,'dashboard'])->name('property.vendor.listings');
Route::get('property-vendor/listings',[PropertyVendorController::class,'index'])->name('property-vendor.listings');
Route::get('property-vendor/create',[PropertyVendorController::class,'create'])->name('property.vendor.list.your.space');
Route::post('property-vendor/store',[PropertyVendorController::class,'store'])->name('property.vendor.store');
Route::get('property-vendor/view/{id}',[PropertyVendorController::class,'view'])->name('property.vendor.view');
Route::get('property-vendor/edit/{id}',[PropertyVendorController::class,'edit'])->name('property.vendor.edit');
Route::post('property-vendor/update/{id}',[PropertyVendorController::class,'update'])->name('property.vendor.update');
Route::get('property-vendor/delete/{id}',[PropertyVendorController::class,'delete'])->name('property.vendor.delete');
Route::post('/delete-property-image', [PropertyVendorController::class, 'deleteImage'])->name('delete.image');

Route::get('property-vendor/booking',[PropertyVendorController::class,'propertyVendorBooking'])->name('property.vendor.booking');
Route::get('property-vendor/booking-show',[PropertyVendorController::class,'propertyVendorBookingShow'])->name('property.vendor.booking.show');


Route::get('/property-vendor/reviews', function () {
    return view('property vendor.propertyReviews');
})->name('property.vendor.reviews');




Route::get('location-vendor/dashboard',[LocationVendorController::class,'dashboard'])->name('location.vendor.dashboard');
Route::get('location-vendor/lisitngs',[LocationVendorController::class,'index'])->name('location.vendor.lisitngs');
Route::get('location-vendor/create',[LocationVendorController::class,'create'])->name('location.vendor.list.your.space');
Route::post('location-vendor/store',[LocationVendorController::class,'store'])->name('location.vendor.store');
Route::get('location-vendor/view/{id}',[LocationVendorController::class,'view'])->name('location.vendor.view');
Route::get('location-vendor/edit/{id}',[LocationVendorController::class,'edit'])->name('location.vendor.edit');
Route::post('location-vendor/update/{id}',[LocationVendorController::class,'update'])->name('location.vendor.update');
Route::get('location-vendor/delete/{id}',[LocationVendorController::class,'delete'])->name('location.vendor.delete');
Route::post('/delete-image', [LocationVendorController::class, 'deleteImage'])->name('delete.image');
Route::get('location-vendor/booking',[LocationVendorController::class,'locationVendorBooking'])->name('location.vendor.booking');
Route::get('location-vendor/booking-show',[LocationVendorController::class,'locationVendorBookingShow'])->name('location.vendor.booking.show');

 
Route::get('/location-vendor/reviews', function () {
    return view('location vendor.locationReviews');
})->name('location.vendor.reviews');
