<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model {
	protected $fillable = [ 'name' ];

	public function provider_values() {
		return $this->hasMany( ProviderValue::class );
	}
}
