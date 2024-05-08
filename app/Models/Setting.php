<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "settings";

    protected $fillable = [
        'title',
        'email',
        'phone',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'address',
        'copyright',
        'description',
        'logo'
    ];
}
