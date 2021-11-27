<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ORDCompetition extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'members', 'gdrive'];
    protected $casts = [
        'members' => AsArrayObject::class
    ];
}
