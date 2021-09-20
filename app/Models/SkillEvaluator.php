<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillEvaluator extends Model
{
    use HasFactory;

    protected $primaryKey = 'skillsID';

    public $timestamps = false;

    protected $table = 'skills_evaluator';
}
