<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="assets/css/mdb.min.css"> -->
    <link rel="stylesheet" href="/css/front.css">


    <title>MyShop</title>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">My <span class="logo">SHOP</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Все категории
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul >
                <form class="form-inline my-2 my-lg-0 mr-auto" action="/search" method="get">
                    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ">
                    @if(Auth::check())
                        <li class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> | <a href="/logout">Выйти</a></li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Вход</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/register">Регистрация</a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- carusel -->
<section class="carusel">
    <div class="container">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/1.jpg" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/2.jpg" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/3.jpg" class="d-block w-100 " alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- carusel -->
            </div>
        </div>
    </div>
</section>

<!-- main-content -->
@yield('content')
<!-- main-content -->






<section class="page-footer">
    <div class="container">
        <div class="footer1">
            <div class="row m-auto">
                <div class="col-lg-2 ">
                    <a id="logo-footer" href="#">My <span class="logo">SHOP</span></a>
                </div>
                <div class="col-lg-7 ">
                    <a  href="#">Shop</a>
                    <a  href="#">Journal</a>
                    <a  href="#">About</a>
                    <a  href="#">Contacts</span></a>
                </div>
                <div class="col-lg-3 ">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>

            </div>

        </div>

        <div class="footer2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <p>© 2020. Quantum UI kit</p>
                        <p>Privacy Policy</p>
                        <p>Terms of Use</p>
                    </div>
                </div>

                <div class="col-lg-6 rigth">
                    <div class="row">
                        <p>Accepted payment methods</p>
                        <img src="/img/amazon_icon.png" alt="amazon">
                        <img src="/img/master_card_icon.png" alt="master_card">
                        <img src="/img/pay_pal_icon.png" alt="pay">
                        <img src="/img/visa_icon.png" alt="visa">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="/js/front.js"></script>
<script src="https://use.fontawesome.com/68f31e22e0.js"></script>
</body>
</html>
