<?php

class Subregiones extends Continente implements Inter
{
    public $nombre; 
  
    public function __construct($nom,$paises)
    {   
        $nomCont = $paises[0]->region;
        parent::__construct($nomCont,$paises);
        $this->nombre = $nom;
       
    }

    public function Mostrar()
    {
        return "Paises de $this->nombre: ".parent::Mostrar(); 
    }

    

}
?>