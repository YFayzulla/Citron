<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    public $timestamps = false;

    use HasFactory;

    protected $fillable = ['name','author_id','ex_name','date','file'];


    public function author(){
        return $this->belongsTo(Author::class);
    }

}
