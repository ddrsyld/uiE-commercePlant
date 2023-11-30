<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
    <link rel="stylesheet" href="{{asset('css/coba.css')}}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}"> -->
</head>
<body>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="{{('img/apel.png')}}" alt="" class="card-img">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">mr apel</h2>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptates rem doloremque necessitatibus saepe totam, earum alias, aliquam, officia iure mollitia ipsam eius nostrum fugit veritatis. Architecto excepturi error facilis.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <script src="{{asset('coba.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- <script src="{{asset('swiper-bundle.min.js')}}"></script> -->
</body>
</html>
