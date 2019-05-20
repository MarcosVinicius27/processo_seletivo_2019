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
          <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <div class="row">
                            <div class="col-6">
                                <h5>Lista dos usuários</h5>
                            </div>
                            <div class="col-6" style="text-align: right" >
                              <a class="btn btn-outline-primary" href="{{route('product.create')}}" > Adicionar</a>
                            </div>
                        </div>
                        <br>             
                            <tr>
                                <th scope="col">#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data Nascimento</th>               
                                <th id="center">Ações</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach($usuario as $usuarioo)
                                <tr>
                                    <td id="center">{{$usuarioo->id}}</td>
                                    <td title="Nome">{{$usuarioo->name}}</td>
                                    <td title="Descrição">{{$usuarioo->email}}</td> 
                                    <td title="dataNasc">{{$usuarioo->dataNascimento}}</td> 
                                    <td id="center">
                                            <a href="{{route('product.edit', $usuarioo->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="btn btn-success">Editar</i></a>

                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('product.destroy', $usuarioo->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button class="btn btn-danger" type="submit">
                                                    <a>Excluir</a>                                                    
                                                </button></form></td>
          
                                </tr>
                                @endforeach
                    </tbody>
                </table>
             </div>
             </div> 
         </div>
    </body>
 </html>
