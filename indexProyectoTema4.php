<!DOCTYPE html>

<html lang="es">
    <head>

        <title>Elena de Antón</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Elena de Anton">
        <meta name="description" content="Mi pagina web">
        <meta name="robots" content="index,follow">
        
        
        <link rel="stylesheet" type="text/css" href="webroot/css/style.css">
        <link rel="icon" type="image/x-icon" href="webroot/images/favicon.ico">

    </head>

    <body>
        
        <header>
            <div class="cabecera">
                 <div class="title">Desarrollo de aplicaciones web</div>
                 <div class="indice"> 
                    <nav>
                        <ul>
                            <div class="principal">
                                <li><a href="index.html"><img src="">Inicio</a></li>
                            </div>
                            
                            <div class="opciones">
                                <li><a href=dwes.html>DWES</a></li>
                                <li><a href=#>DWEC</a></li>
                                <li><a href=#>DAW</a></li>
                                <li><a href=#>DIW</a></li>
                            </div>
                        </ul>
                    </nav>
                </div>  
            </div>
        </header>

        <main>
            <div>
                <table class="content"> 
            <tr>
                <th></th>
                <th>Ejecutar</th>
                <th>Mostrar</th>
            </tr>
            <tr>
                <td>01.Conexión a la base de datos con la cuenta usuario y tratamiento de errores.</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>PDO</td>
                <td><a href="codigoPHP/ejercicio01PDO.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio01PDO.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
            </tr>
            <tr>
                <td>MYSQLI</td>
                <td><a href="codigoPHP/ejercicio01mysqli.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio01mysqli.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
            </tr> 
            <tr>
                <td>2.Mostrar el contenido de la tabla Departamento y el número de registros</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>PDO</td>
                <td><a href="codigoPHP/ejercicio02PDO.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio02PDO.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
                
            </tr>
            <tr>
                <td>MYSQLI</td>
                <td><a href="codigoPHP/ejercicio02mysqli.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio02mysqli.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
            </tr>
            <tr>
                <td>03.Formulario para aÃ±adir un departamento a la tabla Departamento con validación de entrada y control de errores.</td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>PDO</td>
                <td><a href="codigoPHP/ejercicio03PDO.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio03PDO.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
                
            </tr>
            <tr>
                <td>MYSQLI</td>
                <td><a href="codigoPHP/ejercicio03mysqli.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio03mysqli.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
            </tr>
            <tr>
                <td>04.Formulario de búsqueda de departamentos por descripción (por una parte del campo DescDepartamento, si el usuario no pone nada deben aparecer todos los departamentos).</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>PDO</td>
                <td><a href="codigoPHP/ejercicio04PDO.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio04PDO.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
                
            </tr><!-- comment -->
            <tr>
                <td>MYSQLI</td>
                <td><a href="codigoPHP/ejercicio04mysqli.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio04mysqli.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
            </tr>
            <tr>
                <td>05.Pagina web que añade tres registros a nuestra tabla Departamento utilizando tres instrucciones
                    insert y una transacción, de tal forma que se añadan los tres registros o no se añada ninguno.</td>
                <td><a href="codigoPHP/ejercicio05mysqli.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio05mysqli.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
                
            </tr>
            <tr>
                <td>PDO</td>
                <td><a href="codigoPHP/ejercicio05PDO.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio05PDO.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
                
            </tr><!-- comment -->
            <tr>
                <td>MYSQLI</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>06.Pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos
                    utilizando una consulta preparada</td>
                <td><a href="codigoPHP/ejercicio06mysqli.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio06mysqli.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
                
            </tr>
            <tr>
                <td>PDO</td>
                <td><a href="codigoPHP/ejercicio06PDO.php"><img src="webroot/images/ejecutar.png" width="30" height="30"/></a></td>
                <td><a href="mostrarcodigo/muestraEjercicio06PDO.php"><img src="webroot/images/mostrar.png" width="30" height="30"/></a></td>
               
            </tr>
            <tr>
                <td>MYSQLI</td>
                <td></td>
                <td></td>
            </tr>
        </table>
            </div>
        </main>

        <footer>
            <div>
                <div class="name">Elena de Antón &copy; 2020/21 <em>I.E.S Los Sauces (Benavente)    </em>
                    
                <a href="https://github.com/elenaABSauces/proyectoTema4" target="_blank"><img src="webroot/images/Github.png" widht="20" height="20" /></a>
                
            </div>
        </footer>
    </body>
</html>