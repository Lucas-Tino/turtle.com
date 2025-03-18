<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary-subtle">
    <div class="bg-success w-100">
        <nav class="navbar navbar-expand-lg bg-success container">
            <div class="container-fluid columns-2">
                <div class="col col-4">
                    <a class="navbar-brand text-white" href="{{route('site.index')}}">
                        <img src="{{ asset('storage/turtleicon.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-bottom">
                        Turtle.com
                    </a>
                </div>
                <div class="col">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.index')}}">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.especies')}}">Espécies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.loja')}}">Loja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.sobrenos')}}">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('site.contato')}}">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="col container bg-white">
        <div class="row">
            <h3 class="pt-3 ps-3 pb-2">Algumas das principais espécies de tartaruga:</h3>
        </div>

        <div class="row px-4 pb-4 d-flex justify-content-between">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/gigante.jpg') }}" class="card-img-top" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tartaruga-Gigante</h5>
                    <p class="card-text">
                        A maior espécie de tartaruga marinha, chegando aos 400 kg e dois metros de comprimento.
                    </p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/oliva.jpg') }}" class="card-img-top" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tartaruga-Oliva</h5>
                    <p class="card-text">
                        Menor espécie de tartaruga marinha do Brasil, com cerca de 72cm de comprimento de casco.
                    </p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/verde.jpg') }}" class="card-img-top" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tartaruga-Verde</h5>
                    <p class="card-text">
                        É carnívora na juventude, e muda a dieta para herbívora na fase adulta.
                    </p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/cabecuda.jpg') }}" class="card-img-top" height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tartaruga-Cabeçuda</h5>
                    <p class="card-text">Conseguem se alimentar de animais com carapaças duras devido à força de sua mandíbula.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>