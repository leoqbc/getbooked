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
                <h4 class="h4 mt-4">Lista de quartos</h4>
                <h5 class="h5 mt-4">[Nome do Hotel aqui]</h5>
            </div>
        </div>
        <div class="row mt-4">
            
            <!-- ========================= Colocar aqui as lista de quartos por hotel =====================================  -->

            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Tipo</th>
                            <th>Situação</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>201</td>
                            <td>Casal (2)</td>
                            <td class="progress-bar bg-success">Livre</td>
                            <td>
                                <a href="" class="btn btn-primary btn-block">Reservar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>203</td>
                            <td>Família (3+)</td>
                            <td class="progress-bar bg-danger">Ocupado</td>
                            <td>
                                <a href="" class="btn btn-primary btn-block disabled">Reservar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ================================== Fim dos quartos =========================================  -->
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