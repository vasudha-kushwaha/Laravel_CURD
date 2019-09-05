<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=["heading", "tags", "content", "writer"];
    //
}
