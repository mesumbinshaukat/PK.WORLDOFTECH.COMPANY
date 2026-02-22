<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class TraceMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('>>> Request Start', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'session_id_from_cookie' => $request->cookies->get('lumen_session'),
            'session_id_from_request' => $request->hasSession() ? $request->session()->getId() : 'NO_SESSION_ON_REQUEST'
        ]);

        $response = $next($request);

        Log::info('<<< Response End', [
            'status' => $response->getStatusCode(),
            'session_id_from_request' => $request->hasSession() ? $request->session()->getId() : 'NO_SESSION_ON_REQUEST',
            'session_id_from_manager' => app('session')->getId(),
            'is_same_instance' => $request->hasSession() && ($request->session() === app('session')->driver()),
            'set_cookie' => $response->headers->get('Set-Cookie')
        ]);

        return $response;
    }
}
