<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/app/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('dist/js/app/app.js') }}"></script>
    <title>Пластинка</title>
</head>
<body style="background: rgb(165, 180, 247)">

<div class="head__block-wrapper">
    @include('layouts.header')
</div>
<div class="container__categories">
    @include('layouts.poiskHanr')
    <div class="block-tovar">
        <div class="catalog__itemm">
            <div class="catalog__item-img">
                <img
                    src="https://im.kommersant.ru/Issues.photo/NEWS/2023/02/27/KMO_191711_00091_1_t222_155015.jpg"
                    alt="author">
            </div>
            <div class="catalog__item-content catalog__content">
                <span class="catalog__content-author">grandson</span>
                <h4 class="catalog__content-title">Death Of An Optimist</h4>
                <div class="catalog__content-wrapper">
                    <div class="catalog__content-genres">
                        <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">
                            Alternative Rock
                        </div>
                        <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">
                            Alternative Rock
                        </div>
                    </div>
                    <div class="catalog__content-cost catalog-cost">
                        <span class="discount">-228%</span>
                        <div class="catalog-cost-discount">249 BYN</div>
                        <div class="catalog-cost-original">500 BYN</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
