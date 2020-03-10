<?php
	header('Content-Type: text/html; charset=UTF-8');
	class Funciones { 
		/**
		* 
		* @param string $a
		* @return string
		*/
		function precio_con_descuento($precio){
			$aux=0;
			if(($precio>200)&&($precio<1000)){
				$aux = $precio - ($precio*(0.10));
			}else{
				$aux = $precio - ($precio*(0.15));
			}
			return $aux;
		}

		/**
		* 
		* @param string $a
		* @param string $b
		* @return string[]
		*/
		function multiplo_de_5($a,$b){
			$array=[];
			for ($i=$a; $i<$b; $i++){
				if ($i%5==0){
					array_push($array,$i);
				}
			}
			return $array;
		}
	}
  ?>