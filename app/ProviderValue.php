<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderValue extends Model
{
	protected $fillable = [ 'provider_id', 'provider_property', 'value' ];

	public function provider() {
		return $this->belongsTo( Provider::class );
	}

	public function provider_property() {
		return $this->belongsTo( ProviderProperty::class );
	}
}
