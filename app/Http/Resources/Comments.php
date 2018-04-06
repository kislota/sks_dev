<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;
class Comments extends JsonResource
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
                'comment' => [
                        'id' => $this->id,
                        'text' => $this->text,
                    ],
                'user' => [
                    'id' =>$this->user->id,
                    'name' =>$this->user->name,
                    'email' =>$this->user->email,
                    ],
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'success_comment',
        ];
    }
}
