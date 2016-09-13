@extends('...layouts.left-sidebar')
@section('title', 'kayaking')
<style>
 body{
        height:100%;
        background: url("/images/bg-image.png.jpg");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .myhead{
        background-image: url("/images/slider1.jpg");
    }

     hr {
            width:80%;


            height: 15px;
            background-color:black;
            color:black;
            }

</style>

@section('myHeader')
    <div class="myhead">
        <p>Northeast Florida Kayaking</p>
        <p>Local Recreation at its best!</p>
    </div>
    @stop


@section('sidebar')
    <li><a href="#">Kayak Launches</a></li>
    <li><a href="#">Kayaking Clubs</a></li>
    <li><a href="#">Kayaking Gear</a></li>
    <li><a href="#">Kayak Rentals & Tours</a></li>
    <br>
                                <a href="/"><img src="images/nefo-logo-lg.png"style="margin-top:20px;margin-left:10px;max-width:100%;display:block;height:auto;"></a>

    @stop


@section('content')
    <h2>Lorem Ipsum</h2>
       Lorem ipsum dolor sit amet, mutat choro eum an, dicit invenire no nec. Sea ludus clita et, in sea ignota efficiantur, cum esse tantas decore at. Et sea postulant persecuti ullamcorper,
       cibo omnes mollis et vix. Dissentiet theophrastus mel id, nisl scripta sea te, atqui eligendi referrentur et mea. Dicant iuvaret detracto duo id, malis veniam eu est, an vim sale probo placerat.
       Ea nonumy saperet accusam vis.



    <hr>

       <h2>Dolor Sit Amet</h2>

          Lorem ipsum dolor sit amet, mutat choro eum an, dicit invenire no nec. Sea ludus clita et, in sea ignota efficiantur, cum esse tantas decore at. Et sea postulant persecuti ullamcorper,
          cibo omnes mollis et vix. Dissentiet theophrastus mel id, nisl scripta sea te, atqui eligendi referrentur et mea. Dicant iuvaret detracto duo id, malis veniam eu est, an vim sale probo placerat.
          Ea nonumy saperet accusam vis.
    <hr>

        <h2>Mei vivendo apeirian</h2>
          Ius purto falli bonorum ea, veniam tempor fabellas his cu, mel ei quas postea labores. Mei vivendo apeirian an, mei eu dico admodum albucius. Ad probo soluta tractatos nam.
          His euismod ponderum euripidis cu, quo sumo regione ancillae no, cu est quas mediocrem repudiandae. No etiam option viderer vim, te sonet libris blandit eam.
          Ea nonumy saperet accusam vis. Ius purto falli bonorum ea, veniam tempor fabellas his cu, mel ei quas postea labores. Mei vivendo apeirian an, mei eu dico admodum albucius.
          Ad probo soluta tractatos nam. His euismod ponderum euripidis cu, quo sumo regione ancillae no, cu est quas mediocrem repudiandae. No etiam option viderer vim,
          te sonet libris blandit eam.
    @stop

@section('r-sidebar')
    <a href="/"><img src="images/necky.jpg"style="margin-top:50px;max-width:100%;display:block;height:auto;"></a><br>
    <a href="http://www.sealsskirts.com"target="_blank"><img src="images/seals-logo.png"style="margin-top:100px;margin-left:0px;max-width:90%;display:block;height:auto;"></a>
    @stop