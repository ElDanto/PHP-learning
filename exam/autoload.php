<?php
function custom_autoload( $class ){
    require __DIR__ . '/' . lcfirst($class) . '.php';
}
spl_autoload_register('custom_autoload');