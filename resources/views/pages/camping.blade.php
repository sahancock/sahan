@extends('...layouts.left-sidebar')
@section('title', 'Camping')

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
            background-image: url("/images/camp.jpg");

        }

     hr {
        width:80%;


        height: 15px;
        background-color:black;
        color:black;
        }

</style>

@section('myHeader')
<div class="myHead">
    <p2>Northeast Florida Camping</p2><br>
    <p2>Local Recreation at its best!</p2>
    </div>
    @stop


@section('sidebar')
    <li><a href="#">Campgrounds</a></li>
    <li><a href="#">Back Country</a></li>
    <li><a href="#">Camping Gear</a></li>
    <a href="/"><img src="images/nefo-logo-lg.png"style="margin-top:20px;margin-left:10px;max-width:100%;display:block;height:auto;"></a>
    @stop


@section('content')
<h2>Lorem Ipsum</h2>
   Lorem ipsum dolor sit amet, mutat choro eum an, dicit invenire no nec. Sea ludus clita et, in sea ignota efficiantur, cum esse tantas decore at. Et sea postulant persecuti ullamcorper,
   cibo omnes mollis et vix. Dissentiet theophrastus mel id, nisl scripta sea te, atqui eligendi referrentur et mea. Dicant iuvaret detracto duo id, malis veniam eu est, an vim sale probo placerat.
   Ea nonumy saperet accusam vis.

   Ius purto falli bonorum ea, veniam tempor fabellas his cu, mel ei quas postea labores. Mei vivendo apeirian an, mei eu dico admodum albucius. Ad probo soluta tractatos nam.
   His euismod ponderum euripidis cu, quo sumo regione ancillae no, cu est quas mediocrem repudiandae. No etiam option viderer vim, te sonet libris blandit eam.

<hr>

   <h2>Dolor Sit Amet</h2>

        Lorem ipsum dolor sit amet, mutat choro eum an, dicit invenire no nec. Sea ludus clita et, in sea ignota efficiantur, cum esse tantas decore at. Et sea postulant persecuti ullamcorper,
        cibo omnes mollis et vix. Dissentiet theophrastus mel id, nisl scripta sea te, atqui eligendi referrentur et mea. Dicant iuvaret detracto duo id, malis veniam eu est, an vim sale probo placerat.
        Ea nonumy saperet accusam vis.

        Ius purto falli bonorum ea, veniam tempor fabellas his cu, mel ei quas postea labores. Mei vivendo apeirian an, mei eu dico admodum albucius. Ad probo soluta tractatos nam.
        His euismod ponderum euripidis cu, quo sumo regione ancillae no, cu est quas mediocrem repudiandae. No etiam option viderer vim, te sonet libris blandit eam.

      <hr>

   <h2>Libris animal eos an</h2>
        Ea mei partiendo democritum constituam, tale consectetuer cum ne, ei qui summo causae euismod. Has in dolorem propriae maluisset. No pro lorem iudico regione, latine consulatu an nam,
        dolor partiendo signiferumque ea nec. Tantas altera nec cu

      <hr>

         <h2>Dolor Sit Amet</h2>
            Lorem ipsum dolor sit amet, mutat choro eum an, dicit invenire no nec. Sea ludus clita et, in sea ignota efficiantur, cum esse tantas decore at. Et sea postulant persecuti ullamcorper,
            cibo omnes mollis et vix. Dissentiet theophrastus mel id, nisl scripta sea te, atqui eligendi referrentur et mea. Dicant iuvaret detracto duo id, malis veniam eu est, an vim sale probo placerat.
            Ea nonumy saperet accusam vis.

            Ius purto falli bonorum ea, veniam tempor fabellas his cu, mel ei quas postea labores. Mei vivendo apeirian an, mei eu dico admodum albucius. Ad probo soluta tractatos nam.
            His euismod ponderum euripidis cu, quo sumo regione ancillae no, cu est quas mediocrem repudiandae. No etiam option viderer vim, te sonet libris blandit eam.

            <hr>

            <h2>Libris animal eos an</h2>
            Ea mei partiendo democritum constituam, tale consectetuer cum ne, ei qui summo causae euismod. Has in dolorem propriae maluisset. No pro lorem iudico regione, latine consulatu an nam,
            dolor partiendo signiferumque ea nec. Tantas altera nec cu
   @stop
 @section('r-sidebar')
        <a href="http://www.enonation.com"target="_blank"><img src="images/eno-logo.jpg"style="margin-top:70px;max-width:100%;display:block;height:auto;margin-left:auto;margin-right:auto;"></a>
        <a href="http://www.jetboil.com"target="_blank"><img src="images/jetboil-logo.jpg"style="margin-top:110px;max-width:80%;display:block;height:auto;margin-left:auto;margin-right:auto;"></a>

    @stop