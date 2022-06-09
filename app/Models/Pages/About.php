<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class About extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['images'];
    protected $fillable = ['present_title', 'present_des', 'tools', 'services', 'experience_title', 'experience_des'];

    public static function CheckAboutPages()
    {
        $aboutPage = About::all();
        if (count($aboutPage) < 1) {
            $data = ['id' => 1, 'author' => 1];
            foreach (config('app.languages') as $key => $value) {
                $data[$key]['present_title'] = $value;
                $data[$key]['present_des'] = $value;
                $data[$key]['tools'] = $value;
                $data[$key]['services'] = $value;
                $data[$key]['experience_title'] = $value;
                $data[$key]['experience_des'] = $value;
            }
            self::create($data);
        }
        return self::first();
    }
}
