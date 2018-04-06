<?php

namespace App\Http\Resources;

use App\Comment;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'text' => $this->text
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'success_comments_collection',
        ];
    }
}
