<!doctype html>
<html lang="en">

  <head>
    <title>Barber-Shop &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Barber-Shop:@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
{{--
      <header class="p-3 bg-dark text-white">

    </header> --}}
@include('layouts.header')



    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Barber-Shop</h1>
              <p>Только на нашем сайте вы можете выбрать интересующий вас вид прически и выбрать любого из вакантных парикмахеров</p>
              {{-- <p><a href="#" class="btn btn-primary">Learn More</a></p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

@include('layouts.main')

@yield('content')
    <!-- END section -->

    {{-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Сервисы &amp; Расценки</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>

            <p class="text-center">
              <a href="#" class="btn btn-primary custom-prev">Предыдущ</a>
              <a href="#" class="btn btn-primary custom-next">Следующ</a>
            </p>
          </div> --}}

        {{-- </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">

              <div class="item-1 h">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Стрижка</h3>
                  <ul>
                    <li class="d-flex"><span>Men's Cut</span> <span class="price ml-auto">$29.00</span></li>
                    <li class="d-flex"><span>Men's Cut with Shampoo and Blow Dry</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Ladie's Cut with Shampoo and Blow Dry</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Head Shave</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Hair Art</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div>

              </div>

              <div class="item-1 h">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Стиль волос</h3>
                  <ul>
                    <li class="d-flex"><span>Шампунь</span> <span class="price ml-auto">$29.00</span></li>
                    <li class="d-flex"><span>Сухая продувка</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Железо</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Бразильская расдувка</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Арт волос</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div>

              </div>

              <div class="item-1 h">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Уход за кожей головы</h3>
                  <ul>
                    <li class="d-flex"><span>Shampoo</span> <span class="price ml-auto">$29.00</span></li>
                    <li class="d-flex"><span>Сухая продувка</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Железо</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Бразильская расдувка</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Арт волос</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div>

              </div> --}}

            </div>

          </div>
        </div>
      </div>
    </div>





    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">Quality Haircut</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="#" class="btn btn-primary">Свяжитесь с нами</a></p>
          </div>
        </div>
      </div>
    </div>


{{--
    <footer class="site-footer">

    </footer> --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- @if(\Illuminate\Support\Str::startsWith(request()->path(), 'admin'))
    @include('layouts.admin-header')
@else
    @include('layouts.header')
@endif --}}

{{-- <main>
    <section class="py-5 text-center container">
        @if (session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if (session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif

        @yield('content')
    </section>
</main> --}}

@include('layouts.footer')

<script src="/js/bootstrap.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<body>

</html>
