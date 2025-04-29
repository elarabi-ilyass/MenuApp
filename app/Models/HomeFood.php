<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFood extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'icon',
        'background',
        'Link'

    ];
}
