<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'education_level' => $this->education_level,
            'start_date' => date("Y-m-d", strtotime($this->start_date)),
            'end_date' => date("Y-m-d", strtotime($this->end_date)),
            'quota' => $this->quota
        ];
    }
}
