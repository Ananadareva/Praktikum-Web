<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CommentDetailResource;

class CommentController extends Controller
{
    public function index($post_id)
    {
        $comment = Comment::with('commentator:id,username')->findOrFail($post_id);
        return new CommentDetailResource($comment);
        // return response()->json('Berhasil Menampilkan Comment');
    }

    public function storeComment(Request $request, $id)
    {
        $validated = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'comments_content' => 'required',
        ]);
        $request['user_id'] = auth()->user()->id;
        // Check if a comment with the same content already exists in the database
        $existingComment = Comment::where('post_id', $request->post_id)
            ->where('comments_content', $request->comments_content)
            ->first();
        if ($existingComment) {
            return response()->json(['message' => 'Komentar telah Ada'], 400);
        }
        $comment = Comment::create($request->all());
        // Construct  response
        $response = new CommentDetailResource($comment->loadMissing(['commentator:id,username']));
        $response->additional(['message' => 'Berhasil memberi komentar']);
        return $response;
    }

    public function updateComment(Request $request, $id)
    {
        $validated = $request->validate([
            'comments_content' => 'required',
        ]);
        $comment = Comment::findOrFail($id);
        $oldCommentContent = $comment->comments_content; // mendpaatkan komen sekarang
        $comment->update($request->all());
        // cek komen apakah terupdate
        if ($comment->comments_content !== $oldCommentContent) {
            // tambah "(edit)" prefix jika kontent diubah
            $comment->comments_content = "(edit) " . $comment->comments_content;
            $comment->save();
        }
        $response = new CommentDetailResource($comment->loadMissing(['commentator:id,username']));
        $response->additional(['message' => 'Berhasil mengubah komentar']);
        return $response;
    }

    public function destroyComment($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        $response = new CommentDetailResource($comment->loadMissing(['commentator:id,username']));
        $response->additional(['message' => 'Berhasil menghapus komentar']);
        return $response;
    }
}
