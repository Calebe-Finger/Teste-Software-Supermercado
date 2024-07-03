<?php
    require_once 'Carrinho2.php';

    class Vendedor
    {
        private $nome;
        private $cargo;
        private $salario;
        
        public function getNome()
        {
            return $this -> nome;
        }

        public function getCargo()
        {
            return $this -> cargo;
        }

        public function getSalario()
        {
            return $this -> salario;
        }

        public function vendeu()
        {
            echo $vendedorVendeu -> getVendedorVendeu();
        }
    }
?>