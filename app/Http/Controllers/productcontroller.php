<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class productcontroller extends Controller
{
    public function category(Request $request){
        $data=[];
        if($request->isMethod("POST")){
            $values=$request->all();
            $category=new category();
            $category->fill($values);
            $category->statut=$request->statut==TRUE ? '1':'';
            $category->popular=$request->popular==TRUE ? '1':'';
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_name=$image->getClientOriginalName();
                $image->move('image/category',$image_name);
                $category->image=$image_name;
            }
            $category->save();
            return back()->with('ok','The categoory has been saved');
           }
        return view('category.create',$data);
    }

    public function product(Request $request){
      
        $data=[];
        $listacategoria=category::all();
        $data['lista']=$listacategoria;
        if($request->isMethod("POST")){
            $request->validate([
                'ref'=>'required',
                'name'=>'required',
                'description'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'image'=>'required',
            ]);
            $values=$request->all();
            $category=new product();
            $category->fill($values);
            $category->category_id=$request->input('category');
            $category->statut=$request->statut==TRUE ? '1':'';
            $category->popular=$request->popular==TRUE ? '1':'';
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_name=$image->getClientOriginalName();
                $image->move('image/product',$image_name);
                $category->image=$image_name;
            }
            $category->save();
           if($request->hasFile('photos')){
            foreach($request->file('photos') as $key=>$files){
                $image_name_2 = time() . $key . $files->getClientOriginalName();
                $gallery=new Album();
                $gallery->product_id=$category->id;
                $gallery->name=  $image_name_2 ;
                $files->move('image/product', $image_name_2 );
                $gallery->save();
            }
           }
            return back()->with('ok','The product has been saved');
           }
        return view('product.create',$data);
    }

    public function cadastrar(Request $request){
        $data=[];
        if($request->isMethod("POST")){
            $request->validate(['name'=>'required','email'=>'required','cpf'=>'required','cep'=>'required','numero'=>'required',
            'password'=>'required','cidade'=>'required','estado'=>'required','endereco'=>'required']);
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:posts|max:255',
                'email' => 'required',
            ]);
            $value=$request->all();
           $user=new User();
           $user->fill($value);
           
    
        }
          
          
        return view('user.create',$data);
    }

    public function liste($idcategory=0,Request $request){
        $data=[];
        $listacategoria=category::all();

        $query=DB::table('products')->limit(3);

        if($idcategory!=0){
            $query=product::where('category_id',$idcategory);
        }
        $listaproduct=$query->get();
        $data['listproduct']=$listaproduct;
        $data['listcategory']=$listacategoria;
        $data['idcategory']=$idcategory;
        return view('product.list',$data);
    }


    public function addcarrinho($idproduct,Request $request){
        $product=product::find($idproduct);
        if($product){
            $carrinho=session('cart',[]);
            array_push($carrinho,$product);
            session(['cart'=>$carrinho]);
            return redirect()->back();
        }

    }

    public function vercarrinho(){
        $data=[];
        $data['cart']=session('cart',[]);
        return view('product.cart',$data);
    }


    public function excluircarrinho($index_table){
        $carrinho=session('cart',[]);
        if($carrinho[$index_table]){
            unset($carrinho[$index_table]);
        }
        session(['cart'=>$carrinho]);
        return back();
    }


    public function order(Request $request){
   
    }

   
}