<?php

require_once "LoginC.php";



class LoginCTeste extends PHPUnit_Framework_Testcase
{
    /** public function testLoginEmail()
    {
        $login = new LoginC();
        $login->setEmail("teste@teste.com.br");

        $this->assertEquals("teste@teste.com.br", $login->getEmail());
    }
**/
     public function testLoginSenha()
    {
        $login = new LoginC();
        $login->setSenha("12345");

        $this->assertEquals("12345", $login->getSenha());
    }

}

?>