<?php
    class User {
        protected $userID;
        protected $firstName;
        protected $lastName;
        private $userName;
        private $email;
        private $password;

        public function __construct($_userName, $_email, $_password)
        {
            $this->userName =  $this->setUserName($_userName);
            $this->email = $this->setEmail($_email);
            $this->password = $this->setPassword($_password);

        }
         //Funzione che controlla il valore userName
        public function setUserName($_userName){
          if(strlen($_userName) < 4 ){
              throw new Exception("The username must contain at least 4 characters");
          } else{
              return $_userName;
          }
        }
        //Funzione che controlla il valore email
        public function setEmail($_email){
            if(!strpos($_email, "@") && !strpos($_email, ".")){
                throw new Exception("The email must contain at least one at and one dot");
            }else{
                return $_email;
            }
        }
        //Funzione che controlla il valore password
        public function setPassword($_password){
            return $_password;
        }
        
        /***** NATURALMENTE TUTTI QUESTI VALORI DOVREBBERO ESSERE $_POST[] POSTATI ALL'INTERNO DI UN DB E CONTROLLARE CHE EMAIL E USERNAME SIANO UNIQUE*****/
    }
?>