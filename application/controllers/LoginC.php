<?php

class LoginC {
    
    
     private $email;
     private $senha;

    
     public function getEmail() {
         return $this->email;
     }

     public function getSenha() {
         return $this->senha;
     }

     public function setEmail($_email) {
         $this->email = $_email;
     }

     public function setSenha($_senha) {
         $this->senha = $_senha;
     }


}

