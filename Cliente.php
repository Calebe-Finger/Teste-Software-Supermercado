<?php
    require_once 'Carrinho2.php';

    class Cliente
    {
        private $nome;
        private $cpf;
        private $endereco;
        private $telefone;
        
        public function getNome()
        {
            return $this -> nome;
        }

        public function getCPF()
        {
            return $this -> cpf;
        }

        public function getEndereco()
        {
            return $this -> endereco;
        }

        public function getTelefone()
        {
            return $this -> telefone;
        }

        public function comprou()
        {
            echo $clienteComprou -> getClienteComprou();
        }
    }
?>


