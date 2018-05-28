</!DOCTYPE html>
<html>
<head>
	<title></title>
	@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">

<!--css materialize-->
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<!--JS Materialize-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('materialize/js/materialize.min.js')}}"></script>

<!--Css Semantic UI-->
<link rel="stylesheet" type="text/css" href="{{asset('Semantic-UI-CSS/semantic.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Semantic-UI-CSS/semantic.css')}}">

<!--CSS Style-->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

<!--Modal-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@show
</head>
<body>
	@section('header')
    @include('layout.header')
	
	@section('aside')
	@include('layout.aside')
	@show

<div class="">
	@yield('content')
</div>
</body>
</html>



