<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <title>Elton Bueno | Contato </title>
    {{-- BOOTSTRAP --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- /BOOTSTRAP --}}
    {{-- Animações --}}

    {{-- /Animações --}}
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- /CSS --}}
</head>
<body>
    <div class="container-fluid">
    <header id="menu">
        <div class="row shadow "  >
            <nav class="navbar navbar-expand-xl p-3 bg-primary ">
                <div class="container-fluid" id="menu">
                  <a class="navbar-brand col-md-6" href="{{ route('index') }}"><img class="img-fluid ms-5" src="/images/logo.png" alt="" width="40px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar navbar-dark bg-primary ">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Sobre mim</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Habilidades</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Trabalhos Recentes</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{route('contato.create')}}">Contato</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </header>
    </div>



    {{-- Formulario --}}
    {{-- Container --}}

        <div class="container" id="contato">

            <div class="form-group ">
                <h1 class="text-center">Contato</h1>
                <form action="{{ route('contato.store')}}" method="post">
                @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-7 pt-2" >
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}" required>
                        </div>
                        <div class="col-md-7 pt-2" data-aos="fade-left">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" required>
                        </div>
                        <div class="col-md-7 pt-2" >
                            <label for="numero" class="form-label">Numero:</label>
                            <input type="text" name="numero" id="numero" class="form-control"  value="{{old('telefone')}}" required>
                        </div>
                        <div class="col-md-7 pt-2" >
                            <label for="mensagem" class="form-label">Mensagem:</label>
                            <textarea name="mensagem" id="mensagem" cols="30" rows="3" class="form-control"  required>{{old('mensagem')}}</textarea>

                            <input type="submit" value="Cadastrar" class="btn btn-success mt-2">
                        </div>

                    </div>
                </form>
            </div>
        </div>

        {{-- /Container --}}
        {{-- /Formulario --}}

        <div>
            <a href="#menu" class="up"><i class="fa-regular fa-circle-up fa-3x"></i></a>
    </div>

    {{-- /Conteudo --}}
    {{-- rodepe --}}
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href=""> <img class="img-fluid mt-4" src="/images/logo.png" alt="" width="100px"> </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Menu</h5>
                    <ul>
                        <li><a href="{{ route('index') }}">Sobre mim</a></li>
                        <li><a href="{{ route('index') }}">Habilidades</a></li>
                        <li><a href="{{ route('index') }}">Trabalhos Recentes</a></li>
                        <li><a href="{{route('contato.create')}}">Contato</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="https://github.com/EltonBueno/" class="github"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/eltonbueno" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="mailto:elsbueno6@gmail.com" class="email"><i class="fa fa-envelope"></i></i></a>
                    </div>
                </div>


            </div>
        </div>
        <div class="footer-copyright">
            <p>© {{ date('Y')}} Copyright - Elton Bueno</p>
        </div>
    </footer>
    {{-- /rodepe --}}
    {{-- JavaScript --}}
    <!-- JavaScript Bundle with Popper -->
    <script src="/js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/007a8b9791.js" crossorigin="anonymous"></script>
    {{-- /JavaScript --}}
</body>
</html>

