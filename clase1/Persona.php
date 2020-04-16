<?php

    class Persona
    {
        ## atributos
        public $nombre;
        public $apellido;
        ## métodos
        public function verDatos()
        {
            $mensaje = 'Nombre: '.$this->nombre;
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->apellido;
            $mensaje .= '<br>';
            return $mensaje;
        }
    }