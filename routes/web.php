<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Auth\UserDetailController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\Script\ScriptController;

use Illuminate\Support\Facades\Route;

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
});