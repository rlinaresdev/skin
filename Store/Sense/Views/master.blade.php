<!DOCTYPE html>
<html lang="{{$locale}}">

	<head>

		<meta charset="{{$charset}}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{config("app.logo")}}" rel='shortcut icon' type='image/png'/>
		@section("metadata")

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@show

		<title>{{ $title }}</title>
        @section("css")

        <link href="{{__url('__sense/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{__url('__sense/css/mdi-5.9.55.min.css')}}" rel="stylesheet">
        <link href="{{__url('__sense/css/layout.ui.css')}}" rel="stylesheet">
        <link href="{{__url('__sense/css/boxed.ui.css')}}" rel="stylesheet">
        @show

	</head>

	<body role="rose">

		@yield("body", 'Content Page')
		
		@section("js")

		<script src="{{__url('__sense/js/jquery-3.6.0.min.js')}}"></script>
		<!-- <script src="{{__url('__sense/js/popper.min.js')}}"></script> -->
		<script src="{{__url('__sense/js/bootstrap.min.js')}}"></script>
		<script src="{{__url('__sense/js/mdi.5.9.55.ui.js')}}"></script>
		@show

	</body>

</html>
