<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link href="{{ asset('custom_css/font-google.css') }}" rel="stylesheet">
  <link href="{{asset('custom_css/tailwind.css')}}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="{{ asset('style-carousel.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('style.css') }}">

  <!-- open engine -->


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">


    <style>
    .container{
        padding-top: 0px;
    }
    </style>
  <title>Sciensoft Development Company</title>


    @yield('css')

  </head>
  <body>

    <div class="wrapper">
    @include('front.Components.categories', $categories)

    @yield('main')

    @include('front.Components.footer')


    </div>

  @yield('js')
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/slick.js') }}"></script>
  <script src="{{ asset('index.js') }}"></script>
  <script>
    $(document).ready(function () {
        $('.customer-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1000,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
            breakpoint: 768,
            setting: {
              slidesToShow: 4
            }
          }, {
            breakpoint: 520,
            setting: {
              slidesToShow: 3
            }
          }]
        });
      });
  </script>

<!-- open  engine -->
<script>
    new Splide('.splide').mount();
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
  </body>
</html>
