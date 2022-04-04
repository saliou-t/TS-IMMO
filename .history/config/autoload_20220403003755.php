<?php
error_reporting(-1);
ini_set("display_errors", 1);

    class Autoload{
        static function register(){
            spl_autoload_register(array(__CLASS__, "autoload"));
        }

        static function autoload($class){

            echo $_SERVER['arg'];
            $proprietaire = new ProprietaireController();

            if (file_exists("src/controller/".$class.".php")) {
                require_once "src/controller/".$class.".php";
                $proprietaire->add();

            }
            else if (file_exists("src/model/".$class.".php")) {                
                require_once "src/model/".$class.".php";
            }
            else if (file_exists(str_replace("\\", "/", $class. "php"))) {
                require_once str_replace("\\", "/", $class. "php");
            }
            else {
                // require('src/controllers/ProprietaireController.pph');
                echo '404';
            }
        }
    }  
    Autoload::register();

    // echo "autolad.....";
?>