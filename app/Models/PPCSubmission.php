<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPCSubmission extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'university', 'full_paper', 'powerpoint','poster'];
}
