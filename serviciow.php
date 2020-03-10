<?php
//necesario las funciones comentadas phpdocumentor
require_once("funciones.php"); 
//para generar el wsdl es necesario
require_once("WSDLDocument.php");
//genera el wsdl y se guarda en http://localhost/ExaRecuperacionServicios 
$wsdl = new WSDLDocument( "Funciones", "http://localhost/ExaRecuperacionServicios/servicio.php", "http://localhost/ExaRecuperacionServicios" ); 
echo $wsdl->saveXML();
