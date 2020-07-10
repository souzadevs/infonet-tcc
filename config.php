<?php

    spl_autoload_register("loadClass");

    function loadClass($className)
    {
        if(file_exists(ROOT . $className . ".php")) {
            require_once(ROOT . $className . ".php");
        } else {
            throw new Exception("Arquivo " . ROOT . $className . ".php não existe!");
        }
    }

?>