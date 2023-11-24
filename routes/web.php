<?php

use App\Livewire\Explorer;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Nette\Utils\Random;
use Ramsey\Uuid\Uuid;

Route::get('/auth/{driver}', function ($driver) {
    return Socialite::driver($driver)->redirect();
})->name('auth.social');

Route::get('/auth/{driver}/callback', function ($driver) {
    $socialUser = Socialite::driver($driver)->stateless()->user();

    $user = User::query()->firstOrCreate(['email' => $socialUser->email], [
            'id' => Uuid::uuid4()->toString(),
            'name' => $socialUser->name,
            'avatar_url' => $socialUser->avatar,
            'password' => Hash::make(Random::generate(8)),
        ]);

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
});

Route::get('/', Home::class)->name('home');
Route::get('/explorer', Explorer::class)->name('explorer');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/login', Login::class)->name('login');

require __DIR__.'/auth.php';
