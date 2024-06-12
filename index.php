<?php
require_once '../ds-ecs4/modelo/producto.php';
require_once '../ds-ecs4/modelo/tipodeproducto.php';

$tp = new tipodeproducto;
$tp->Id = 2;
$tp->Descripcion = 'Galletitas';

$p = new producto;  
$p->Id = 1;
$p->Nombre = 'Merenguitas';
$p->Precio = 1000;
$p->Stock = 10;
$p->tipodeproducto = $tp;

$p->MostrarDatos();