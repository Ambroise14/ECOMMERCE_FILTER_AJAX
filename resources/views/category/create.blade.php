@extends('layout')
@section('contente')

<div class="col-md-6 offset-md-3">
    <form action="{{route('category')}}" method="post" enctype="multipart/form-data" class="shadow-none p-3 mb-5 bg-light rounded">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    REF:
                    <input type="text" name="ref" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Name:
                    <input type="text" name="name" class="form-control">
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
                   <textarea name="description"  class="form-control"></textarea>
                </div>
                
            </div>
            <div class="col-12">
                <div class="form-group">
                    Description:
                    <input type="file" name="image" class="form-control">
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