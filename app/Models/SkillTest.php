<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillTest extends Model
{
    use HasFactory;

    protected $primaryKey = 'testID';

    public $timestamps = false;

    protected $table = 'skills_test';
}
