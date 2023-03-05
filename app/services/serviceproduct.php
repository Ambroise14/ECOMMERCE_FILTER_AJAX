<?php
Namespace App\services;

use App\Models\Album;
use App\Models\product;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class serviceproduct{
   public function salvarproduct(product $product,Album $gallery){
    try{
        DB::beginTransaction();
       $product->save();
       $gallery->product_id=$product->id;
       $gallery->save();
       DB::commit();
       return ['status'=>'ok','message'=>'prodto adicionado com successo'];

    }catch(Exception $e){
        Log::error('fille',['salvar.product'=>'mesage'.$e->getMessage()]);
        DB::rollBack();
        return ['status'=>'err','message'=>'o produto nao foi adicionado'];


    }

   }
}