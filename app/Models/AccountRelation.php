<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountRelation extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'introducer_id',
        'benificiary_id',
    ];
}
