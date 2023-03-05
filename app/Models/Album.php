<?php

namespace App\Models;


class Album extends RModel
{
    protected $table="Albums";
    protected $fillable=['product_id','name'];
}
