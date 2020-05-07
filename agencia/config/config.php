<?php

    #### configuración general de sistema  ####
    session_start();


    ################################
    ######## autoloader
    ################################
    function autoCarga($nClase){
        require_once 'clases/'.$nClase.'.php';
    }
    spl_autoload_register('autoCarga');

/*
 * css seccion activa
 * */

    function activo($seccion)
    {
        $archivo_actual = basename($_SERVER['PHP_SELF'], '.php');

        return ($seccion==$archivo_actual)?'active':'';
    }