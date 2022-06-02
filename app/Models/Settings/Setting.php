<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract

{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['fullname', 'jobTitle', 'copyright'];
    protected $fillable = ['author'];
}
