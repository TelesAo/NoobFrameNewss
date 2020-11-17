<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Noticia;

class PortalController extends Controller {
    
    public function index() {
        $noticiaModel = New Noticia();
        $noticias = $noticiaModel-> getAll();

        $this -> view('portal',['noticias'=>$noticias]);


    }

    public function noticia($titulo) {
        
        $noticiaModel = New Noticia();
        $noticia = $noticiaModel-> getByTituloUrl($titulo);

        $this->view('noticia',['noticia'=>$noticia]);
        //die("Em construção...");
    }
}