@section('navbar')
    <style>
        .cover-container {
            height: 100vh !important;
        }

    </style>
    <section class="cover-container  fundi1 cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
        <nav class="fixed-top justify-content-center" id="menu">
            <div class="container ">
                <header class="d-flex flex-wrap justify-content-center py-3 ">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        {{-- <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#victor" />

                    </svg> --}}
                        <img src="img/name.png" width="237px" />
                        {{-- <span class="fs-4">Victor Teodoro</span> --}}
                    </a>

                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#sobre" class="nav-link" aria-current="page">Sobre</a></li>
                        <li class="nav-item"><a href="#features" class="nav-link">Soluções</a></li>
                        <li class="nav-item"><a href="#" class="nav-link active">Contato</a></li>
                    </ul>
                </header>
            </div>
        </nav>



    @endsection
