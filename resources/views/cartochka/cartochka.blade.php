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
<style>
    body{
        background-color:white;
    }
</style>
<body>

<div class="head__block-wrapper">
    @include('layouts.header')
</div>
<div class="container-tovar">
    @include('layouts.BlockCartochka')
    @include('layouts.player')
</div>
@include('layouts.footer')

</body>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        let img = new Image();
        img.onload = function() {
            let canvas = document.createElement('canvas');
            canvas.width = this.width;
            canvas.height = this.height;
            let ctx = canvas.getContext('2d');
            ctx.drawImage(this, 0, 0);
            let data = ctx.getImageData(0, 0, canvas.width, canvas.height).data;
            let rgb = [0, 0, 0];
            for (var i = 0; i < data.length; i += 4) {
                rgb[0] += data[i];
                rgb[1] += data[i + 1];
                rgb[2] += data[i + 2];
            }
            let numPixels = data.length / 4;
            rgb[0] /= numPixels;
            rgb[1] /= numPixels;
            rgb[2] /= numPixels;
            // Увеличим каждую компоненту на некоторое значение, чтобы гарантировать светлый цвет
            let increasedRgb = rgb.map(function(component) {
                return Math.min(255, component + 35); // увеличение на 25
            });
            let color = 'rgb(' + increasedRgb.join(',') + ')';
            document.body.style.backgroundColor = color;
        };
        img.src = 'images/main.png'; // Указываем путь к вашему изображению
    });

</script>
</html>
