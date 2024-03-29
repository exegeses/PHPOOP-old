<?php

    class Conexion
    {
        const USUARIO = 'root';
        const CLAVE = 'root';
        private function __construct()
        {}
        static function conectar()
        {

            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            $link = new PDO(
                'mysql:host=localhost;dbname=agencia',
                self::USUARIO,
                self::CLAVE,
                $opciones
            );
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $link;
        }
    }
