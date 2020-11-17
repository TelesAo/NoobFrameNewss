<?php

namespace App\Models;
use Core\Database;

Class Noticia {

    private $table = 'noticia';

    public function getAll(){
        $db = DataBase ::getInstance();
        $dados = $db->getList($this->table,'*');
        return $db->getList($this->table,'*');
        
    }

    public function getByTituloUrl($tituloUrl){

        $db = DataBase :: getInstance();// interface com o banco
        $noticia = $db -> getList($this->table,'*',['titulo_url'=>"'".$tituloUrl."'"]);

        return $noticia[0];

    }

}




?>