<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MustBeSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $plan = null)
    {
        $user = $request->user();

        if ($user && $user->isSubscribed($plan)) {
            return $next($request);
        }

        return redirect('/');
    }
}
