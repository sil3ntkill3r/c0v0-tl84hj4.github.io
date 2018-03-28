<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.js_css')
<title>Laravel</title>
<style media="screen">
.first {
margin-top:-5%;
padding-top:70px;
height:100vh;
min-height:400px;
background-size:cover;
background-size: 100%;
background-repeat: no-repeat;
}
#video-landing {
	height: 500px;
  width: 100%;
  position: relative;
  overflow-y: hidden;
  color: white;
}

#video-landing video {
  position: absolute;
  width: 100%;
  top: 50px
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -100;
}

#video-landing h1{
 	font-size: 3em;
}

</style>

</head>

<body>

@include('standards.navbar')



<section class="first" id="video-landing">
  <div class="container">
<video autoplay="autoplay" loop="loop" id="bgvid">
  <source src="vid/front_video.mp4" type="video/mp4" />
</video>
  </div>
</section>

<br><br>


<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="col s3"></div>
        <div class="input-field col s3">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Depart</label>
        </div>
        <div class="input-field col s3">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Destination</label>
        </div>
        <div class="col s3">
          <a class="btn-floating btn-large waves-effect waves-light deep-orange lighten-2"><i class="material-icons">location_on</i></a>

        </div>
      </div>


    </form>
  </div>


<br><br><br>

<section class="row">
<div class="col s12">
<div class="col s2"></div>
<div class="col s8">
<div class="col s8">
<img src="img/home_1.jpg" style="width:100%"alt="">
</div>
<div class="col s4"><br><br><br>
  <h5><b style="color:#ff8a65">Vous prenez le volant ?<br>Dites-nous où vous allez !</b></h5>
  Profitez d'un trajet à moindre frais.
</div>
</div>
<div class="col s2"></div>
</div>
</section>
<br><br><br><br>
<section class="row" style="background-color:#ff8a65">
  <div class="col s12">
  <div class="col s2"></div>
  <div class="col s8"><br><br>
    <h4 style="color:#fff">Allez où vous voulez. D'où vous voulez.</h4> <br>
    <div class="col s4">
      <h5><b>Pratique</b></h5><br>
      Trouvez rapidement un covoiturage à proximité parmi les millions de trajets proposés.
    </div>
    <div class="col s4">
      <h5><b>Facile</b></h5><br>
      Réservez le trajet parfait ! Il suffit d'entrer votre adresse exacte et de choisir avec qui vous voulez voyager.
    </div>
    <div class="col s4">
<h5><b>Direct</b></h5><br>
Vous arrivez à l'adresse exacte de votre destination sans perdre de temps sur le quai ou dans les files d'attente.<br><br><br><br>
    </div>


  </div>
  <div class="col s2"></div>
  </div>
</section>
<br><br><br><br>

<section class="row">
<div class="col s12">
<div class="col s2"></div>
<div class="col s8">

<div class="col s4"><br>
  <h5><b style="color:#ff8a65">Comment ça marche ?</b></h5>
  <b>Vous êtes passager ?</b><br>
  1. Recherchez votre trajet <br> 2. Réservez et payez par points <br> 3. le conducteur passe vous prendre.
<b>Vous êtes conducteur ?</b><br>
  1. Publiez votre annonce <br> 2. Vos passagers réservent et paient par points en ligne <br>3. passer prendre le passager <br> 4. Recevez votre argent
</div>
<div class="col s8">
<img src="img/home_2.jpg" style="width:90%"alt="">
</div>
</div>
<div class="col s2"></div>
</div>
</section>


<br><br><br><br><br>

<footer class="page-footer deep-orange lighten-2" style="left: 0;bottom: 0;width: 100%">
@include('standards.footer')
</footer>



    </body>
</html>
