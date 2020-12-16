<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Setting Table Name
    protected $table = "posts";
    //Primary key 
    public $primaryKey = "id";
    //Time stamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
