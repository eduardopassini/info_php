<?php

class PessoaFisica {
    public $cpf;
    public $nome;
    public $idade;
    public $data_nascimento;
    public $mae;
    public $pai;
    public $estado_civil;
    public $altura;
    public $peso;
    public $sexo;
    public $cor;
    public $celular;
    public $email;

    public function setCPF($cpf) {
        $this->setCPF = $cpf;
    }

    public function __toString() {
        return $this->$cpf;
    }
}
