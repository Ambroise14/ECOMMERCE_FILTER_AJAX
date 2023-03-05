@extends('layout')
@section('contente')

<div class="col-md-6 offset-md-3">
    <form action="{{route('product')}}" method="post" enctype="multipart/form-data" class="shadow-none p-3 mb-5 bg-light rounded">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    category:
                    <select class="form-control" name="category">
                        <option selected>Open this select menu</option>
                          @if (isset($lista) && count($lista)>0)
                              @foreach($lista as $key=>$cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>

                              @endforeach
                          @endif                     
                      </select>
                      
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    REF:
                    <input type="text" name="ref" class="form-control" value="{{old("ref")}}">
                    @error('ref')
                       <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Name:
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    price:
                    <input type="text" name="price" class="form-control" value="{{old("price")}}">
                    @error('price')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    quantity:
                    <input type="text" name="quantity" class="form-control" value="{{old("quantity")}}">
                    @error('quantity')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    statut:
                    <input type="checkbox" name="statut" class="s">
                </div>
                
            </div>
            <div class="col-6">
                <div class="form-group">
                    popular:
                    <input type="checkbox" name="popular" class="s">
                </div>
                
            </div>
    
            <div class="col-12">
                <div class="form-group">
                    Description:
                   <textarea name="description"  class="form-control">{{old('description')}}</textarea>
                   @error('description')
                   <span class="text-danger">{{$message}}</span> 
                @enderror
                </div>
                
            </div>
            <div class="col-12">
                <div class="form-group">
                    Image:
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
                
            </div>
            <div class="col-12">
                <div class="form-group">
                    Album:
                    <input type="file" name="photos[]" class="form-control" multiple>
                </div>
                
            </div>
            <div class="col-6 mt-2">
                <div class="form-group">
                  
                    <input type="submit" value="salvar" class="btn btn-success btn-sm">
                </div>
                
            </div>
        </div>
    </form>
</div>
@section('scripts')
@endsection

@endsection