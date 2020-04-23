<?php

    class Foo
    {

        public function __construct()
        {
            echo 'método constructor <br>';
        }
        public function metodoPublico()
        {
            echo 'método público <br>';
        }
        private function metodoPrivado()
        {
            echo 'método privado <br>';
        }
        public function auxiliar()
        {
            echo 'método auxiliar <br>';
            $this->metodoPrivado();
        }
        static function metodoEstatico()
        {
            echo 'método estático <br>';
        }

        public function __destruct()
        {
            echo 'método destructor';
        }
    }

    #### en otro archivo se instancia
    #### y luego se invocan métodos

    $objFoo = new Foo;
    $objFoo->metodoPublico();
    //$objFoo->metodoPrivado(); ## no se puede porque es privado
    $objFoo->auxiliar(); ## invoca a un método privado

    unset($objFoo);

    echo '<hr>';

    Foo::metodoEstatico();

