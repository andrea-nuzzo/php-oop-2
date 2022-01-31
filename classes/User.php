<?php
     require_once __DIR__ . "/CreditCard.php";

    class User {
        protected $userID;
        protected $firstName;
        protected $lastName;
        private $email;
        private $password;
        public $creditCard = [];

        public function __construct($_userID, $_firstName, $_lastName, $_email, $_password)
        {   
            $this->userID = $_userID;
            $this->firstName =  $this->setfirstName($_firstName);
            $this->lastName = $_lastName;
            $this->email = $this->setEmail($_email);
            $this->password = $this->setPassword($_password);
        }
         //Funzione che controlla il valore firstName
        public function setfirstName($_firstName){
          if(strlen($_firstName) < 4 ){
              throw new Exception("The firstname must contain at least 4 characters");
          } else{
              return $_firstName;
          }
        }
        //Funzione che controlla il valore email
        public function setEmail($_email){
            if(!strpos($_email, "@") or !strpos($_email, ".")){
                throw new Exception("The email must contain at least one at and one dot");
            }else{
                return $_email;
            }
        }
        //Funzione che controlla il valore password
        public function setPassword($_password){
            return $_password;
        }

        public function newCreditCard($_numerCC, $expiryDate,$_cvv){
            $this->creditCard[] = new CreditCard( $this-> userID, $this->firstName, $this->lastName, $_numerCC, $expiryDate, $_cvv);
        }

    }    
?>