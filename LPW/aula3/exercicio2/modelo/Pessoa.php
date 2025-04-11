<?php 

class Pessoa {
    private $nome;
    private $sobrenome;
    private $idade;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome): self {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade): self {
        $this->idade = $idade;
        return $this;
    }
}
