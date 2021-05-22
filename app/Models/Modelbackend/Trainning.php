<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainning extends Model
{
    use HasFactory;
    protected $fillable=["name","email","address","phone","course","cv"];
}
