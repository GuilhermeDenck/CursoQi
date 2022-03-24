<?php

    class Hotel 
    {

        private $diariaSemana;
        private $diariaFimSemana;                                                     



        
        public function __construct ()
        {
            $this->diariaSemana = 180;
            $this->diariaFimSemana = 210;
        }
        
        public function calcularDiaria($number, $childrenNumber, $totalDays)
        {
            //totalDays = 4
            //childrenNumber = 1

            $childrenAdditional = 0;
            $discount = 0;

            //childrenAdditional = 200

            switch ($number) {
                case 1:
                    $total = $totalDays * $this->weekendDaily;
                    break;

                case 2:
                    $total = $totalDays * $this->daily;
                    break;
            }

            //total = 720

            if ($childrenNumber >= 1) {
                $childrenAdditional = $totalDays * $childrenNumber * 50;
            }

            if ($totalDays > 3 && $childrenNumber == 0) {
                $discount = 0.08 * $total;
            }

            //discount = 57,6

            return $total + $childrenAdditional - $discount;
            //       720    +      200            -   57.6   = 862,4
        }
    }











?>