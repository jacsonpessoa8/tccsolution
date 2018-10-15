<?php

require 'Persistence.php';
require 'Usuario.php';

$core = new Persistence();
$object = new Usuario();

print_r($core->persist($object));



?>