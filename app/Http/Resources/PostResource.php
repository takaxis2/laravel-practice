<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $is_published_result = $this->is_published ? "yes" : "no";

        return [
            'id'=>"id : ". $this->id,
            'title'=>"title : ". $this->title,
            'content'=>"content : ". $this->content,
            'is_published'=>"발행여부 :". $is_published_result,
            'created_at'=>"아이디 : ". $this->created_at->diffForHumans(). " 생성됨",
            'updated_at'=>"아이디 : ". $this->updated_at->diffForHumans(). " 수정됨",
        ];
    }
}
