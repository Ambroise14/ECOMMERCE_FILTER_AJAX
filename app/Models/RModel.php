<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;
    protected $primarykey="id";
    public $timestamps=true; // data_create e data_atualizacao
    public $increment=true;
    protected $fillable=[];

    public function beforesave(){
        return true;
    }

    public function save(array $potions=[]){
        try{
            if(!$this->beforesave()){
              return false;
            }
            return parent::save();

        }catch(\Exception $e){
           throw new \Exception($e->getMessage());
        }
    }
}
