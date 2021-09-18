<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\District;

class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'countryID';

    public $timestamps = false;

    protected $table = 'mast_country';

    /**
     * Get all of the state of this country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function states()
    // {
    //     return $this->hasMany(State::class, 'country', 'countryID');
    // }

    // /**
    //  * Get all of the district for this country
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function districts()
    // {
    //     return $this->hasMany(District::class, 'country', 'countryID');
    // }
}
