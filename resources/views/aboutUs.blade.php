@extends('layout')
@section('content')
<div class="container mt-5 pt-5 mb-2 pb-4">
    <div class="row">
        <div class="card col p-4 shadow" style="width: 18rem;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="{{asset('img/banner.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded h-25" src="{{asset('img/delia.jfif')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded h-25" src="{{asset('img/dina.jfif')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded h-25" src="{{asset('img/bela.jfif')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded h-25" src="{{asset('img/imas.jfif')}}" alt="Second slide">
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
            <div class="card-body pb-4">
                <h5 class="card-title border-bottom d-inline-block pb-2 pr-5 border-primary text-md">PT BPR Amal Bhakti
                    Sejahtera
                </h5>
                {{-- class="card-text text-secondary text-muted text-sm" --}}
                <p>Bank Perkreditan Rakyat Amal Bhakti Sejahtera
                    mulai beroperasi pada tanggal 24 Juni 1996 berdasarkan ijin usaha Menteri Keuangan RI No.
                    KEP.161/KM.17/`1996 didirikan dalam bentuk Perseroan Terbatas melalui Akta Notaris Irwan Santosa SH
                    No. 73 tanggal 29 Agustus 1995 perubahan Akta No. 23 tanggal 14 November 1995 dan Akta tambahan No.4
                    tanggal 02 April 1996 dan telah mendapat pengesahan Menteri Kehakiman No. C2.572.HT.01.01 TH 96
                    tanggal 15 Januari 1996.
                </p>
                <p>Bidang usaha adalah menghimpun dana masyarakat dalam bentuk simpanan yaitu
                    tabungan dan deposito yang kemudian disalurkan kembali kepada masyarakat berupa pemberian kredit,
                    khususnya kepada masyarakat golongan ekonomi lemah di desa-desa Kecamatan Labuan dan sekitarnya. Di
                    kecamatan Labuan saat ini ada dua BPR dan beberapa Bank umum serta banyak lembaga keuangan non Bank
                    yang merupakan pesaing dalam usaha, untuk menjangkau operasi yang kami akan capai di desa-desa
                    Kecamatan di wilayah Kabupaten Pandeglang. Pelayanan kami juga menggunakan pola jemput bola atau
                    door to door service dan pelayanan tabungan di backup dengan sistem computer. Izin-izin dan surat
                    keterangan :
                </p>
                <p>
                    Surat pengesahan PT oleh Menteri Kehakiman SK No.C2-572 HT.01.01 TH 96 tgl 15 Januari 1996
                    Izin usaha dari Menteri Keuangan RI SK No. Kep.161./KM.17/1996 tanggal 2 Mei 1996.
                    Surat Domisili dari kelurahan Kalang anyar Kecamatan Labuan, No.01/D.2013/Pem.06/11/1996 Tanggal 06
                    Februari 1996.
                    Surat Tanda Daftar Perusahaan ( TDP ) dari Pemerintah Kabupaten Pandeglang, Dinas Perindustrian
                    Perdagangan & Pasar Kab Pandeglang No. TDP 30.05.1.65.10009, 23 Sep 2015.
                    Surat Izin Usaha Perdagangan ( SIUP ) besar No.503/271/SIUP/-BPPT/2013 tagl 22-03-2013.
                    Surat Izin Tempat Usaha ( SITU ) No. 503/275/SITU-BPPT/2013 tanggal 22 – 03 – 2013.
                </p>

                <p class="font-weight-bold border-bottom d-inline-block border-primary pr-2">VISI dan MISI</p>
                <p class="font-weight-bold">Visi</p>
                <ul>
                    <li>Menjadi BPR yang sehat dan terkemuka</li>
                </ul>

                <p class="font-weight-bold">Misi</p>
                <ul>
                    <li>Mendorong pertumbuhan perekonomian melalui peningkatan UMKM</li>
                    <li>Memberikan pelayanan Perbankan yang amanah dan profesional</li>
                    <li>Memberikan nilai tambah pada stakeholder</li>
                </ul>


            </div>
        </div>
    </div>
</div>
@endsection