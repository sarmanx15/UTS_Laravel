
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Belajar Blog Template for Bootsrap</title>

    <!-- Bootstrap core CSS -->
    <link href="component/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="component/bootstrap/dist/css/blog.css" rel="stylesheet">

  </head>

  <body>

  @include ('layouts.nav')
    <div class="container">

      <div class="row">
     

        @yield ('content')

         @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include ('layouts.footer')
    