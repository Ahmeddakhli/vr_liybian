<?php

namespace Modules\Events\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventMinimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->value ? $this->value : '',
            'description' => $this->description ? $this->description : '',
        ];
    }
}
