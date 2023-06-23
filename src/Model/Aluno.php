<?php 

namespace App\Model;

class Aluno
{

    private $id;
    private $nome;
 

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
       return $this->id;
    }

    public function setNome($nome_recebido){
        $this->nome = $nome_recebido;
    }

    public function getNome(){
       return $this->nome;
    }

    public function __toString(): String
    {
        return $this->nome. " Id " .$this->id;
    }

}