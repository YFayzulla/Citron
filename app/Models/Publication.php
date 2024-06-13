<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    public $timestamps = false;

    use HasFactory;

    protected $fillable = ['name','author','ex_name','date','file'];

}
