<?php

namespace App\Http\Middleware;

use App\Models\Application;
use App\Models\ApplicationKey;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAppIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $appKey = $request->header('App-Key');
        $isExist = ApplicationKey::where('key', $appKey)->first();
        if (!$isExist) {
            return response()->json(['message' => 'Your App is not verified in Flyte Pay'], 401);
        }

        return $next($request);
    }
}
