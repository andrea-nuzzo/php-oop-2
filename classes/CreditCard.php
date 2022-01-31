<?php
  class CreditCard {
      private $numberCC;
      private $expiryDate;
      private $cvv;

      public function __construct($_userID, $_firstname, $_lastName, $_numberCC, $_expiryDate, $_cvv)
      {
        $this->numberCC = $this->setNumberCC($_numberCC);
        $this->expiryDate = $_expiryDate;
        $this->cvv = $this->setCvv($_cvv);
      }

      public function setNumberCC($_numberCC){
        if(strlen($_numberCC) < 13 or strlen($_numberCC) > 16){
          throw new Exception("The credit card number must consist of a minimum of 13 characters to a maximum of 16 characters");
        } else{
          return $_numberCC;
        }
      }

      public function setCvv($_cvv){
        if (strlen($_cvv) != 3 ){
          throw new Exception("The cvv number must consist of a 3 characters");
        }else{
          return $_cvv;
        }
      }
  }
?>