<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrResult extends Model
{
    use HasFactory;

    protected $primaryKey = 'resultID';

    public $timestamps = false;

    protected $table = 'hr_result';
}
