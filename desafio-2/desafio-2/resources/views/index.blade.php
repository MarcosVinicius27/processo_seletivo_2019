<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desafio - 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content=""/>
  <meta name="robots" content="index, follow" />
  


  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.png">


  <!-- CSS -->
  <link rel="stylesheet" href="/css/geral.css">

  <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
  <![endif]-->

</head>
<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


<section class="conteudo-internas">
  <div class="centraliza">
    <div class="conteudo-esquerda">
      <div class="lista"><!--Lista de Noticias-->

        <form  class="form-group row">
          <div class="col-12 busca">
            <input type="text" name="pesquisa"  class="form-control col-8" placeholder="Digite sua busca">
            <button class="btn btn-primary col-2"> Buscar </button>
          </div>
          
        </form>
         <div class="carregaNoticias">
            @include("noticias")
        </div>
            <hr>

            <ul class="pagination">                                    
              <li class="page-item" id="anterior">
                <a class="page-link" href="#" aria-label="next">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Anterior</span>
                </a>
              </li>
              <li>
                <span id="numeracao"></span>
              </li>
              <li class="page-item" id="proximo">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Próximo</span>
                </a>
              </li>
            </ul>
           
            
            <!--Fim Paginação-->
            
        </div><!--Fim Lista de Noticias-->

    </div> <!-- final conteudo-esquerda -->


</div> <!-- final centraliza -->

</section>
  <script src="/js/jquery-3.4.1.min.js"> </script>
  <script>
    var parametros = {
      pesquisa: '',
      page: 1,
      per_page: 15,
      total: '{{$noticias->total_noticias}}'
      
    } ;
    console.log(parametros);
      $('form').on('submit', function(event) {
      event.preventDefault();
      parametros.pesquisa = $('input[name=pesquisa]').val();
      carregaNoticias();

    });
    function paginar() {
    $('#numeracao').text('Página ' + (parametros.page) + ' de ' + Math.ceil(parametros.total / parametros.per_page));
}

$(function() {
    $('#proximo').click(function(event) {
        event.preventDefault();
        if (parametros.page < parametros.total /  parametros.per_page - 1) {
            parametros.page++;
            carregaNoticias()
        }
    });
    $('#anterior').click(function(event) {
         event.preventDefault();
        if (parametros.page > 0) {
            parametros.page--;
            
        }
    });
    paginar();
    
});

  function carregaNoticias(){


    $.ajax({
      type: "GET",
      url: "/noticias",
      data: parametros,
      dataType: "html",
      success: function (response) {
        $('.carregaNoticias').html(response);
       parametros.total =  $('.carregaNoticias').find("#total").val();
       paginar();
     
      
      }
    });
  
}
  </script>
  </body>
  
</html>