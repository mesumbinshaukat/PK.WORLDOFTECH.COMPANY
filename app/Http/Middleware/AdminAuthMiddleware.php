<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Illuminate\Support\Facades\Log::info('Admin middleware check', [
            'path' => $request->path(),
            'admin_logged_in' => $request->session()->get('admin_logged_in'),
            'session_id' => $request->session()->getId()
        ]);

        if (!$request->session()->get('admin_logged_in')) {
            \Illuminate\Support\Facades\Log::warning('Admin NOT logged in, redirecting to login');
            return redirect('/admin/login');
        }

        \Illuminate\Support\Facades\Log::info('Admin IS logged in, proceeding');
        return $next($request);
    }
}
