<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class LessonResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id'          => $this->id,
			'name'        => ucwords(strtolower($this->name)),
			'url'         => $this->url,
			'description' => $this->description,
			'video'       => $this->video,
		];
	}
}
