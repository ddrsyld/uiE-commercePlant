@extends('layouts')

@section('content')

    <section id="#">
        <div class="jumbotron header">
            <div class="container align-items-center">
                <h1 class="text-white">ANEKA BAHARI DAN HAYATI</h1>
                <p class="text-white" style="width: 45rem; text-align: justify;">Selamat datang di website kami, Kami memiliki beberapa tanaman yang mungkin anda butuh kan saat ini, silahkan cari tanaman yang anda butuhka lalu hubungi admin kami untuk mendapatkan tanaman tersebut</p>
                <div class="flex">
                    <a class="btn btn-outline-light px-4" href="#">Lihat Detail</a>
                    <a class="btn btn-light px-4 text-success" href="#">Pesan Tanaman</a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="mb-5">
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
    <section id="cardfruit" class="container">
        <h2 class="font-weight-bolder text-center text-success">Semua Tanaman</h2>
        <p class="text-center text-secondary mb-4">Kita memiliki beberapa tanaman</p>
        <div class="card-deck mb-5">
                <button type="button" class="card card-fruit justify-content-center cf1 py-5">
                    <div class="card-body text-center">
                        <img src="{{asset('img/jeruk.png')}}" style="width: 100px;" alt="">
                        <h4>Jeruk</h4>
                    </div>
                </button>
                <button type="button" class="card card-fruit cf2 py-5">
                    <div class="card-body text-center">
                        <img src="{{asset('img/bberry.png')}}" style="width: 100px;" alt="">
                        <h4>Bluberi</h4>
                    </div>
                </button>
                <button type="button" class="card card-fruit cf3 py-5">
                    <div class="card-body text-center">
                        <img src="{{asset('img/stberry.png')}}" style="width: 100px;" alt="">
                        <h4>Strawberi</h4>
                    </div>
                </button>
                <button type="button" class="card card-fruit cf4 py-5">
                    <div class="card-body text-center">
                        <img src="{{asset('img/pisang.png')}}" style="width: 100px;" alt="">
                        <h4>Pisang</h4>
                    </div>
                </button>
                <button type="button" class="card card-fruit cf5 py-5">
                    <div class="card-body text-center">
                        <img src="{{asset('img/apel.png')}}" style="width: 100px;" alt="">
                        <h4>Apel</h4>
                    </div>
                </button>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card my-2">
                    <div class="card-body">
                        <h4 class="card-title">Buah-buahan</h4>
                        <p class="card-text">Silahkan lihat detail untuk melihat lebih lengkap</p>
                        <a href="#" class="card-link text-success">Lihat Semua Tanaman</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card my-2">
                    <div class="card-body">
                        <h4 class="card-title">Sayur-sayuran</h4>
                        <p class="card-text">Silahkan lihat detail untuk melihat lebih lengkap</p>
                        <a href="#" class="card-link text-success">Lihat Semua Tanaman</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card my-2">
                    <div class="card-body">
                        <h4 class="card-title">Tanaman hias</h4>
                        <p class="card-text">Silahkan lihat detail untuk melihat lebih lengkap</p>
                        <a href="#" class="card-link text-success">Lihat Semua Tanaman</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card my-2">
                    <div class="card-body">
                        <h4 class="card-title">Tanaman obat</h4>
                        <p class="card-text">Silahkan lihat detail untuk melihat lebih lengkap</p>
                        <a href="#" class="card-link text-success">Lihat Semua Tanaman</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="speciality" class="container my-5">
        <h2 class="font-weight-bolder text-center text-success">Spesial</h2>
        <p class="text-center text-secondary mb-4">Yang spesial dari kami</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/gardener.jpeg')}}">
                    <div class="card-body">
                        <h4 class="card-title">Tukang Kebun Terbaik</h4>
                        <p class="card-text">Kita memiliki Tukang Kebun yang konsisten dan berpengalaman dalam merawat tanaman kami</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/plant.jpeg')}}">
                    <div class="card-body">
                        <h4 class="card-title">Tanaman Terbaik</h4>
                        <p class="card-text">Tanaman yang dirawat dan di jaga sebaik mungkin menghasilkan tanaman dengan kualitas terbaik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-3">
                    <img class="card-img-top" src="{{asset('img/maintenance.jpeg')}}">
                    <div class="card-body">
                        <h4 class="card-title">Perawatan Terbaik</h4>
                        <p class="card-text">Bukan hanya manusia, tanaman juga membutuhkan perawatan yang baik agar dapat tumbuh dengan baik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
