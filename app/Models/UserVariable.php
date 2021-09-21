<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVariable extends Model
{
    use HasFactory;

    protected $primaryKey = 'variableID';

    public $timestamps = false;

    protected $table = 'user_variable';
}
