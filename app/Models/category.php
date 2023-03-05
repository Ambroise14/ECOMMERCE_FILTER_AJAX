<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends RModel
{
    protected $table="categories";
    protected $fillable=['ref','name','statut','popular','description','image'];
}
