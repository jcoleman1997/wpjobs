<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts';
    //Primary key
    public $PrimaryKey = 'id';
    // Timestamps
    public $TimeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}

