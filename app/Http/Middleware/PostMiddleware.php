<?php

namespace App\Http\Middleware;

use Closure;
use App\Post;

class PostMiddleware
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

        if (Post::firstOrFail()["text"]==1) {
            return $next($request);
        };
        return response('you are not allowed to post! <a href="/">repost<a/>');
    }
}
