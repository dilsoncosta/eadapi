<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class SupportResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'user'         => new UserResource($this->user),
			'lesson'       => new LessonResource($this->lesson),
			'status'       => $this->status,
			'status_label' => $this->statusOptions[$this->status],
			'description'  => $this->description,
		];
	}
}
