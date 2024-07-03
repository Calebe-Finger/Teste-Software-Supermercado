<?php
    require_once 'Carrinho2.php';
    require_once 'Produto2.php';

    class Venda
    {
        public function produtosVendidos()
        {
            $carrinho = new Carrinho();

            $carrinho -> adiciona(new Produto("Liquidificador", "250.00", "1"), new Vendedor("João", "Vendedor", "R$1000,00"));
            $carrinho -> adiciona(new Produto("Saco de Arroz", "20.00", "3"), new Vendedor("João", "Vendedor", "R$1000,00"));
            $carrinho -> adiciona(new Produto("Panela de Pressão", "90.00", "1"), new Vendedor("João", "Vendedor", "R$1000,00"));
            $carrinho -> adiciona(new Produto("Saco de Feijão", "10.00", "1"), new Vendedor("João", "Vendedor", "R$1000,00"));
        
            echo "Lista dos Produtos comprados: <br>";
            
            foreach ($carrinho -> getProdutos() as $produto)
            {
                echo "<br>Nome: " . $produto -> getNome();
                echo "<br>Valor: " . $produto -> getValor();
                echo "<br>Quantidade: " . $produto -> getQuantidade();
                echo "<br>";
            }
        }
    }

    $compra = new Venda();
    $compra -> produtosVendidos();
    
?>


