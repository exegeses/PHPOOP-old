<?php

    $x = 5;

    ## foo bar foobar wikipedien, perris
    function foo()
    {
        return $x; // da error porque $x no está definida localmente
    }

    foo();