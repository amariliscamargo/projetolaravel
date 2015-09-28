<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Laravel 5 Sample Site @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Amarilis Camargo"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show

		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!-- Twitter Bootstrap -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design for Bootstrap -->
        <link href="{{ asset('css/roboto.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/material-fullpalette.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">

    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">-->
</head>
<body>
<!---->

<div class="container">
@yield('content')
</div>
@include('partials.footer')

<!-- Scripts -->
@yield('scripts')

</body>
</html>