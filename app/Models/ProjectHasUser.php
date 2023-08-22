<?php

namespace App\Models;

use App\Http\Controllers\ProjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class ProjectHasUser extends Model
{
    use HasFactory;
    protected $table='project_has_user';
    protected $fillable=['user_id','project_id'];

    public function user(){
        return $this->belongsTo(About::class,'user_id','id');
    }

    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
