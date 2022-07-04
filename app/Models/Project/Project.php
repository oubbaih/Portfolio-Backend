<?php

namespace App\Models\Project;

use App\Models\Seo\Seo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['casestudy', 'myrole', 'client', 'description', 'agencyname'];
    protected $fillable = ['year', 'featureImage'];
    protected $casts = [
        'filename' => 'array'
    ];
    use HasFactory;
}
