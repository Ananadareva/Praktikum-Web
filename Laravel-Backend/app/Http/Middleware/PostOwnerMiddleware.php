<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PostOwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Pastikan parameter 'id' ada dalam rute Anda
        $postId = $request->route('id');

        // Cari postingan berdasarkan ID
        $currentPost = Post::find($postId);

        if (!$currentPost) {
            return response()->json(['message' => 'Postingan tidak ditemukan'], 404);
        }

        // Memeriksa apakah pengguna adalah pemilik postingan
        if ($user->id !== $currentPost->author) {
            return response()->json(['message' => 'Anda bukan Pemilik Postingan'], 403);
        }

        return $next($request);
    }
}
