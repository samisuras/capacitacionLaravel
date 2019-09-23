<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //projects
    protected  $fillable = ['title','url','description'];
    public function getRouteKeyName()
    {
        return 'url';
    }
}
