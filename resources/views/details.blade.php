<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
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
 .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
  border-radius:1px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
    }
 .table-title {        
  padding-bottom: 15px;
     background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 1px 1px 0 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
    }
    .table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
 }
 .table-title .btn-group {
  float: right;
 }
 .table-title .btn {
  color: #fff;
  float: right;
  font-size: 13px;
  border: none;
  min-width: 50px;
  border-radius: 1px;
  border: none;
  outline: none !important;
  margin-left: 10px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.247);
 }
 .table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
 }
 .table-title .btn span {
  float: left;
  margin-top: 2px;
 }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
    }
 table.table tr th:first-child {
  width: 100px;
 }
 table.table tr th {
  width: 100px;
 }
    table.table-striped tbody tr:nth-of-type(odd) {
     background-color: #fcfcfc;
 }
 table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
 }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
        margin: 0 5px;
    }
 table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
 }
 table.table td a:hover {
  color: #2196F3;
 }
 table.table td button.edit {
        color: #FFC107;
    }
    table.table td button.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">

        <a class="navbar-brand logo" href="/">Akinita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="col-auto">
            <div class=" collapse navbar-collapse justify-content-end-menu" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
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
<div class="col-lg-1"></div>
@yield('content')
   <div class="row mb-4">   <div><h1></h1></div></div> 
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
            <div class="col-md-4 mx-auto mb-4" id="About">
                <h6 class="text-uppercase font-weight-bold">About Us</h6>
                <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 2px">
                <p class="mt-2">Akinita is a marketplace where sellers can sell property or cater to those wish to rent a house. We know that buying and selling property is not easy. So, this platform is made to ensure that verified listings attract genuine buyers and customers. Partner with Akinita, post property for sale or post rent ad for free and enjoy the benefits of partnering with us. We help you find joy and more. Akinita is the most preferred property website among buyers. When you join us, you get connected with only genuine buyers. Start today </p>
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
            <div class="col-md-5 mx-auto mb-4">
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
<script >
    @if (session('status'))
        //alert('{{ session('status') }}');
    swal({
        title: '{{ session('status') }}',
      //  text: "You clicked the button!",
        icon:'{{ session('statuscode') }}',
        button: "Done!",
    });
    @endif
</script>

@yield('scripts')
</body>
</html>
