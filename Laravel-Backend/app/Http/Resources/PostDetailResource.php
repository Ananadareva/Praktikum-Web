<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array

    {
        $path = 'app\Http\Resources\PostDetailResource.php';
        // return parent::toArray($request);
        $created_at = $this->created_at ? $this->created_at->format('d-F-y') : null;
        $updated_at = $this->updated_at ? $this->updated_at->format('d-F-y') : null;
        return [
            'source' => $path,
            'id' => $this->id,


            'title' => $this->title,
            'image' => $this->image,
            'news_content' => $this->news_content,
            'author' => $this->author,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'writer' => $this->whenLoaded('writer'),
            // 'comments' => CommentDetailResource::collection($this->whenLoaded('comments')),
            'comments' => $this->whenLoaded('comments', function () {
                return collect($this->comments)->each(function ($comment) {
                    $comment->commentator;
                    return $comment;
                });
            }),

            'comment_total' => $this->whenLoaded('comments', function () {
                return $this->comments->count();
            })

        ];
    }
}
