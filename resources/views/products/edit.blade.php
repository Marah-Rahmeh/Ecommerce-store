@extends('header')

@section('content')

<div class="container"   style="padding-top: 12%">

    <div class="container breadcrumb">
        <div class="jumbotron">

            <p> Product name : {{ $product->name  }}  </p>
            <a href="{{ route('products.index')}}" class="btn btn-primary" >
            <span style="color: white"></span> back </a>

        </div>
    </div>
        <br>

<div class="container" style="padding-top: 2%">
<form action="{{ route('products.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">  Name</label>
          <input type="text" name="name" value="{{ $product->name  }} " class="form-control"  placeholder="product name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">  Price</label>
            <input type="text" name="price" value="{{ $product->price  }} "  class="form-control"  placeholder="product price">
          </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
        <br>
    </form>
</div>
</div>

@endsection
