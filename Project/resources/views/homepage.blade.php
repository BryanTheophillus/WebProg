@extends('template.loginNav')
@section('title','Homepage')

<link rel="stylesheet" href="{{url('/css/home.css')}}">
@section('content')
<div class="content-1">
    <h3 class="CTitle d-flex justify-content-center">Find Your Best Clothes Here!</h3>
</div>
<div class="d-flex flex-wrap justify-content-center">
    @if ($products->isEmpty())
        <p id="msg" >Not Found</p>
    @endif
    @foreach ($products as $product)
      <div class="card m-3 bg-white text-black">
          <img class="card-img-top" src="{{Storage::url($product->image)}}" alt="">
          <div class="card-body">
              <div>
                    <h5 class="card-title">{{$product->name}}</h5>
              </div>
              <p class="card-text">Rp.{{$product->price}}</p>
              <td><a href="" class="btn bg-Primary">More Detail</a></td>
          </div>
      </div>
    @endforeach
</div>
@endsection