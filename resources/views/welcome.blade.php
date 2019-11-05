<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Get Booked - Aplicativo de busca de hospedagens</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- ================    Cabeçalho do slider   ========================== -->
    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <section class="company-name flex-center">
                <h1 class="title-item text-center">GetBooked®</h1>
            </section>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://pbs.twimg.com/media/EGHYvttU4AAYKb7?format=jpg&name=large" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://pbs.twimg.com/media/EGHYvtkUcAAuc8T?format=jpg&name=large" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://pbs.twimg.com/media/EGHYvtjU0AAO8w1?format=jpg&name=large" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- =====================  FIM do SLIDER =============================== -->

    <!-- ================    Buscador   ========================== -->
    <section class="search-sec">
        <div class="container">
            <form action="/search" method="GET" novalidate="novalidate" autocomplete="off">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <section class="autocomplete-dropbase">
                                    <input type="text" id="uf_data" autocomplete="off" name="estado" class="form-control search-slt"
                                        placeholder="Cidade ex: São Paulo">
                                    <nav class="autocomplete-links">
                                        <div class="autocomplete-item">
                                            São Paulo
                                        </div>
                                        <div class="autocomplete-item">
                                            Rio de Janeiro
                                        </div>
                                        <div class="autocomplete-item">
                                            Minas Gerais
                                        </div>
                                    </nav>
                                </section>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" id="checkin_checkout" name="checkin_checkout" class="form-control search-slt"
                                    placeholder="Data ex: 30 de março de 2019">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <select class="form-control search-slt" name="size" id="exampleFormControlSelect1">
                                    <option value="1">Individual (1)</option>
                                    <option value="2">Casal (2)</option>
                                    <option value="2+">Família (2+)</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="submit" class="btn btn-danger wrn-btn">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- ================    Fim do buscador   ========================== -->

    <!-- ================    Area das cidades (ANUNCIO)   ========================== -->
    <section id="city-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="picture-ads">
                        <h2 class="picture-title">Ribeirão Preto</h2>
                        <img class="img-fluid rounded" src="/imgs/ribeirao_preto.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="picture-ads">
                        <h2 class="picture-title">São Paulo</h2>
                        <img class="img-fluid rounded" src="/imgs/sao_paulo.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="picture-ads">
                        <h2 class="picture-title">Campinas</h2>
                        <img class="img-fluid rounded" src="/imgs/campinas.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================    Fim da area das cidades   ========================== -->

    <!-- ================    Rodapé   ========================== -->
    <section class="footer-element">
        <footer class="d-flex justify-content-center align-items-center">Copyright® GetBooked <?=date('Y')?></footer>
    </section>
    <!-- ================    Fim do rodapé   ========================== -->

    <script src="/js/autocomplete-component.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>