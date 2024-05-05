<?php

    function countSession() {
        $count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;
        $_SESSION['count'] = ++$count;
        return $count;
    }   

    function checkLoadedIniFile() {
        $iniPath =  php_ini_loaded_file(); 
        return $iniPath ? $iniPath : 'php.ini not loaded';
    }

    function startSession() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }