<style media="screen">
nav{
  height: 50px;
  line-height: 50px;
  background-color:#fff;
  color:#ff7043;
}
.font {
color: #ff7043;
}
.btn {
  flex: 1 1 auto;
  text-align: center;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  text-transform: none;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
 }
.btn:hover {
  background-position: right center; /* change the direction of the change here */
}
.btn-1 {
  background-image: linear-gradient(to right, #ff8a65  0%, #ffab91  51%, #ff8a65  100%);
}
</style>

        <div class="navbar-fixed">
            <nav>
            <div class="nav-wrapper "><img  class = "brand-logo"src={{ asset('img/logo.png') }} alt="" width = "90" height = "90" >
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color:#ff7043">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                      <li><a class="btn btn-1">Chercher un trajet</a></li>
                      <li><a class="font" href="sass.html">Inscription</a></li>
                      <li><a class="font" href="badges.html">Connexion</a></li>
                    </ul>
                </div>
            </nav>
        </div>
       <!-- Move the sidenav outside of .navbar-fixed -->
        <ul class="side-nav" id="mobile-demo">
          <li><a class="btn btn-1">Chercher un trajet</a></li>
          <li><a class="font" href="sass.html">Inscription</a></li>
          <li><a class="font" href="badges.html">Connexion</a></li>
        </ul>

<script>
    (function($){$(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('select').material_select();
    $('.modal-trigger').leanModal();
    });})(jQuery);
</script>
