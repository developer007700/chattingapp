<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/dashboard', [App\Http\Controllers\ChatController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/chats/{user}', [App\Http\Controllers\ChatController::class, 'userChats'])->middleware(['auth'])->name('chats');

Route::post('/store/chats', [App\Http\Controllers\ChatController::class, 'storeChats'])->middleware(['auth'])->name('store.message');
Route::post('/sendmessage', [App\Http\Controllers\ChatController::class, 'sendMessage'])->middleware(['auth'])->name('send.message');
Route::post('/group/add', [App\Http\Controllers\GroupController::class, 'groupAdd'])->middleware(['auth'])->name('group.add');
Route::post('/group/delete', [App\Http\Controllers\GroupController::class, 'groupDelete'])->middleware(['auth'])->name('group.delete');
Route::post('/user/add', [App\Http\Controllers\GroupController::class, 'groupUserAdd'])->middleware(['auth'])->name('user.add');
Route::get('/group/chats/{id}', [App\Http\Controllers\ChatController::class, 'groupChats'])->middleware(['auth'])->name('group.chat');
Route::post('/user/delete', [App\Http\Controllers\GroupController::class, 'userDelete'])->middleware(['auth'])->name('user.delete');
Route::post('/group/content', [App\Http\Controllers\GroupController::class, 'groupchatting'])->middleware(['auth'])->name('group.content');
Route::post('/chat/content', [App\Http\Controllers\GroupController::class, 'dashgroupchat'])->middleware(['auth'])->name('chat.content');
Route::post('/group/users', [App\Http\Controllers\GroupController::class, 'groupUsers'])->middleware(['auth'])->name('group.users');
Route::post('/clear/chat', [App\Http\Controllers\ChatController::class, 'clearChat'])->middleware(['auth'])->name('clear.chat');
Route::post('/clear/group/chat', [App\Http\Controllers\GroupController::class, 'clearChat'])->middleware(['auth'])->name('clear.chat.group');

Route::post('/message/seen/', [App\Http\Controllers\ChatController::class, 'messageseen'])->middleware(['auth'])->name('message.seen');
require __DIR__.'/auth.php';