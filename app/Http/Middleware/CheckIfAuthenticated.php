<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/12/2017
 * Time: 12:33 PM
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/admin/login');
        }


        return $next($request);
    }

}