@section('banner')
    <style>
        .afastar {
            padding-top: 150px;
        }

    </style>
    <div class="container ">
        <div class="row">

            <div class="col-md-6 d-flex flex-column justify-content-center ">

                <div class=" ">
                    <h1 class="text-purple">Soluções modernas para crescer seus negócios</h1>
                    <br>
                    <p>Made with <strong>Bootstrap <svg class="bi" width="24" height="24">
                                <use xlink:href="#heard" />
                            </svg></strong></p>
                    <a class="btn btn-primary btn-lg" href="#">Faça seu orçamento</a>
                </div>


            </div>
            <div class="col-lg-6 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">

                <img class="img-fluid d-block" src="/img/img1.png">

            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

        <symbol id="heard" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-suit-heart-fill"
            viewBox="0 0 16 16">
            <path
                d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
        </symbol>
    </svg>
    </section>

    <section class="afastar">

        <div class="container ">
            <div class="row justify-content-center">

                <div class="col-md-6 d-flex flex-column ">
                    <div class="vic-box">
                        <h6>QUEM EU SOU</h6>
                        <h2 class="text-purple">Victor Teodoro</h2>
                        <p>Me chamo Victor Teodoro, trabalho na área de designer instrucional e web designer a 8 anos.</p>
                        <p><strong>Tecnologias usadas</strong>.</p>

                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">
                                Básico
                            </div>
                            <div class="col">
                                Intermediário
                            </div>
                            <div class="col">
                                Avançado
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                HML
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                CSS
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                PHP
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-2">
                                LARAVEL
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column">
                    <img class="img-fluid d-block" src="/img/img1.png">

                </div>
            </div>
        </div>

    </section>
    <div class="d-flex justify-content-start">...</div>
    <div class="d-flex justify-content-end">...</div>
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-between">...</div>
    <div class="d-flex justify-content-around">...</div>
    <div class="d-flex justify-content-evenly">...</div>


@endsection
