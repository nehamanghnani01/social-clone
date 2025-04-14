<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user() {  //maintaing the relationship for one user -> one profile
        return $this->belongsTo(User::class);
    }
}
