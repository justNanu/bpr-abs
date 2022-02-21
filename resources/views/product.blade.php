@extends('layout')
@section('content')
<div class="mx-5 mt-5 pt-5 mb-2 pb-4">
    <div class="row">
        <div class="card col col-lg-8 p-4 shadow mr-4" style="width: 18rem;">
            <h5 class="card-title  d-inline-block pb-2 pr-5 text-md">{{$product->title}}
            </h5>
            <img class="card-img-top shadow image-fluid" src="{{asset($product->image)}}" alt="Card image cap">
            <div class="card-body">

                {!!$product->body!!}

            </div>
        </div>
        <div class="col col-lg-3 pl-5 border-left">
            <h5 class="text-center text-primary">Produk Lainnya</h5>
            <div class="row">
                @foreach ($products as $product)
                <div class="card shadow pt-4 my-2 col-12" style="width: 18rem;">
                    <img class="card-img-top shadow" src="{{asset($product->thumbnail)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text text-secondary">{!! Str::limit($product->body, 70) !!}</p>
                        <a href="/products/{{$product->slug}}" class="btn btn-primary">Lihat selengkapnya</a>
                    </div>
                </div>
                @endforeach
                <p class="my-4"><a href="/products">Lihat Lainnya >>></a></p>
            </div>
        </div>
    </div>
</div>
@endsection