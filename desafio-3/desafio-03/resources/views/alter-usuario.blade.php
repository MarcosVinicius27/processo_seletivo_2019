<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comercial Laravel</title>       
    </head>
    <body>   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            <br>
            <h5 id="center"><b>Cadastro Usuários</b></h5>
            <br>
            <form method="post" action="{{route('product.update', $usuario->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                        <input name="name"  type="text" class="form-control" placeholder="Digite seu nome" value="{{$usuario->name}}" required>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                        <input name="email" type="email" class="form-control" placeholder="Digite seu Email" value="{{$usuario->email}}" required>
                </div>
                <div class="form-group">
                    <label for="senha">senha</label>
                        <input name="senha" type="text" class="form-control" placeholder="Digite sua Senha" value="{{$usuario->senha}}" required>
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data Nascimento</label>
                        <input name="dataNascimento" type="date" class="form-control" placeholder="Digite sua data de nascimento" value="{{$usuario->dataNascimento }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Editar</button>
        </form>
      </div>

        
    </body>
</html>
