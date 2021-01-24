<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>AKINITA</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
  <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i"
      rel="stylesheet"
    />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
 <style>
  .big-banner{
       background-image: url(https://www.agentmandataireprestige.fr/img/agent-mandataire-prestige-mer.jpg);
  }
  .left {float:left;width:120px}
  .right {float:left;width:120px}
  .inner{overflow: hidden;}
        .inner img{transition: all 1.5s ease;}
        .inner:hover img{ transform: scale(1.5);}
    body {
       
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 14px;
 }

        </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home2') }}" class="text-sm text-gray-700 underline">My profile</a>
                    <a class="ml-4 text-sm text-gray-700 underline" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

  <a class="navbar-brand logo" href="/">Akinita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div class="col-auto">
  <div class=" collapse navbar-collapse justify-content-end-menu" id="navbarNav">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/properties-accueil">Properties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/add">Add propertie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact us</a>
      </li>
    </ul>
  </div>
</div>
</div>
</nav>
<div class="jumbotron big-banner" style="height:500px; padding-top:150px;">
<div class="container">
      <div class="col-lg-9"></div>
  <div class="row col-lg-3">
        </div>
  <div class="row">
    <div class="col-lg-9"></div>
    <div class="col-lg-3">
      <div id=fr>
        <form  action="/search" method="GET">
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            </div>
            <input type="number" class="form-control" id="mn_area" name="mn_area" placeholder="Min area">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            </div>
            <input type="number" class="form-control" id="mx_area" name="mx_area" placeholder="Max area">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            </div>
            <input type="number" class="form-control" id="mn_price" name="mn_price" placeholder="Min price">
          </div>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            </div>
            <input type="number" class="form-control" id="mx_price" name="mx_price" placeholder="Max price">
          </div>
          
           <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            </div>
               <input type="submit" class="btn btn-primary " value="Search">
          </div>
      </form>
      </div>
    </div>
    <div class="col-lg-1"></div>
  </div>
</div>
</div>
  <main role="main">
  <section class=" ">
      <div class="container">
          <div class="row mb-2">
              <div class="col text-center">
                  @yield('title')
              </div>
          </div>
      </div>
  </section>
     @yield('content')

  </main>
  <footer class="page-footer bg-dark">
    <div >
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-12 text-center">
            <a href="#"><i class="fab fa-facebook-f mr-4"></i></a>
            <a href="#"><i class="fab fa-twitter  mr-4"></i></a>
            <a href="#"><i class="fab fa-google-plus-g  mr-4"></i></a>
            <a href="#"><i class="fab fa-linkedin-in  mr-4"></i></a>
            <a href="#"><i class="fab fa-instagram  mr-4"></i></a>

          </div>
        </div>
      </div>

    </div>
    <div class="container text-center text-md-left mt-5 ">
      <div class="row">
        <div class="col-md-5 mx-auto mb-4" id="About">
          <h6 class="text-uppercase font-weight-bold">About Us</h6>
          <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 2px">
          <p class="mt-2"> Akinita is a marketplace where sellers can sell property or cater to those wish to rent a house. We know that buying and selling property is not easy. So, this platform is made to ensure that verified listings attract genuine buyers and customers. Partner with Akinita, post property for sale or post rent ad for free and enjoy the benefits of partnering with us. We help you find joy and more. Akinita is the most preferred property website among buyers. When you join us, you get connected with only genuine buyers. Start today. </p>
        </div>
        <div class="col-md-3 mx-auto mb-4" id="contact">
          <h6 class="text-uppercase font-weight-bold">Contact us</h6>
          <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
          <ul class="list-unstyled">
            <li class="my-2"><i class="fas fa-home mr-3"></i>Victor Hugo street,115 Paris</li>
            <li class="my-2"><i class="fas fa-envelope mr-3"></i>akinita@gmail.com</li>
            <li class="my-2"><i class="fas fa-phone mr-3"></i>+69587456214</li>
            <li class="my-2"><i class="fas fa-print mr-3"></i>+45879687542</li>
          </ul>
        </div>
        <div class="col-md-4 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold ">Got a question?</h6>
                <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">

              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" />
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" />
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message"></textarea>
                </div>
                <button class="btn btn-block" type="submit">
                  Submit Question
                </button>
              </form>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">
      <p>&copy; Copyright
        <a href="#">akinitagroup.com</a></p>
    </div>
  </footer>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
