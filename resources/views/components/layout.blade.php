<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Reservasi Online | Hotel Hebat</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <div class="navbar">
    <!-- ***** Logo Start ***** -->
                    <h3 style="margin-left: 90px">HOTEL HEBAT</h3>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" style="margin-right: 90px; margin-top:10px;">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/kamar">Kamar</a></li>
                        <li><a href="/hotel">Hotel</a></li>
                    </ul>
                    <!-- ***** Menu End ***** -->
</div>
  <!-- ***** Header Area End ***** -->

            {{$slot}}




            @include('components.footer')
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/js/popup.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('script')

     @if(session('pesan'))
        <script>
            Swal.fire('{{ session('pesan') }}', '', 'success')
        </script>
    @endif
  </body>

</html>
