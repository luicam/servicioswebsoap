<?php
require_once('funciones.php');
$uri="http://localhost/ExaRecuperacionServicios"; 
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('Funciones');
$server->handle();