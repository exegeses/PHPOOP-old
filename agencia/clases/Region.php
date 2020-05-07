<?php

    class Region
    {
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);

            $stmt->execute();

            $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $regiones;
        }

        public function verRegionPorID()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = :regID";
            $stmt = $link->prepare($sql);

            $regID = $_GET['regID'];
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);

            if ($stmt->execute()){
                $this->setRegID($regID);
                $datosRegion = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->setRegNombre($datosRegion['regNombre']);
                return $this;
            }
            return false;
        }

        public function agregarRegion()
        {
            $link = Conexion::conectar();
            $sql = "INSERT INTO regiones 
                        VALUES ( DEFAULT, :regNombre )";
            $stmt = $link->prepare($sql);

            $regNombre = $_POST['regNombre'];
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setRegNombre($regNombre);
                $this->setRegID($link->lastInsertId());
                return $this;
            }
            return false;
        }

        public function modificarRegion()
        {
            
        }

        public function eliminarRegion()
        {
            
        }

    ######################################
    ####  getters & setters ####

        public function getRegID()
        {
            return $this->regID;
        }
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        public function getRegNombre()
        {
            return $this->regNombre;
        }
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }


    }