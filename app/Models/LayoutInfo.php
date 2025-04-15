<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayoutInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'les_jus_et_les_boissons_et_froides_title',
        'les_jus_et_les_boissons_et_froides_background',
        'title_image',
        'Background_image',
        'Footer_image',
        'Map_icon',
        'Instagram_icon',
        'WhastApp_icon',
        'Tél_icon',
    ];
}
