@extends('layout')
@section('contente')

<div class="col-md-6 offset-md-3">
    <form action="{{route('cadastrar_client')}}" method="post" enctype="multipart/form-data" class="shadow-none p-3 mb-5 bg-light rounded">
        @csrf
        <div class="row">
          
            <div class="col-6">
                <div class="form-group">
                    Nome:
                    <input type="text" name="name" class="form-control" value="{{old("name")}}">
                    @error('name')
                       <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Name:
                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    CPF:
                    <input type="text" name="cpf" id="cpf" class="form-control" value="{{old("cpf")}}">
                    @error('cpf')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Senha:
                    <input type="password" name="password" class="form-control" value="{{old("password")}}">
                    @error('password')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    Endereco:
                    <input type="password" name="text" class="form-control" value="{{old("endereco")}}">
                    @error('endereco')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    Cidade:
                    <input type="text" name="cidade" class="form-control" value="{{old("cidade")}}">
                    @error('cidade')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
    
            <div class="col-2">
                <div class="form-group">
                    Numero:
                    <input type="text" name="numero" class="form-control" value="{{old("numero")}}">
                    @error('?')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    complemento:
                    <input type="text" name="complemento" class="form-control" value="{{old("complemento")}}">
                    @error('complemento')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    CEP:
                    <input type="text" name="cep" id="cep" class="form-control" value="{{old("cep")}}">
                    @error('cep')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Estado:
                    <input type="text" name="estado" class="form-control" value="{{old("estado")}}">
                    @error('estado')
                    <span class="text-danger">{{$message}}</span> 
                 @enderror
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

