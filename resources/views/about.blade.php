@extends('layouts')

@section('content')

<section id="about" class="mb-5 py-5" style="background-color: #d3d3d3;">
        <div class="container py-5">
            <div class="row py-5 align-items-center">
                <div class="col-md-6">
                    <img src="{{asset('img/gardener.jpeg')}}" class="w-100 rounded" alt="">
                </div>
                <div class="col-md-6">
                    <h5 class="text-secondary">Tentang <span class="text-success">Kami</span></h5>
                    <h1 class="text-success">Kami memiliki beberapa tanaman disini</h1>
                    <p class="text-secondary" style="text-align: justify;">Di perusahaan G4rden ini, kami membangun sebuah tempat dimana tanaman dapat hidup dengan baik dan juga kami memberikan tanaman tersebut perawatan yang spesial sehingga para konsumen kami tidak perlu khawatir dengan tanaman hasil produksi kami.</p>
                    <div class="flex">
                        <a class="btn btn-outline-success px-4" href="#">Lihat Detail</a>
                        <a class="btn btn-success px-4 text-light" href="#">Pesan Tanaman</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="all-plant" class="container my-5">
        <div class="row container">
            <div class="col-md-10">
                <h2 class="font-weight-bolder text-success">Buah-buahan</h2>
                <p class="text-secondary mb-4">Beberapa Buah-buahan dari kami</p>
            </div>
            <div class="col-md-2">
                <a href="#" style="font-size: large;" class="btn btn-outline-secondary">Lihat lebih lengkap</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/stberry.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Strawberry</h4>
                        <p class="card-text">Tanaman berry yang berwarna merah cantik, yang rasa nya cukup bervariasi seperti kecut dan manis</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/bberry.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Blueberry</h4>
                        <p class="card-text">Tanaman berry yang baunya sangat khas apalagi yang langsung dipanen dari kebun kami</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/jeruk.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Jeruk</h4>
                        <p class="card-text">Buah ini berwarna oren cerah dan juga memiliki beberapa rasa seperti kecut dan manis</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row container mt-5 py-5">
            <div class="col-md-10">
                <h2 class="font-weight-bolder text-success">Sayur-sayuran</h2>
                <p class="text-secondary mb-4">Beberapa Sayur-sayuran dari kami</p>
            </div>
            <div class="col-md-2">
                <a href="#" style="font-size: large;" class="btn btn-outline-secondary">Lihat lebih lengkap</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/wortel.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Wortel</h4>
                        <p class="card-text">Sayur Wortel adalah sayur yang baik untuk mata dan mengandung banyak nutrisi</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/bawang2.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Bawang</h4>
                        <p class="card-text">Sayur ini memiliki bau yang khas sehingga banyak dipakai dibeberapa masakan</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/tomat.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Tomat</h4>
                        <p class="card-text">Sayur Tomat sangatlah baik untuk tubuh karena terkandung banyak vitamin didalamnya</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>


        <hr>

        <div class="row container mt-5 py-5">
            <div class="col-md-10">
                <h2 class="font-weight-bolder text-success">Tanaman hias</h2>
                <p class="text-secondary mb-4">Beberapa Tanaman Hias dari kami</p>
            </div>
            <div class="col-md-2">
                <a href="#" style="font-size: large;" class="btn btn-outline-secondary">Lihat lebih lengkap</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/mawar2.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Bunga Mawar</h4>
                        <p class="card-text">Bunga Mawar adalah bunga yang cukup indah untuk menjadi tanaman hias dirumah anda</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/sepatu2.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Bunga Sepatu</h4>
                        <p class="card-text">Bunga Sepatu adalah bunga yang cukup indah untuk menjadi tanaman hias dirumah anda</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/tulips2.png')}}">
                    <div class="card-body">
                        <h4 class="card-title">Bunga Tulips</h4>
                        <p class="card-text">Bunga tulip adalah bunga yang cukup indah untuk menjadi tanaman hias dirumah anda</p>
                        <a href="#" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection
