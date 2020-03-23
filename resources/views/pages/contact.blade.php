@extends('...layouts.left-sidebar')
@section('title', 'Contact Us')

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
    <p>Northeast Florida Contact Information</p>
    <p>Local Recreation at its best!</p>
    @stop


@section('sidebar')
    <li><a href="#">Northeast Florida Outdoors</a></li>
    <li><a href="#">Member Login</a></li>
    @stop


@section('content')
    Testing my Contacts page
    @stop
