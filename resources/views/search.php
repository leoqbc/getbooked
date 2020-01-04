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
    <section class="header-master">
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
        <!-- =====================  FIM do SLIDER =============================== -->

        <!-- ================    Buscador   ========================== -->
        <section class="search-sec1 d-flex justify-content-center align-items-center">
            <div class="container">
                <form action="/search" method="GET" novalidate="novalidate" autocomplete="off">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <section class="autocomplete-dropbase">
                                        <input type="text" id="uf_data" autocomplete="off" name="estado"
                                            class="form-control search-slt" value="São Paulo"
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
                                    <input type="text" id="checkin_checkout" name="checkin_checkout"
                                        class="form-control search-slt" placeholder="Data ex: 30 de março de 2019">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt" name="size" id="exampleFormControlSelect1">
                                        <option value="1">Individual (1)</option>
                                        <option value="2">Casal (2)</option>
                                        <option value="3+">Família (3+)</option>
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
    </section>
    <!-- ================    Fim do buscador   ========================== -->

    <!-- ================    Area dos Hoteis   ========================== -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="h4 mt-4" id="content">Lista de Hoteis</h4>
            </div>
        </div>
        <div class="row mt-4">
            
            <!-- ========================= Colocar aqui as cards de hotel =====================================  -->

            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <a href="/rooms/3">
                        <img src="https://via.placeholder.com/250x150?text=Hotel+Name" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Teste1</h5>
                            <p class="card-text">
                                Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis.
                                Delegadis
                                gente finis, bibendum egestas augue arcu ut est. Interagi no mé, cursus quis, vehicula
                                ac
                                nisi. Paisis, filhis, espiritis santis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <a href="/rooms/4">
                        <img src="https://via.placeholder.com/250x150?text=Hotel+Name" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Teste1</h5>
                            <p class="card-text">
                                Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis.
                                Delegadis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <a href="/rooms/5">
                        <img src="https://via.placeholder.com/250x150?text=Hotel+Name" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Teste1</h5>
                            <p class="card-text">
                                Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis.
                                Delegadis.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            
            <!-- ================================== Fim dos cards =========================================  -->
        </div>
    </div>

    <!-- ================    Fim da area de hoteis   ========================== -->

    <!-- ================    Rodapé   ========================== -->
    <section class="footer-element">
        <footer class="d-flex justify-content-center align-items-center">Copyright® GetBooked <?=date('Y')?></footer>
    </section>
    <!-- ================    Fim do rodapé   ========================== -->

    <script src="/js/autocomplete-component.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>