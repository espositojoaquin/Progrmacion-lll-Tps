<?php
 require_once __DIR__ .'/vendor/autoload.php';
 require __DIR__ .'/Funciones.php';
 
 $caso = '';

  if( isset($_GET['caso']) )
     $caso = $_GET['caso'];  
  if( isset($_GET['dato']) )
     $dato = $_GET['dato'];

 switch( $caso ){
     case 'cargarPaisesDelMundo':
       echo Funciones::MostrarPaisesDelMundo();
         break;
     case 'cargarPaisesPorContinente':
         if(isset($_GET['dato']) && $dato != "" )
         {  
             try
             { 
                echo Funciones::PaisesPorContinente($dato);
               
              
             }catch(Exception $e)
             {
                echo "Ingrese un contienente valido";
            
             }
         }
         else
         {
             echo "Ingrese el nombre del contienente";
         }
         break;

     case 'cargarPaisPorSubRegion':
        if(isset($_GET['dato']) && $dato != "" )
        {  
            try
            { 
              
                echo Funciones::PaisesPorSubRegion($dato);
             
            }catch(Exception $e)
            {
               echo "Ingrese una Subregion valida";
           
            }
        }
        else
        {
            echo "Ingrese el nombre de la Subregion";
        }
         break;
     case 'cargarPaisesPorCiudad':
        if(isset($_GET['dato']) && $dato != "" )
        { 
            try
            { 
                echo Funciones::PaisPorCapital($dato);
              
             
            }catch(Exception $e)
            {
               echo "Ingrese una ciudad valida";
           
            }
        }
        else
        {
            echo "Ingrese una ciudad";
        }
         break;
     case 'cargarPaisPorLenguaje':

        if(isset($_GET['dato']) && $dato != "" )
        { 

         try{

            echo Funciones::LenguagePaises($dato);
          }catch(Exception $e){
              echo "Ingrese un lenguaje valido";
          }
          
        }
        else
        {
            echo "Ingrese un lenguaje";
        }
         break;
     default:
      
         echo 'Debe ingresar un caso valido';
        break;

 }

 

?>