<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillMcq extends Model
{
    use HasFactory;

    protected $primaryKey = 'mcqID';

    public $timestamps = false;

    protected $table = 'skills_mcq';
}
