<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PWF extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','university','major','phone','category','proof'];
}
