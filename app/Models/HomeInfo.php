<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInfo extends Model
{
    use HasFactory;

    protected $fillable =[
        'whatsApp_Link',
        'instagram_Link',
        'facebook_Link',
        'map_Link',
        'tel_Link',
        'tel_1',
        'tel_2',
        'adress',
        'copyright',
        'location'
    ];
}
