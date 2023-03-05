@extends('layout')
@section('contente')
@if (isset($cart) && count($cart))
<table class="table">
    <thead>
        <tr>
            <th>name</th>
            <th>image</th>
            <th>valor</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
       
        @foreach($cart as $index=> $p)
        <tr>
            <td><a href="{{route('excluir_carrinho',['index_table'=>$index])}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
            <td>{{$p->name}}</td>
            <td>
                <img src="{{asset('image/product/'.$p->image)}}" height="60px" width="70px">
            </td>
            <td>{{$p->price}}</td>
        </tr>
        @endforeach
         
    </tbody>
</table>
@else 
<p>Nenhem produdo no carrinho</p>
@endif
@section('scripts')
@endsection

@endsection