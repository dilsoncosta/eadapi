<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
	use HasFactory, UuidTrait;
	
	public $incrementing = false;
	
	protected $keyType = 'id';
	
	protected $fillable = ['status', 'description', 'lesson_id'];

	public $statusOptions = [
		'P' => 'Pendente, Aguardando Professor',
		'A' => 'Aguardando Aluno',
		'c' => 'Finalizado',
	];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function lesson()
	{
		return $this->belongsTo(Lesson::class);
	}
}