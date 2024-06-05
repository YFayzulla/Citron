<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected static $ignoreTimestampsOn;

    protected $fillable=['country_uz','country_ru','country_en','university_uz_en','university_ru','date','description_uz','description_ru','description_en','photo'];


}
