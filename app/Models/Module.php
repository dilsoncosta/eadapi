<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	use HasFactory, UuidTrait;
	
	public $incrementing = false;
	
	protected $keyType = 'id';
	
	protected $fillable = ['name'];
	
	public function modules()
	{
		return $this->belongsTo(Course::class);
	}
}
