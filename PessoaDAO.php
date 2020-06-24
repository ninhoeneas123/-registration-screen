<?php

class PessoaDAO{
   
/*Deixei so a função inserir pois o projeto so pede pra inserir */
   
    
    function __construct($p){
        $this->pessoa = $p;
    }
    
    function inserirPessoa(){	
        abrirConexao();
        global $mysqli;
        
        $sql = 'INSERT INTO usuarios(nome, cpf, sexo, reservista, imagem, email, senha) VALUES( "'.$this->pessoa->nome.'", "'.$this->pessoa->cpf.'", "'.$this->pessoa->sexo.'", "'.$this->pessoa->reservista.'", "'.$this->pessoa->imagem.'", "'.$this->pessoa->email.'", "'.$this->pessoa->senha.'")';
        $resultado = $mysqli->query( $sql );
        
        fecharConexao();
        return $resultado;
    }	
    
   
        
    }
    
?>