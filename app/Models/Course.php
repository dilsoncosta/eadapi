<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
	use HasFactory, UuidTrait;
	
	public $incrementing = false;
	
	protected $keyType = 'id';
	
	protected $fillable = ['name', 'description', 'image'];
	
	public function modules()
	{
		return $this->hasMany(Module::class);
	}
}
