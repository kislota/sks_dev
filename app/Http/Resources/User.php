<?php

namespace App\Http\Resources;

use App\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'user' => [
                        'id' => $this->id,
                        'name' => $this->name,
                        'email' => $this->email,
                    ],
                'comments' => $this->comments,
        ];
    }
    public function with($request)
    {
        return [
            'status' => 'success_user',
        ];
    }
}
