<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable=['name','specialty_uz','specialty_ru','specialty_en','email','tel','project_id','image', 'telegram', 'instagram'];



    public function project_has_user(){
        return $this->hasMany(Project::class);
    }
}
