<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz', 'name_ru', 'name_en', 'desc_uz', 'desc_ru', 'desc_en', 'image', 'user_id', 'is_grant', 'status'
    ];

    public function project_has_user(): HasMany
    {
        return $this->hasMany(ProjectHasUser::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(ProjectHasUser::class, 'user_id', 'id');
    }
}
