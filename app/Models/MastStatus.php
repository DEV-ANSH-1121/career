<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MastStatus extends Model
{
    use HasFactory;

    protected $primaryKey = 'statusID';

    public $timestamps = false;

    protected $table = 'mast_status';
}
