<?php
    require_once 'Produto2.php';
    require_once 'Vendedor.php';
    
    class Carrinho
    {
        private $produtos;
        private $vendedores;
        private $vendedorVendeu = "Não vendeu";
        private $clienteComprou = "Não comprou";

        public function __construct()
        {
            $this -> produtos = array();
            $this -> vendedores = array();
        }

        public function adiciona(Produto $produto, Vendedor $vendedor)
        {
            $this -> produtos[] = $produto;
            $this -> vendedores[] = $vendedor;
            $this -> vendedorVendeu = "Vendeu!";
            $this -> clienteComprou = "Comprou!";
        }

        public function getProdutos()
        {
            return $this -> produtos;
        }
    }
?>