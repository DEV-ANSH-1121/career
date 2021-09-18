<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\District;

class State extends Model
{
    use HasFactory;

    protected $primaryKey = 'stateID';

    public $timestamps = false;

    protected $table = 'mast_state';

    // /**
    //  * Get country for this state
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function stateCountry()
    // {
    //     return $this->belongsTo(Country::class, 'country', 'countryID');
    // }

    //     /**
    //  * Get all of the district for this state
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function districts()
    // {
    //     return $this->hasMany(District::class, 'state', 'stateID');
    // }
}
