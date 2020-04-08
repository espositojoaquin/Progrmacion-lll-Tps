<?php
 require_once __DIR__ .'/vendor/autoload.php';
 require __DIR__ .'/Funciones.php';
 
 $caso = '';

  
     $caso = $_GET['caso'] ?? "0";  

     $dato = $_GET['dato'] ?? "0";

 $respuesta = new stdClass;

 $respuesta->respuesta = false;
 
 switch( $caso ){

     case 'cargarPaisesDelMundo':
        
       echo Funciones::MostrarPaisesDelMundo();
         break;
     case 'cargarPaisesPorContinente':
       
         if($dato!= "0" && $dato != "" )
         {  
             try
             {  
               
                echo Funciones::PaisesPorContinente($dato);
              
              
             }catch(Exception $e)
             {   
                 $respuesta->data= "Ingrese un contienente valido";
                
                 echo json_encode($respuesta);
            
             }
         }
         else
         {   
            $respuesta->data= "Ingrese el nombre del contienente";
                
            echo json_encode($respuesta);
            
         }
         break;

     case 'cargarPaisPorSubRegion':
        if($dato!= "0" && $dato != "" )
        {  
            try
            { 
              
                echo Funciones::PaisesPorSubRegion($dato);
             
            }catch(Exception $e)
            {   
               
                $respuesta->data= "Ingrese una Subregion valida";
                
                echo json_encode($respuesta);
              
            }
        }
        else
        {   
            $respuesta->data= "Ingrese el nombre de la Subregion";
                
             echo json_encode($respuesta);
            
        }
         break;
     case 'cargarPaisesPorCiudad':
        if($dato!= "0" && $dato != "" )
        { 
            try
            { 
                echo Funciones::PaisPorCapital($dato);
              
             
            }catch(Exception $e)
            {  
                $respuesta->data= "Ingrese una ciudad valida";
                
                echo json_encode($respuesta);
              
           
            }
        }
        else
        { 
            $respuesta->data= "Ingrese una ciudad";
                
            echo json_encode($respuesta);
          
        }
         break;
     case 'cargarPaisPorLenguaje':

        if($dato!= "0" && $dato != "" )
        { 

         try{

            echo Funciones::LenguagePaises($dato);
          }catch(Exception $e){
            
            $respuesta->data= "Ingrese un lenguaje valido";
                
            echo json_encode($respuesta);
             
          }
          
        }
        else
        {   
            $respuesta->data= "Ingrese un lenguaje";
                
            echo json_encode($respuesta);
           
        }
         break;
     default:

        $respuesta->data= 'Debe ingresar un caso valido';
                
        echo json_encode($respuesta);
        
        break;

 }

 

?>