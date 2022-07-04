<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DeleteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $lis = $request->route('lis');

        if(!$lis->isDeletable()){

            return redirect('/musics/listeners')->with('Error', 'You are not allowed to delete this music.');
        }
        return $next($request);

    }
}
