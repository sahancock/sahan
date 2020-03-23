@extends('...layouts.default')
@section('title', 'Home')

<style>

    body{
        height:100%;

        background: url("/images/bg-image.png.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>


@section('content')

    @include('...includes.slider')



    <center><img src="images/nefo-logo-lg.png"class="img-responsive"style="margin-top:20px;margin-bottom:15px;"></center>

    <br>
    <center><h1>Northeast Florida Outdoors</h1></center>
    <p>Local Recreation at its best !!!</p>

@stop