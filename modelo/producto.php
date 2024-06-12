<?php 
class producto{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $tipodeproducto;

    public function MostrarDatos(){
        echo 'Id: '. $this->Id.'<br>';
        echo 'Nombre: '.$this-> Nombre.'<br>';
        echo 'Precio: '.$this-> Precio.'<br>';
        echo 'Stock: '.$this-> Stock.'<br>';
        echo 'Id Tipo de producto: '.$this->tipodeproducto->Id.'<br>';
        echo 'Descripcion: '.$this->tipodeproducto->Descripcion.'<br>';



    }
}