<?php


    class Produto
    {
        //atributos
      private $nome;
      private $valor;
      private $quantidade; 

      // construtor da classe vazio - sem argumentos

     /*public function Produto(){

      }*/

      // construtor mágico 
      function __construct() {

      }
      
      public function getNome() {
          return $this->nome;
      }
      public function setNome($nome) { 
        $this->nome = $nome;
      }
      public function getValor() {
        return $this->valor;
     }
     public function setValor($valor) { 
      $this->valor = $valor;
     }
     public function getQuantidade() {
        return $this->quantidade;
     }
     public function setQuantidade($quantidade) { 
      $this->quantidade = $quantidade;
     }
     //calculo do Produto 
     public function calcularProduto(){
        return $this->valor * $this->quantidade;
     }

     //valor do desconto
     public function calcularValorDeDesconto()
     {
        return $this->calcularProduto() * 0.10;
     }
     
     //valor do juros
     public function calcularValorDeJuros()
     {
        return $this->calcularProduto() * 0.025;
     }

     //valor total da compra com desconto
     public function calcuclarTotalDaCompraComDesconto()
     {
        return ($this->calcularProduto() - $this->calcularValorDeDesconto());
     }
     
     //valor total da compra com juros
     public function calcuclarTotalDaCompraComJuros()
     {
        return ($this->calcularProduto() + $this->calcularValorDeJuros());
     }
     


      
    }//fim 