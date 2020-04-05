<?php
require __DIR__ .'/interfaz.php';
class Continente implements Inter
{   
    public $nombre; 
    public $paises = array();
  
    public function __construct($nom,$paises)
    {
        $this->nombre = $nom;
        $this->paises = $paises;
    }

    public function Mostrar()
    { 
        
        return json_encode($this->paises);
       
    }
}
?>