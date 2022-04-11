<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'color',
        'icon_name'
    ];

    public static function getAvailableTextColors(): array
    {
        return json_decode(File::get(resource_path('json/customization.json')))->texts;
    }

    public static function getAvailableIcons(): array
    {
        return json_decode(File::get(resource_path('json/customization.json')))->icons;
    }

}
