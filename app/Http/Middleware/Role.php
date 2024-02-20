<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    public function handle($request, Closure $next, $role)
    {
        if ($request->session()->get('role') !== $role) {
            return redirect()->back()->with('error', 'شما مجوز لازم برای دسترسی به این بخش را ندارید');
        }

        return $next($request);
    }
}
