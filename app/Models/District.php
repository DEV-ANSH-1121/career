<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\Country;

class District extends Model
{
    use HasFactory;

    protected $primaryKey = 'districtID';

    public $timestamps = false;

    protected $table = 'mast_district';

    /**
     * Get country for this state
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function disCountry()
    // {
    //     return $this->belongsTo(Country::class, 'country', 'countryID');
    // }

    // /**
    //  * Get country for this state
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function disState()
    // {
    //     return $this->belongsTo(Country::class, 'state', 'stateID');
    // }
}
