<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillResult extends Model
{
    use HasFactory;

    protected $primaryKey = 'resultID';

    public $timestamps = false;

    protected $table = 'skills_result';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'userID',
        'skillsID',
        'ques_attempted',
        'correct_ans',
        'marks',
        'finished',
        'loginIP',
        'edate',
    ];
}
