<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $fillable = [
        'letterNo',
        'date',
        'title',
        'detail',
        'referLetter',
        'sender_id',
        'ccsender_id',
        'files',
    ];
}
