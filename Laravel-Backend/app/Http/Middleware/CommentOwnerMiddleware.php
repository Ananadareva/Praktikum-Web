<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CommentOwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId =  Auth::user()->id;
        $comment = Comment::findOrFail($request->id);

        //dd($userId, $comment);

        if ($userId !== $comment->user_id) {
            return response()->json(['message' => 'Anda bukan peunil Komentar'], 401);
        }
        return $next($request);
    }
}
