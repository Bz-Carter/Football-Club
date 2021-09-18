<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballPlayer extends Model
{
    use HasFactory;

    protected $fillable = [
     'user_id',
     'photo',
     'first_name',
     'last_name',
     'player_name',
     'birth_day',
     'size',
     'weight',
     'description'
    ];
}
