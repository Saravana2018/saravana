<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personmodel extends Model
{
    protected $fillable=[
    'firstname','lastname','email','gender',
    ]
}
