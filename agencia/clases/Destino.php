<?php

    class Destino
    {
        private $destID;
        private $destNombre;
        private $regID;
        private $destPrecio;
        private $destAsientos;
        private $destDisponibles;
        private $destActivo;

        public function listarDestinos()
        {
            $link = Conexion::conectar();
            $sql = 'SELECT destID, destNombre, 
                            d.regID, regNombre,
                            destPrecio, 
                            destAsientos, destDisponibles, 
                            destActivo 
                    FROM destinos d, regiones r
                    WHERE d.regID = r.regID';
            $stmt = $link->prepare($sql);

            $stmt->execute();
            $destinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $destinos;

        }

        public function verDestinoPorID()
        {
            $link = Conexion::conectar();
            $sql = 'SELECT destID, destNombre, 
                            d.regID, regNombre,
                            destPrecio, 
                            destAsientos, destDisponibles, 
                            destActivo 
                    FROM destinos d, regiones r
                    WHERE d.regID = r.regID
                      AND d.destID = :destID';
            $stmt = $link->prepare($sql);
            $destID = $_GET['destID'];
            $stmt->bindParam(':destID', $destID, PDO::PARAM_INT);
            $stmt->execute();
            $detalle = $stmt->fetch(PDO::FETCH_ASSOC);

            #### llamar a todos los setters para cargar datos en el objeto
            return $detalle;

        }

        public function agregarDestino()
        {

        }

        public function modificarDestino()
        {

        }

        public function eliminarDestino()
        {
            $link = Conexion::conectar();
            $sql = 'DELETE FROM destinos
                      WHERE destID = :destID';

        }

        ######################################
        ####  getters & setters ####

        /**
         * @return mixed
         */
        public function getDestID()
        {
            return $this->destID;
        }

        /**
         * @param mixed $destID
         */
        public function setDestID($destID)
        {
            $this->destID = $destID;
        }

        /**
         * @return mixed
         */
        public function getDestNombre()
        {
            return $this->destNombre;
        }

        /**
         * @param mixed $destNombre
         */
        public function setDestNombre($destNombre)
        {
            $this->destNombre = $destNombre;
        }

        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getDestPrecio()
        {
            return $this->destPrecio;
        }

        /**
         * @param mixed $destPrecio
         */
        public function setDestPrecio($destPrecio)
        {
            $this->destPrecio = $destPrecio;
        }

        /**
         * @return mixed
         */
        public function getDestAsientos()
        {
            return $this->destAsientos;
        }

        /**
         * @param mixed $destAsientos
         */
        public function setDestAsientos($destAsientos)
        {
            $this->destAsientos = $destAsientos;
        }

        /**
         * @return mixed
         */
        public function getDestDisponibles()
        {
            return $this->destDisponibles;
        }

        /**
         * @param mixed $destDisponibles
         */
        public function setDestDisponibles($destDisponible)
        {
            $this->destDisponibles = $destDisponible;
        }

        /**
         * @return mixed
         */
        public function getDestActivo()
        {
            return $this->destActivo;
        }

        /**
         * @param mixed $destActivo
         */
        public function setDestActivo($destActivo)
        {
            $this->destActivo = $destActivo;
        }


    }