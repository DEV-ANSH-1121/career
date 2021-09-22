<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCrm extends Model
{
    use HasFactory;

    protected $primaryKey = 'crmID';

    public $timestamps = false;

    protected $table = 'user_crm';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'userID',
        'contact',
        'template',
        'subject',
        'matter',
        'attach',
        'remarks',
        'status',
        'date_start',
        'date_end',
        'date_follow',
        'euser',
        'edate',
    ];
}
