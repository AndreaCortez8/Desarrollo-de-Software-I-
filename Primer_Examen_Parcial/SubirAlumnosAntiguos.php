<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = '';

$database = 'bdtutoria';
$con=mysqli_connect($host, $db_user, $db_pass);
$mysqli = new mysqli("localhost","root","","bdtutoria");
if (!$con)
    die("No se pudo establecer conexión a la base de datos");

if (!mysqli_select_db($con,$database))
    die("base de datos no existe");


    if(isset($_POST['submit']))
    {   //importacion para alumnos antiguos
        $fname1 = $_FILES['sel_file']['name'];
        //echo 'Archivo Cargado: '.$fname1.' ';
        
        $AlumnosAntiguos = $_FILES['sel_file']['tmp_name'];
        $archivo = fopen($AlumnosAntiguos, "r");
			 
        while (($data1 = fgetcsv($archivo, 1000, ",")) == true)
        {
            $sql1 = "INSERT INTO Tutorados values('$data1[0]', '$data1[1]')";
            mysqli_query($con,$sql1) or die(mysqli_error());
            
        }
            
        fclose($archivo);
        Header("Location: index.php");
    }
