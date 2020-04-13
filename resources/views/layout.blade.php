<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel CRUD Tutorial With Example - Tutsmake.com</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body{
    background-color: #25274d;
    }
    .container{
    background: #ff9b00;
    padding: 4%;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    }
    </style>
  </head>
  <body>
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>

    {{-- <script src="/vendor/ckeditor/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
  </body>
</html>