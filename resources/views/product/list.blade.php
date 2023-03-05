@extends('layout')
@section('contente')

<div class="col-3">
    @if (isset($listcategory) && count($listcategory))
    <a href="{{route('liste')}}" class="list-group-item list-group-item-action  @if(0==$idcategory) active @endif ">Todos</a>

    @foreach($listcategory as $key=>$cat)
    <div class="list-group">
            <a href="{{route('liste_product',['idcategory'=>$cat->id])}}" class="list-group-item list-group-item-action  @if($cat->id==$idcategory) active @endif ">{{$cat->name}}</a>

        </div>
      @endforeach  

    @endif
</div>
<div class="col-9">
    @include('sessions.__list_product')
</div>
@section('scripts')
@endsection

@endsection