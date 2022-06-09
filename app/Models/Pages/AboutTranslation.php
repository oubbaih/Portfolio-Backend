<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTranslation extends Model
{
    public $timestamps = false;
    protected $fillable =  ['present_title', 'present_des', 'tools', 'services', 'experience_title', 'experience_des'];
    use HasFactory;
}
