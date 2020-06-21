<?php

    class Autoloader{

        static function ToMain(){
            spl_autoload_register(array(__CLASS__,'autoload'));
        }

        static function autoload($class){
            require 'Classes/'.$class.'.php';
        }
    }