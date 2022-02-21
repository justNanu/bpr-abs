@extends('layout')
@section('content')
{{-- carousel --}}
<div class="container my-5 pt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="{{asset('img/banner.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded h-50" src="{{asset('img/banner2.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

{{-- produk --}}
<div class="container mt-5">
    <h5 class="font-weight-bold">Produk Keuangan PT BPR Amal Bhakti Sejahtera</h5>
    <div class="cards py-4 row mx-auto">
        @foreach ($products as $product)
        <div class="card border-secondary shadow pt-4 my-2 col-12 col-md mr-0 mr-md-4" style="width: 18rem;">
            <img class="card-img-top shadow" src="{{asset($product->thumbnail)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text text-secondary" style={ font-size: 5px; }>{!! Str::limit($product->body, 70) !!}</p>
                <a href="/products/{{$product->slug}}" class="btn btn-primary">Lihat selengkapnya</a>
            </div>
        </div>
        @endforeach

    </div>
    <p class="text-right"><a href="/products">Lihat Lebih Banyak >>></a></p>
</div>

{{-- why us --}}
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 border-right border-primary">
            <h1 class="text-center my-4 py-2 font-weight-bold text-primary">Cepat</h1>
            <p>Lelah, galau dan bingung menunggu kepastian ? kami berkomitmen <span class="text-primary">memberikan
                    anda kepastian dalam 3 hari
                    kerja</span>
            </p>
        </div>
        <div class="col-12 col-md-6 pl-md-5">
            <h1 class="text-center my-4 py-2 font-weight-bold text-primary">Profesional</h1>
            <p>Kepada setiap pribadi, kami berkomitmen memberikan layanan perbankan yang lebih amanah dan <span
                    class="text-primary">Profesional</span>.
            </p>
        </div>
    </div>
</div>

{{-- info --}}
<div class="container my-4 py-4">
    <h4 class="text-primary text-center font-weight-bold py-2 my-2">Informasi Suku Bunga</h4>
    <div class="row">
        <div class="card col-12 col-md-4 my-2 border-right-0 px-4 border-left-0 border-0" style="width: 18rem;">
            <div class="card-header text-primary font-weight-bold text-center">
                Kredit
            </div>
            <ul class="list-group list-group-flush text-sm text-muted">
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-7">Kredit Modal Kerja</div>
                        <div class="col col-lg-5">1.75% / bulan</div>
                    </div>
                </li>
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-7">Kredit Konsumtif</div>
                        <div class="col col-lg-5">2.00% / bulan</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="card col-12 col-md-4 my-2 border-right-0 px-4 border-left-0 border-0" style="width: 18rem;">
            <div class="card-header text-primary font-weight-bold text-center">
                Deposito
            </div>
            <ul class="list-group list-group-flush text-sm text-muted">
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-8">Deposito 1 bulan</div>
                        <div class="col col-lg-4">5.00%</div>
                    </div>
                </li>
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-8">Deposito 3 bulan</div>
                        <div class="col col-lg-4">5.50%</div>
                    </div>
                </li>
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-8">Deposito 6 bulan</div>
                        <div class="col col-lg-4">5.50%</div>
                    </div>
                </li>
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-8">Deposito 12 bulan</div>
                        <div class="col col-lg-4">6.00%</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="card col-12 col-md-4 my-2 border-right-0 px-4 border-left-0 border-0" style="width: 18rem;">
            <div class="card-header text-primary font-weight-bold text-center">
                Tabungan
            </div>
            <ul class="list-group list-group-flush text-sm text-muted">
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-8">Tabungan Tandabahtera</div>
                        <div class="col col-lg-4">4.00%</div>
                    </div>
                </li>
                <li class="list-group-item text-xs">
                    <div class="row">
                        <div class="col col-lg-8">Tabungan Simpel</div>
                        <div class="col col-lg-4">4.00%</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- about us --}}
<div class="container mt-5 pt-5 mb-2 pb-4">
    <div class="row">
        <div class="card col p-4 shadow" style="width: 18rem;">
            <img class="card-img-top shadow" src="{{asset('img/banner.jfif')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">PT BPR AMAL BHAKTI SEJAHTERA</h5>
                <p>Bank Perkreditan Rakyat Amal Bhakti Sejahtera
                    mulai beroperasi pada tanggal 24 Juni 1996 berdasarkan ijin usaha Menteri Keuangan RI No.
                    KEP.161/KM.17/`1996 didirikan dalam bentuk Perseroan Terbatas melalui Akta Notaris Irwan Santosa SH
                    No. 73 tanggal 29 Agustus 1995 perubahan Akta No. 23 tanggal 14 November 1995 dan Akta tambahan No.4
                    tanggal 02 April 1996 dan telah mendapat pengesahan Menteri Kehakiman No. C2.572.HT.01.01 TH 96
                    tanggal 15 Januari 1996.
                </p>
                <p class="text-right"><a href="/about_us">Lihat selengkapnya >>></a></p>
            </div>
        </div>
    </div>
</div>
@endsection