@extends('base_template')
@include('navbar_template')
<head>
  	<meta http-equiv="refresh" content="3; url={{action('IndexController@index')}}">
</head>
<div class="container" style="padding-top: 4%">
	<div class="card mx-auto d-block" >
		<div class="card-header text-center" style="background-color: {{$back_color}};border-radius:5px">
			<h4 style="color: {{$text_color}};">{{$Msg}}&nbsp;<i class="{{$icon}}"></i></h4>
		</div>
	</div>
</div>