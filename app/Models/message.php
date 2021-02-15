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
        'ccsender_id',
        'files',
    ];

    public function users()
    {
<<<<<<< HEAD
        return $this->belongsTo(User::class,'sender_id');
=======
        return $this->belongsTo(User::class);
>>>>>>> 27a2c1b011b4b75ef03c3adf3235a5788c3b9bcb
    }
    



    
}
