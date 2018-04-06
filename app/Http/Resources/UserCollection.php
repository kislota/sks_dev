<?php

namespace App\Http\Resources;

use App\Comment;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
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
            'users' => [
                'id' =>$this->user->id,
                'name' =>$this->user->name,
                'email' =>$this->user->email,
                ]
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'success_user_collection',
        ];
    }
}
