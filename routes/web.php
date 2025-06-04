<?php
use App\Http\Requests\MemberRequest;
use App\Models\Members;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home.page');

Route::get('/user/{member}', function (Members $member) {
    return view('user', [
        'member' => $member,
    ]);
})->name('show.user');

Route::get('/create-user', function () {
    return view('create-user');
})->name('create.user');

Route::get('/edit', function () {
    return view('/edit');
})->name('edit.user');

Route::post('/members', function (MemberRequest $request) {
    $member = Members::create($request->validated());
    $member->save();
    return redirect()->route('show.user', ['member' => $member->id]);
})->name('member.store');
