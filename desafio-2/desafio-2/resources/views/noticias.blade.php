   <input type="hidden" id="total" value="{{$noticias->total_noticias}}"/>
   
     @foreach($noticias->noticias as $noticia) 

          <article class="box-noticia"><!--Notícia-->
              <a href="{{$noticia->url}}" target="_blank">
                  <figure>
                      <img src="{{$noticia->imagem}}" alt="" >
                  </figure>
                  <div class="texto-lista-noticias">
                      <span class="data-lista-noticia">{{$noticia->data_formatada}}</span>
                       <h1>{{$noticia->titulo}}</h1>  
                      <p>{!!substr(strip_tags($noticia->texto),0,300)!!}</p>
                      A Nova Previdência e o impacto nos Municípios foram os assuntos de editorial do O Estado de São P
                  </div>
              </a>
          </article><!--Fim Notícia-->
         @endforeach 