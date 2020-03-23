@extends('...layouts.left-sidebar')
@section('title', 'Hiking')

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

@section('myHeader')
    <p>Northeast Florida Hiking</p>
    <p>Local Recreation at its best!</p>
    @stop


@section('sidebar')
    <li><a href="#">Trail Heads</a></li>
    <li><a href="#">Hiking Clubs</a></li>
    @stop


@section('content')
    Testing my Hiking page
    @stop
