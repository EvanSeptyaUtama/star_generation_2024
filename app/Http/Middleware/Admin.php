<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class Admin
{
         //di cek jika dia belum melakukan login atau autentikasi = !Auth::check()
        // Apakah dia login bukan sebagai admin rol-nya = Auth::user()->role != 'admin'
        //Maka akan di direct ke route login dan tidak bisa masuk ke halaman administrasi = eturn Redirect::route('login');
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->is_admin == false) {
            return Redirect::route('login'); //route akan ke halaman login
        }
        return $next($request);
    }
}
