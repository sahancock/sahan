@extends('...layouts.left-sidebar')
@section('title', 'Disc Golf')

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
                background-image: url("/images/discgolf-head-bg.jpg");

            }
</style>

@section('myHeader')
    <div class="myHead">
        <p>Northeast Florida Disc Golf</p>
        <p>Local Recreation at its best!</p>
    </div>
@stop

@section('sidebar')
    <li><a href="#">Disc Golf Courses</a></li>
    <li><a href="#">Disc Golf Clubs</a></li>
    <li><a href="#">Disc Golf Gear</a></li>
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
@stop

@section('r-sidebar')
    <center><a href="http://www.innovadiscs.com"target="_blank"><img src="images/innova_logo.jpg"style="margin-top:80px;max-width:100%;display:block;height:auto;"></a><br></center>
    <center><a href="http://www.discraft.com"target="_blank"><img src="images/discraft-buzz.jpg"style="margin-top:50px;max-width:100%;display:block;height:auto;"></a><br></center>
    @stop