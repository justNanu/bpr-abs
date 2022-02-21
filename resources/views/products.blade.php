@extends('layout')
@section('content')
<div class="my-5"></div>
{{-- produk --}}
<div class="container mt-5 py-5">
    <h4 class="font-weight-bold text-secondary pb-4 border-bottom border-primary d-inline-block pr-4 pt-2">Produk
        Keuangan PT
        BPR Amal Bhakti
        Sejahtera</h4>
    <div class="cards py-4 row mx-auto">
        @foreach ($products as $product)
        <div class="card shadow pt-4 my-2 col-lg-3 col-sm-12 col-md-12 mr-sm-0 mr-lg-0" style="width: 18rem;">
            <img class="card-img-top shadow" src="{{asset($product->thumbnail)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text text-secondary">{!! Str::limit($product->body, 70) !!}</p>
                <a href="/products/{{$product->slug}}" class="btn btn-primary">Lihat selengkapnya</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection