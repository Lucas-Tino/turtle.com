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
            <div class="carousel">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/contato.jpg') }}" height="300" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="pt-3 ps-3">Entre em contato conosco!</h3>
            <p>
                Fale com a equipe da Turtle.com! Nos envie sugestões, opiniões, perguntas ou problemas encontrados no site.
            </p>
        </div>

        <div class="row justify-content-center">
            <form>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome...">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Sua mensagem:</label>
                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>