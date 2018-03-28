<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.js_css')
<title>Laravel</title>
</head>
<style media="screen">
.first {
margin-top:-10%;
padding-top:70px;
min-height:400px;
background-size:cover;
background-size: 100%;
background-repeat: no-repeat
height: 100%;
width: 100%;

}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 500%;
}

</style>
<body>

@include('standards.navbar')

<section class="first">
<center><img src="img/header_us1.png" style="background-color: #ff7043;opacity: 0.8"></center>
<div class="centered"><b>Qui somme-nous ?</b></div>

</section>
<br><br>
<section class="row">
  <div class="col s12">
    <div class="col s3"></div>
    <div class="col s6">
<center>
  <div class="card"><br><br>
    <h4>CovoitLbahja ?</h4><br>
  <p>
Covoit Lbehja rassemble la plus large communauté de covoiturage<br>courte distance a Marrakech.
La startup Marocaine met en relation<br>des conducteurs voyageant avec des places libres et des passagers<br>souhaitant faire le même trajet.
Les coûts du trajet<br>sont partagés entre les covoitureurs.<br><br><br>
  </p>
</div>
</center>
</div>
<div class="col s3"></div>
</div>
</section>


               <section>
                 <div class="row">
   <div class="col s12">

    <center>


<div class="col s2"></div>
<div class="card col s8"><br><br>
  <h4>Notre equipe</h4><br>
<div class="col s3">
       <div class="card-content white-text">
         <img src="img/team/med.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
         <p style="color:#000">OUAALI Mohamad</p>
         <p style="color:#ffccbc">Developer</p>
       </div>
</div>
<div class="col s3">
       <div class="card-content white-text">
         <img src="img/team/lbg.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
<p style="color:#000">LABGHALI Mohamed Amine</p>
<p style="color:#ffccbc">Developer</p>
       </div>
</div>
<div class="col s3">
       <div class="card-content white-text">
         <img src="img/team/mou.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
<p style="color:#000">MOUSTALIK Tahar</p>
<p style="color:#ffccbc">Developer</p>
       </div>
</div>
<div class="col s3">
       <div class="card-content white-text">
         <img src="img/team/ibr.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
<p style="color:#000">IBRGHOUTN Hamza</p>
<p style="color:#ffccbc">Developer</p>
       </div>
</div><br><br><br>
</div>
<div class="col s2"></div>
</center>

     </div>
   </div>

             </section>






<footer class="page-footer deep-orange lighten-2" style="left: 0;bottom: 0;width: 100%">
@include('standards.footer')
</footer>



    </body>
</html>
