<?php

namespace App\services;

use App\Models\Endereco;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class clientservice
{
    public function salvarclient(User $user,Endereco $endereco){
        $verificauuser=User::where(['email'=>$user->email,'password'=>$user->password])->first();
        if($verificauuser){
            return ['status'=>'err','message'=>'cet login ja esta cadastrado no sistema'];
        }
      try{
        DB::beginTransaction();
        $user->save();
        $endereco->user_id=$user->id;
        $endereco->save();
        DB::commit();
        return ['status'=>'ok','message'=>'usuario cadastrado com successo'];
      }catch(Exception $e){
        Log::error('error',['fille'=>'clienteService.salvar','message'=>$e->getMessage()]);
        DB::rollBack();
        return ['status'=>'err','message'=>'nao pode cadastrar usuario'];
      }
    }

}
