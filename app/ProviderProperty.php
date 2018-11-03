<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderProperty extends Model
{
	protected $fillable = [ 'name' ];

	public function provider_values() {
		return $this->hasMany( ProviderValue::class );
	}
}
