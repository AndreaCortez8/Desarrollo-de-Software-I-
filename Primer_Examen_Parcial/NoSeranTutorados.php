<?php 
$host = 'localhost';
$db_user = 'root';
$db_pass = '';

$database = 'bdtutoria';
$con=mysqli_connect($host, $db_user, $db_pass,$database);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA USUARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-4">
                    <div class="row"> 
                        <div class="col-md-10">
						<h1>ALUMNOS SIN TUTORIA PARA EL SEMESTRE 2022-I</h1> 
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nro</th>
                                        <th>Codigo</th>
                                        <th>Nombres y Apellidos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php 

											$datos1 = mysqli_query($con,"SELECT * FROM Tutorados");
 											$datos2 = mysqli_query($con,"SELECT * FROM alumnos_matriculados2022i");
                                            $Resultado=array();
											//Se recorre la lista de matriculados en el semestre actual:
                                            while($fila2 = mysqli_fetch_array($datos2)){
                                                //agregar a una lista
                                                array_push($Resultado, $fila2["Codigo"]);
                                            }
											//Se recorre la lista de tutorados del semestre anterior:
											$n=0;
											while($fila1 = mysqli_fetch_array($datos1)){
												$estudianteT=$fila1["Codigo"];
												if (!in_array($estudianteT, $Resultado)) {
                                                    $n++;
                                                    //Se imprimen los datos de los alumnos que no harán tutoria este semestre
													?>
														<tr><td><?php  echo $n?></td>    
															<td><?php  echo $fila1['Codigo']?></td>
															<td><?php  echo $fila1['Nombres_Apellidos']?></td>                                     
														</tr>
													
                                        			<?php 
												}	
                                            }		
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
                <center>
                <button><a href="index.php?id=" class="btn btn-secondary"><b>Regresar</a></button></center>    
            </div>
    </body>
</html>
