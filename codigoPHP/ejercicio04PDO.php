<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 04</title>
    </head>
    <body>
        <?php
        /**
         *   @author: Javier Nieto Lorenzo
         *   @since: 04/11/2020
         *   04.- Formulario de búsqueda de departamentos por descripción (por una parte del campo DescDepartamento, si el usuario no pone nada deben aparecer todos los departamentos).

        */ 
        
        require_once '../core/201020libreriaValidacion.php'; // incluyo la libreria de validacion para validar los campos de formulario
        require_once '../config/confDBPDO.php';
            define("OPCIONAL",0);// defino e inicializo la constante a 0 para los campos que son opcionales
            
            $entradaOK=true; // declaro la variable que determina si esta bien la entrada de los campos introducidos por el usuario
            
            $aErrores=[ //declaro e inicializo el array de errores
                'DescDepartamento' => null,
            ];
            
            $aRespuestas=[ // declaro e inicializo el array de las respuestas del usuario
                'DescDepartamento' => null,
            ];
            
            
           
            if(isset($_REQUEST["Buscar"])){ // compruebo que el usuario le ha dado a al boton de enviar y valido la entrada de todos los campos
                $aErrores['DescDepartamento']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDepartamento'], 255, 0, OPCIONAL);
                
                foreach ($aErrores as $campo => $error) { // recorro el array de errores
                    if($error != null){ // compruebo si hay algun mensaje de error en algun campo
                        $entradaOK=false; // le doy el valor false a $entradaOK
                        $_REQUEST[$campo]=""; // si hay algun campo que tenga mensaje de error pongo $_REQUEST a null
                    }
                }
            }else{ // si el usuario no le ha dado al boton de enviar
                $entradaOK=false; // le doy el valor false a $entradaOK
            }
            
            if($entradaOK){ // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
                $aRespuestas['DescDepartamento']=$_REQUEST['DescDepartamento']; 
                
                
                
                // TRATAMIENTO
                echo "<h2>Datos introducidos</h2>";
                echo "<p>DescDepartamento: ".$aRespuestas['DescDepartamento']."</p>";
                
                
                
                echo "<h2>Contenido tabla Departamentos DAW217DBDepartamentos</h2>";
                try { // Bloque de código que puede tener excepciones en el objeto PDO
                    $miDB = new PDO(DNS,USER,PASSWORD); // creo un objeto PDO con la conexion a la base de datos

                    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Establezco el atributo para la apariciopn de errores y le pongo el modo para que cuando haya un error se lance una excepcion
                    
                    /* Sin consulta preparada
                        $sql="SELECT * FROM Departamento WHERE DescDepartamento LIKE '%{$aRespuestas['DescDepartamento']}%'";
                        $resultadoConsulta = $miDB->query($sql);
                    */
                    
                    $sql = 'SELECT * FROM Departamento WHERE DescDepartamento LIKE "%":DescDepartamento"%"';
                    
                    $consulta = $miDB->prepare($sql); // preparo la consulta
                    
                    $parametros = [":DescDepartamento" => $aRespuestas['DescDepartamento'] ];
                    
                    $consulta->execute($parametros); // ejecuto la consulta con los paremtros del array de parametros
                    
                    if($consulta->rowCount()>0){ // si la consulta devuelve algun registro
        ?>
        <table>
            <tr>
                <th>CodDepartamento</th>
                <th>DescDepartamento</th>
                <th>FechaBaja</th>
                <th>VolumenNegocio</th>
            </tr>
            <?php 
                $oDepartamento = $consulta->fetchObject(); // Obtengo el primer registro de la consulta como un objeto
                while($oDepartamento) { // recorro los registros que devuelve la consulta de la consulta ?>
            <tr>
                <td><?php echo $oDepartamento->CodDepartamento; // obtengo el valor del codigo del departamento del registro actual ?></td>
                <td><?php echo $oDepartamento->DescDepartamento; // obtengo el valor de la descripcion del departamento del registro actual ?></td>
                <td><?php echo $oDepartamento->FechaBaja; // obtengo el valor de la fecha de baja del departamento del registro actual ?></td>
                <td><?php echo $oDepartamento->VolumenNegocio; // obtengo el valor de la fecha de baja del departamento del registro actual ?></td>
            </tr>
            <?php 
                $oDepartamento = $consulta->fetchObject(); // guardo el registro actual como un objeto y avanzo el puntero al siguiente registro de la consulta 
            }
            ?>
        </table>   
        
        <?php
                }else{// si la consulta no devuelve ningun registro
                    echo "<p>No hay ningun Departamento con esa descripcion</p>";
                }
                
                echo "<p style='color:green;'>BUSQUEDA REALIZADA CON EXITO</p>";
                
                }catch (PDOException $miExceptionPDO) { // Codigo que se ejecuta si hay alguna excepcion
                    echo "<p style='color:red;'>ERROR EN LA CONEXION</p>";
                    echo "<p style='color:red;'>Código de error: ".$miExceptionPDO->getCode()."</p>"; // Muestra el codigo del error
                    echo "<p style='color:red;'>Error: ".$miExceptionPDO->getMessage()."</p>"; // Muestra el mensaje de error
                    die(); // Finalizo el script
                }finally{ // codigo que se ejecuta haya o no errores
                    unset($miDB);// destruyo la variable 
                }
            }else{ // si hay algun campo de la entrada que este mal muestro el formulario hasta que introduzca bien los campos
        ?> 
        
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <fieldset>
                <legend>Buscar Departamento</legend>
                <div>
                    <label for="DescDepartamento">Descripcion del Departamento</label>
                    <input style="width:248px;" type="text" id="DescDepartamento" name="DescDepartamento" placeholder="Introduzca Descripcion del Departamento" value="<?php 
                        echo (isset($_REQUEST['DescDepartamento'])) ? $_REQUEST['DescDepartamento'] : null; // si el campo esta correcto mantengo su valor en el formulario
                    ?>">
                    <?php
                        echo ($aErrores['DescDepartamento']) ? "<span style='color:#FF0000'>".$aErrores['DescDepartamento']."</span>" : null;// si el campo es erroneo se muestra un mensaje de error
                    ?>
                </div>
            </fieldset>

            <input type="submit" value="Buscar Departamento" name="Buscar">
        </form>
        
        <?php
            }
        ?>
    </body>
</html>



