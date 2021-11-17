<?php
function __autoload( $class ){
    require __DIR__ . '/' . $class . '.php';
}
spl_autoload_register('__autoload');