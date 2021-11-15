@section('navbar')
    <style>
        .cover-container {
            height: 100vh !important;
        }

    </style>
    <section class="cover-container  fundi1 cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#victor" />
                    </svg>
                    <span class="fs-4">Victor Teodoro</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Inicial</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Web sites</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Moodle</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active">Contato</a></li>
                </ul>
            </header>
        </div>
    @endsection
