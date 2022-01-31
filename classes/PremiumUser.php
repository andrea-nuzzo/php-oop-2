<?php
    class PremiumUser extends User {
        private $totalPurchases;
        private $discount;

        public function __construct($_userName, $_email, $_password, $_totalPurchases=NULL)
        {
            parent:: __construct($_userName, $_email, $_password);
            $this->totalPurchases = $_totalPurchases;

            //E' CORRETTO RICHIAMARE QUESTA FUNZIONE QUI ???
            $this->discount = $this->setDiscount($_totalPurchases);

        }

        // Funzione per calcolare lo sconto a seconda del totale degli acquisti dell'utente
        public function setDiscount($totalPurchases){
            if($totalPurchases >= 100){
                return $this->discount = 40;
            } else if($totalPurchases >= 50){
                return $this->discount = 20;
            }else{
                return $this->discount = 0;
            }
        }




    }
?>