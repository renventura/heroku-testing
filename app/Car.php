<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

final class Car extends Model
{
	protected $fillable = ['make', 'model', 'year'];
}