@extends('products.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb m-3 text-center">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary float-center m-3" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12  m-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12  m-3">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection