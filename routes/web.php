<?php
use App\Http\Requests\MemberRequest;
use App\Models\Members;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('all.members');
})->name('home.page');

Route::get('/all', function () {
    return view('index', [
        'member'          => Members::latest()->paginate(10),
        'activeMembers'   => Members::where('status', 1)->count(),
        'inActiveMembers' => Members::where('status', 0)->count(),
        'suspended'       => Members::where('status', 2)->count(),
    ]);

})->name('all.members');

Route::get('/user/{member}', function (Members $member) {

    return view('user', [
        'member'    => $member,
        'memberAge' => Carbon::parse($member->birth_date)->age,
        'birthday'  => Carbon::parse($member->birth_date)->format('d-m-Y'),

    ]);
})->name('show.user');

Route::get('/create-user', function () {
    return view('create-user');
})->name('create.user');

Route::get('/member/{member}edit', function (Members $member) {
    return view('/edit', [
        'member' => $member,
    ]);
})->name('edit.user');

Route::post('/members', function (MemberRequest $request) {
    // if (Members::where('email', $request->email)->exists()) {
    //     return back()->withErrors(['email' => 'This email already exist'])->withInput();
    // }
    // dd($request->all());
    $member = Members::create($request->validated());
    // $member->save();
    return redirect()
        ->route('show.user', ['member' => $member->id])
        ->with('success', $member->name . ' ' . $member->last_name . ' has been added.');
})->name('member.store');

Route::put('member/{member}', function (Members $member, MemberRequest $request) {
    $member->update($request->validated());
    return redirect()
        ->route('show.user', ['member' => $member->id])
        ->with('success', $member->name . '\'s details have been updated');

})->name('member.update');

Route::delete('/member/{member}/delete', function (Members $member) {
    $member->delete();
    return redirect()
        ->route('all.members')
        ->with('success', $member->name . ' has been deleted :(');

})->name('delete.member');
