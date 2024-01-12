<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PostDetailResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use HasFactory;

    public function index()
    {
        //Menggunakan with eloquent
        $posts = Post::with(['writer:id,username', 'comments'])->get();

        return PostDetailResource::collection($posts);

        // menggunakan loadMissing
        /*  $posts = Post::all();
           return PostDetailResource::collection($posts->loadMissing('writer:id,username')); */
    }

    public function show($id)
    {
        $post = Post::with('writer:id,username,', 'comments')->findOrFail($id);
        // return response()->json(['data' => $post]);
        // menggunakan resource
        // return response()->json(['data' => $post]);
        return new PostDetailResource($post);
    }

    public function show2($id)
    {
        $post = Post::findOrFail($id);

        return new PostDetailResource($post);
    }

    public function store(Request $request)
    {
        //return response()->json('Berhasi Menyimpan post');
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'news_content' => 'required',
        ]);

/*         if ($request->file){
            $fileName = $this->generateRandomString().'.'.$request->file->extension();
            Storage::putFileAs('images', $request->file, $fileName);
        }


        $request['image'] = $fileName; */
        $request['author'] = Auth::user()->id;
        $post = Post::create($request->all());
        return new PostDetailResource($post->loadMissing('writer:id,username'));


        //return response()->json('Berhasi Meyimpan post');
    }

    public function update(Request $request, $id)
    {  // dd('update ddd');

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'news_content' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->update($request->all());
        //return new PostDetailResource($post->loadMissing('writer:id,username'));
        $response = new PostDetailResource($post);
        $response->additional(['message' => 'Postingan berhasil diperbarui']);

        return $response;
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

       // dd('delete ddd');
        $post->delete();
        //  return new PostDetailResource($post->loadMissing('writer:id,username'));
        $response = new PostDetailResource($post);
        $response->additional(['message' => 'Postingan berhasil dihapus']);

        return $response;
    }

    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
    
        return $randomString;
    }
    
}
