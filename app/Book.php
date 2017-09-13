<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Author;

class Book extends Model
{
    public  function category(){
        return $this->belongsTo("App\Category");
    }

    public function author() {
        return $this->belongsTo('App\Author');
    }
}
