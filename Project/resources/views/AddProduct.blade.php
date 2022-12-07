@extends('template.loginNav')
@section('title','Add Product')

<link rel="stylesheet" href="{{url('/css/Sign.css')}}">
@section('content')
<body>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="contain col-md-5">
                <div class="card mt-3" id="cardAdd">
                    <h3 class="card-title text-center mt-5">Add Product</h3>
                    <form action="/AddProduct" method="POST">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>@foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label class="form-label" for="image">Clothes Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Clothes Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="desc">Clothes Desc</label>
                            <input class="form-control" type="text" name="desc" id="desc">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="price">Clothes Price</label>
                            <input class="form-control" type="number" name="price" id="price">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="stock">Clothes Stock</label>
                            <input class="form-control" type="number" name="stock" id="stock">
                        </div>

                        <div class="form-group d-flex justify-content-start m-auto">
                            <button type="submit" class="addBtn btn bg-danger mx-6">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
