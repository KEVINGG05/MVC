<?php

require_once 'carro.php';

$carroEspecial = new Carro("amarillo","Audi","A5",800,200, 5 ) ;

$carroEspecia2 = new Carro("amarillo","Ferrari","A5",800,200, 5 ) ;

$carroEspecia3 = new Carro("amarillo","Mercedes","A5",800,200, 5 ) ;

$carroEspecia4 = new Carro("amarillo","Ranault","A5",800,200, 5 ) ;
var_dump($carroEspecial);
var_dump($carroEspecia2);
var_dump($carroEspecia3);
var_dump($carroEspecia4);
