<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','heroe_id','likes','dislikes','thumbnail','name'];
}
