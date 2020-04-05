<?php
class Paises
{ 
    public $nombre;
    public $capital;
    public $region;
    public $subRegion;
    public $poblacion;
    public $denominacion;
    public $borders = array();
    public $nombreNativo;
    public $lenguages = array();
    public $regionalBlocks = array();

    public function __construct($nom,$cap,$reg,$subReg,$pob,$deno,$bor,$nNativo,$leng,$rBlocks)
    {
        $this->nombre = $nom;
        $this->capital = $cap;
        $this->region = $reg;
        $this->subRegion = $subReg;
        $this->poblacion = $pob;
        $this->denominacion = $deno;
        $this->borders = $bor;
        $this->nombreNativo = $nNativo;
        $this->lenguages = $leng;
        $this->regionalBlocks = $rBlocks;
    }


}
?>