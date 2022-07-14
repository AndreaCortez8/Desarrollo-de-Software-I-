<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = '';

$database = 'bdtutoria';
$con=mysqli_connect($host, $db_user, $db_pass);
$mysqli = new mysqli("localhost","root","","bdtutoria");

 ?>
<!DOCTYPE html>
	<html lang="es-MX">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
    <div class="container">
        <div class="row"> 
                        
            <div class="col-md-12">
                <h1>CONSULTAR TUTORIAS DE ALUMNOS</h1>
                <b><hr> 
                <br>
                    <?php
                    //boton para insertar el archivo CSV de los alumnos antiguos o que ya llevaron tutoria 
                    ?>
                    <form action='SubirAlumnosAntiguos.php' method='post' enctype="multipart/form-data">
                        Importar Archivo de Alumnos Antiguos : 
                        <input type='file' name='sel_file' size='20'><br>
                        <input type='submit' name='submit' class="btn btn-danger" value='Cargar Alumnos Antiguos'><br><br>
                    </form>
                    <?php
                    //boton para insertar el archivo CSV de los alumnos matriculados el semestree actual
                    ?>
                    <form action='SubirMatriculados.php' method='post' enctype="multipart/form-data">
                        Importar Archivo de Alumnos Matriculados en este semestre: 
                        <input type='file' name="sel_file"size='20'><br>
                        <input type='submit' name='submit' class="btn btn-danger" value='Cargar Alumnos Matriculados'><br><br><br><br>

                    </form>
                    <?php
                    //boton para consultar alumnos no tutorados
                    ?>
                    <form action='NoSeranTutorados.php' method='post' enctype="multipart/form-data">
                        <input type='submit' name='submit' class="btn btn-primary" value='Mostrar Alumnos que no seran tutorados en 2022-I'><br><br>
                    </form>
                    <?php
                    //botón para consultar alumnos nuevos para tutoria.
                    ?>
                    <form action='NuevosParaTutoria.php' method='post' enctype="multipart/form-data">
                        <input type='submit' name='submit' class="btn btn-primary" value='Mostrar Nuevos Alumnos para Tutoria'>

                    </form>
            </div>
        </div>
	</body>
</html>
    