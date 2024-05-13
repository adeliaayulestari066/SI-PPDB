<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaveLastUrl
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Jika user logout, simpan URL saat ini ke dalam session
        if ($request->is('logout')) {
            Session::put('last_url', url()->previous());
        }

        return $response;
    }
}
