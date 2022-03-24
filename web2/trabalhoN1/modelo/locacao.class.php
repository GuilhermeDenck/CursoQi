<?php

    class Locacao
    {
        private $nomeDoCliente;
        private $cpf;
        private $idade;
        private $modeloDeVeiculo;
        private $tipoDeVeiculo;
        private $tipoDeCombustivel;
        private $valorDaLocacao;
        private $dataDaLocacao;

        public function __construct()
        {
            
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }


        public function calcularDiarias()
        {
            return $this->dataDaLocacao * $this->valorDaLocacao;
        }

        public function escolherVeiculo()
        {
            
          switch ($tipoDeVeiculo) {
              case 'Passeio':
                  return $this->tipoDeVeiculo == 1;
                  break;
              case 'Executivo':
                    return $this->tipoDeVeiculo == 2;
                    break;
              
              default:
                  'Error';
                  break;
          }
            return $this->tipoDeVeiculo;
        }

        public function calcularCombustivel()
        {   
           if ($this->tipoDeCombustivel == "GNV") {
               return $this->calcularDiarias() + 50; //GNV
           }elseif ($this->tipoDeCombustivel == "Gasolina") {
                return $this->calcularDiarias() + 100; //Gasolina
           }
             
        }
        

        public function totalAPagar()
        {
            return $this->calcularDiarias() + $this->calcularCombustivel();
        }

        public function __toString()
        {
            return nl2br("Cliente: $this->nomeDoCliente
                          CPF: $this->cpf
                          Idade: $this->idade
                          Modelo Do Veículo: $this->modeloDeVeiculo
                          Tipo De Veículo: $this->tipoDeVeiculo
                          Valor Da Locação: $this->valorDaLocacao
                          Data Da Locação: $this->dataDaLocacao
                          Total De Diárias: {$this->calcularDiarias()}
                          Carro Selecionado: {$this->escolherVeiculo()}
                          Tarifa total com combustivel: {$this->calcularCombustivel()}
                          Valor Total A Pagar: {$this->totalAPagar()}");

        }
    }

?>