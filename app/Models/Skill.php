<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color'
    ];

    public static function getAvailableBackgroundColors(): array
    {
        return json_decode(File::get(resource_path('json/customization.json')))->backgrounds;
    }
}
