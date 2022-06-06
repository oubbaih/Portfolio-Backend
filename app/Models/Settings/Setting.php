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
    public $translatedAttributes = ['fullname', 'jobTitle', 'copyright', 'description', 'address'];
    protected $fillable = ['author', 'favicon', 'logo', 'bgImage', 'personalImage'];

    public static function CheckSettings()
    {
        $settings = Setting::all();
        if (count($settings) < 1) {
            $data = ['id' => 1, 'author' => 1];
            foreach (config('app.languages') as $key => $value) {
                $data[$key]['fullname'] = $value;
                $data[$key]['jobTitle'] = $value;
                $data[$key]['copyright'] = $value;
                $data[$key]['description'] = $value;
                $data[$key]['address'] = $value;
            }
            self::create($data);
        }
        return self::first();
    }
}
