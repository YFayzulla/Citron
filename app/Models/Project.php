<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['name_uz','name_ru','name_en','desc_uz','desc_ru','desc_en','image','user_id','status'];

    public function project_has_user(){
        return $this->hasMany(ProjectHasUser::class);
    }
    public function user(){
        return $this->hasMany(ProjectHasUser::class ,'user_id','id');
    }
}
