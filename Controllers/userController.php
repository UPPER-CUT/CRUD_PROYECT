<?php

class userController
{
    public function  __construct()
    {
        echo "Soy un usuario".PHP_EOL;
    }

    public function saludo(){

        echo PHP_EOL."Saludo desde la clase ".__CLASS__.PHP_EOL;
    }
}
