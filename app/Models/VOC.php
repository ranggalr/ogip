<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VOC extends Model
{
    use HasFactory;

    protected $table = 'voc';

    protected $fillable = ['name','email','institution','major','line','phone'];
}
