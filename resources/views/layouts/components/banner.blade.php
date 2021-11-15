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
                    <p>Made with <strong>Bootstrap <svg class="bi" width="24" height="24"><use xlink:href="#heard"/></svg></strong></p>
                    <a class="btn btn-primary btn-lg" href="#">Faça seu orçamento</a>
                </div>


            </div>
            <div class="col-lg-6 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">

                <img class="img-fluid d-block" src="/img/img1.png">

            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

        <symbol id= "heard" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
            <path
                d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
        </symbol>
    </svg>
    </section>


@endsection
