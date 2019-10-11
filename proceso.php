 <?php 

 include "alumnos.php";



$objAl=new alumnos();
extract($_POST);
$objAl->nombres=$name;
$objAl->apellidos=$lname;
$objAl->dni=$dni;
$objAl->sexo=$sexo;



$objAl->guardar();



  ?>
 