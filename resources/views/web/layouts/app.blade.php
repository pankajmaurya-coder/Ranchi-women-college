<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet" 
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">

        <!-- Cdn Library -->
         <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />

          <!-- swipper js -->
              <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.css"
    />

    <!-- custome css -->

     <link rel="stylesheet" href="{{asset('css/web.css')}}">
</head>
<body>
    @include('web.layouts.header')
      
    @yield('content')

     @include('web.layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.js"></script>
    <script src="{{asset('js/web/slider.js')}}"></script>
    <script src="{{asset('js/web/header.js')}}"></script>
    <script src="{{asset('js/web/testimonial.js')}}"></script>
</body>
</html>