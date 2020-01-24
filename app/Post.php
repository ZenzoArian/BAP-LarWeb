<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user','title','description','seriesA','seriesB','pub_date','image'];
}
