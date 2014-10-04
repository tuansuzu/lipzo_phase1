<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$pageTitle}}</title>

    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/font-awesome.min.css')}}
    {{HTML::style('css/animate.min.css')}}
    {{HTML::style('css/video-js.css')}}
    {{HTML::style('css/idangerous.swiper.css')}}
    {{HTML::style('css/hover.css')}}
    {{HTML::style('css/main.css')}}
    {{HTML::style('css/product.css')}}


    <!--[if lt IE 9]>
    {{HTML::script('js/html5shiv.js')}}
    {{HTML::script('js/respond.min.js')}}
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset("images/ico/favicon.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset("images/ico/apple-touch-icon-144-precomposed.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset("images/ico/apple-touch-icon-114-precomposed.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset("images/ico/apple-touch-icon-72-precomposed.png")}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset("images/ico/apple-touch-icon-57-precomposed.png")}}">
</head><!--/head-->

<body id="{{$pageName}}">


    @if($pageName == 'home-page')
     <!-- Preloader -->
   <div id="loader">
        <div class="loader-screen"></div>
        <div class="outer-circle fa-spin"></div>
        <div class="inner-circle"></div>
        <div class="loader-text">loading...</div>
   </div>
   @endif
<div id="main-container">