<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TRAVEL | BLOG</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <!-- Style sheet -->
    <link rel="stylesheet" href="{{ asset('/frontend/') }}/css/style.css" />
    <!-- Favicon -->
    <script src="https://use.fontawesome.com/df7d8a7f99.js"></script>
  </head>
  <body>
    <!-- *************** -->
    <!-- Header Section -->
    @include('frontend/includes/header')
    <!-- ************ -->

    @yield('content')

    <!-- footer -->
    @include('frontend/includes/footer')

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
