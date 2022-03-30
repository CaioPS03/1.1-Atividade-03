<?php

class Fabricante {
    
    private $nome;
    private $endereço;
    private $documento;
    
    public function __construct($nome, $endereço, $documento) {
        $this->nome = $nome;
        $this->endereço = $endereço;
        $this->documento = $documento;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getEndereço() {
        return $this->endereço;
    }
    
    public function setEndereço($endereço) {
        $this->endereço = $endereço;
    }
    
    public function getDocumento() {
        return $this->documento;
    }
    
    public function setDocumento($documento) {
        $this->documento = $documento;
    }
}