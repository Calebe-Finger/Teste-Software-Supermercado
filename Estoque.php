<?php
    class Produto
    {
        private $nome;
        private $valor;
        private $quantidade;
        private $tamanho;
        private $peso;

        public function __construct ($nome, $valor, $quantidade)
        {
            $this -> nome = $nome;
            $this -> valor = $valor;
            $this -> quantidade = $quantidade;
        }

        public function getNome()
        {
            return $this -> nome;
        }

        public function getValor()
        {
            return $this -> valor;
        }

        public function getQuantidade()
        {
            return $this -> quantidade;
        }

        public function getTamanho()
        {
            return $this -> tamanho;
        }

        public function getPeso()
        {
            return $this -> peso;
        }
    }
?>