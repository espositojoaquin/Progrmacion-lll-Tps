<?php
use NNV\RestCountries;
use FFI\Exception;
require_once __DIR__ .'/vendor/autoload.php';
require __DIR__ .'/paises.php';
require __DIR__ .'/continentes.php';
require __DIR__ .'/subregiones.php';


class  Funciones 
{ 
  //Muestra todos los paises del mundo
  public static function MostrarPaisesDelMundo()
  { 
    return json_encode(Funciones::TodosPaises());
    
  }
  
  // Retorno un array de objetos paises de todo el mundo 
  private static function TodosPaises()
  {
    $restCountries = new RestCountries;
    $info = json_encode($restCountries->all());
    return Funciones::retornoPaises($info);
   
  } 

  //Retorna los paises segun el contienente ingresado
  public static function PaisesPorContinente($cont)
  { 
        $restCountries = new RestCountries;
        $info = json_encode($restCountries->byRegion($cont));
        $continentes = new Continente($cont,Funciones::retornoPaises($info));
        return $continentes->Mostrar();     
  } 

  //Retorna los paises segun la subrregion ingresada
  public static function PaisesPorSubRegion($sub)
  {
    $restCountries = new RestCountries;
    $info = json_encode($restCountries->byRegionalBloc($sub));
    $subRegion = new Subregiones($sub,Funciones::retornoPaises($info));
    return $subRegion->Mostrar();
  } 

  // Retorno array con el objeto pais correspondiente a la capital indicada 
  public static function PaisPorCapital($capi)
  {
    $restCountries = new RestCountries;
    $info = json_encode($restCountries->byCapitalCity($capi));
    return json_encode(Funciones::retornoPaises($info));
  }

  // Retorno un array de objetos paises de todo el mundo segun el lenguaje seleccionado. 
  public static function LenguagePaises($leng)
  {
    $restCountries = new RestCountries;
    $info = json_encode($restCountries->byLanguage($leng));
    return json_encode(Funciones::retornoPaises($info));
  }
  
  //arma un array de objetos pais
  private static function retornoPaises($array)
  {
    $paisesObj=array();
    $objetos = json_decode($array); 
    foreach($objetos as $pa)
    {  
       $pai = new Paises($pa->name,$pa->capital,$pa->region,$pa->subregion,$pa->population,$pa->demonym,$pa->borders,$pa->nativeName,$pa->languages,$pa->regionalBlocs);
       array_push($paisesObj,$pai);
    }
    return $paisesObj;
  }



}
?>