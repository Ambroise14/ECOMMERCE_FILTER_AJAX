<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends RModel
{
    protected $table="products";
    protected $fillable=['category_id','ref','name','price','quantity','description','statut','popular','image'];
}
