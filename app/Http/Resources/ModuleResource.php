<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ModuleResource extends JsonResource
{
	public function toArray($request)
	{
		return [
			'id'   => $this->id,
			'name' => $this->name,
		];
	}
}
