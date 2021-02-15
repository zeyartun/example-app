<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'letterNo',
        'date',
        'title',
        'detail',
        'referLetter',
        'sender_id',
        'recipient_user_id',
        'files',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    



    
}
