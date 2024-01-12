<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $path = 'app\Http\Resources\CommentDetailResource.php';
        $created_at = $this->created_at ? $this->created_at->format('d-F-y') : null;
        $updated_at = $this->updated_at ? $this->updated_at->format('d-F-y') : null;
        // return parent::toArray($request);
        return [
            'source' => $path,
            'id' => $this->id,
            'post_id' => $this->post_id,
            'commentator' => $this->whenLoaded('commentator'),
            'comments_content' => $this->comments_content,
            'created_at' => $created_at,
            'updated_at' => $updated_at,


        ];
    }
}
