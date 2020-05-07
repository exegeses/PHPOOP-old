<?php

    #### configuración general de sistema  ####
    session_start();

    /*
     * css seccion activa
     * */

    function activo($seccion)
    {
        $archivo_actual = basename($_SERVER['PHP_SELF'], '.php');

        return ($seccion==$archivo_actual)?'active':'';
    }