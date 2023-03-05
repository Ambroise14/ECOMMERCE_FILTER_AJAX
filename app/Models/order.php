<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends RModel
{
    protected $table="orders";
    protected $fillable=['user_id','datapedido','statut'];
    
}
