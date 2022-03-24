<?php

class TeleEntrega{
	
	private $nome;
	private $email;
	private $telefone;
	private $lanche;
	private $bebida;
	private $quantidadelanche;	
	private $quantidadebebida;
	private $formapagamento;
	private $teleentrega;

	public function __construct(){
		
	}
	
	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
	}
	
	public function calcularValorLanche(){
		
		if($this->lanche == 'Cachorro Quente'){
			return $this->quantidadelanche * 6.50;
		}else if($this->lanche == 'Prensado'){
			return $this->quantidadelanche * 7.00;
		}else if($this->lanche == 'Fritas'){
			return $this->quantidadelanche * 8.00;
		}else{
			return $this->quantidadelanche * 10.00;
		}
		
	}//fecha calcularValorLanche
	
	public function calcularValorBebida(){
		
		if($this->bebida == 'Refrigerante'){
			return $this->quantidadebebida * 3.50;
		}else if($this->bebida == 'H20'){
			return $this->quantidadebebida * 3.00;
		}else{
			return $this->quantidadebebida * 2.00;
		}
		
	}//fecha calcularValorBebida
	
	public function calcularTotal(){
		
		if($this->teleentrega == 'Sim'){
			return $this->calcularValorBebida() + $this->calcularValorLanche() + 3.00;
		}else{
			return $this->calcularValorBebida() + $this->calcularValorLanche();
		}		
		
	}//fecha calcularValorTotal
	
	public function pegarDataAtual(){
		return date("d-M-Y");
	}

	public function __toString(){
		return  '<Center>'.$this->pegarDataAtual().'</center><br/>'.
				'<br>Nome: '.$this->nome.' <br>'.
				'<br>Email: '.$this->email.' <br>'.
				'<br>Telefone: '.$this->telefone.' <br>'.
				'<br>Lanche: '.$this->lanche.' <br>'.
				'<br>Bebida: '.$this->bebida.' <br>'.
				'<br>Forma de pagamento: '.$this->formapagamento.' <br>'.
				'<br>Tele Entrega: '.$this->teleentrega.' <br>'.
				'<br>Quantidade(s) de bebida(s): '.$this->quantidadebebida.' <br>'.
				'<br>Quandidade(s) de lanche(s): '.$this->quantidadelanche.' <br>'.
				'<br>Total de Lanche: R$ '.$this->calcularValorLanche().' <br>'.
				'<br>Total de Bebida: R$ '.$this->calcularValorBebida().' <br>'.
				'<br>Valor final: R$ '.$this->calcularTotal().' <br>';
				
	}
}
?>