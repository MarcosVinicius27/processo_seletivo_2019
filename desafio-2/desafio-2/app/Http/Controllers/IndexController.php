<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   private $urlAPI = "http://www.marcha.cnm.org.br/webservice/noticias";
   
   public function index(Request $request){
  
       $noticias = file_get_contents($this->urlAPI."?page=1"); // Resgatando os dados API
       $noticias = json_decode($noticias); 
         return view("index", compact("noticias")); //Renderizando view e mandando as notícias 
    }
    public function noticias(Request $request){
      
       $page= $request->has('page') ? $request->page : 1 ;
 
            $this->urlAPI.= "?page=".$page;

       
        if($request->has('pesquisa')){
 
             $this->urlAPI.= "&pesquisa=".$request->pesquisa;
 
        }
 
       
        $noticias = file_get_contents($this->urlAPI); // Resgatando os dados API
        $noticias = json_decode($noticias); 
          return view("noticias", compact("noticias")); //Renderizando view e mandando as notícias 
     }
}
