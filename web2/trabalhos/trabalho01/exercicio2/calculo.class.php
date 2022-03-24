<?php

    class Calculo
    {
    private $valor1;
    private $valor2;


    public function getValor1()
    {
        return $this->valor1;
    }

    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;
        return $this;
    }

    public function getValor2()
    {
        return $this->valor2;
    }

    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;
        return $this;
    }

    public function cacularAdicao()
    {
        return $this->valor1 + $this->valor2;

    }

    public function cacularSubtracao()
    {
        return $this->valor1 - $this->valor2;

    }

    public function cacularMultiplicacao()
    {
        return $this->valor1 * $this->valor2;

    }

    public function cacularDivisao()
    {
        return $this->valor1 / $this->valor2;

    }
}
    ?>