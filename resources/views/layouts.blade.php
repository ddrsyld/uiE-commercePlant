<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - G4rden</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{'icon/css/boxicons.min.css'}}">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
</head>

<body>
    <nav class=" navbar navbar-expand-sm navbar-success fixed-top">
        <!-- Brand/logo -->
        <div class="container justify-content-between">
            <a class="navbar-brand text-white font-weight-bold" href="#">G4rden</a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/tentang">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/kontak">KONTAK</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="py-5 ft-by">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="text-success font-weight-bold" style="font-size: xx-large;">G4rden</div>
                    <p class="text-success">Perusahaan Tanaman</p>
                    <h3>
                        <i class="bx bxl-instagram text-success"></i>
                        <i class="bx bxl-youtube text-success"></i>
                        <i class="bx bxl-twitter text-success"></i>
                        <i class="bx bxl-linkedin text-success"></i>
                    </h3>

                </div>
                <div class="col-md-3">
                    <h5 class="text-success font-weight-bold">Tentang Halaman</h5>
                    <p href="#" class="text-success foot-item">Beranda</p>
                    <p href="#" class="text-success foot-item">Tentang</p>
                    <p href="#" class="text-success foot-item">Buah</p>
                    <p href="#" class="text-success foot-item">Kontak</p>
                </div>
                <div class="col-md-3">
                    <h5 class="text-success font-weight-bold">Komunitas</h5>
                    <p href="#" class="text-success foot-item">tanamanHias</p>
                    <p href="#" class="text-success foot-item">tanamanObat</p>
                    <p href="#" class="text-success foot-item">buahBuahan</p>
                    <p href="#" class="text-success foot-item">sayurSayuran</p>
                </div>
                <div class="col-md-3">
                    <h5 class="text-success font-weight-bold">Kontak</h5>
                    <p href="#" class="text-success foot-item">Instagram</p>
                    <p href="#" class="text-success foot-item">LinkedIn</p>
                    <p href="#" class="text-success foot-item">Twitter</p>
                    <p href="#" class="text-success foot-item">YouTube</p></div>
            </div>
        </div>
    </footer>

    <script src="{{asset('script.js')}}"></script>
</body>

</html>
