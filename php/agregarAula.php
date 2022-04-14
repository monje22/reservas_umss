<?php 


  if($_POST){
     //echo json_encode($_POST);
     //echo "1";
     $servidor = "mysql-giusseppe.alwaysdata.net";
     $usuario="andre_root";
     $contrasena="adivinala";
     $BD="andre_base_datos";
     $conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);

     $sql = "insert into Aula (facultad, nombre, capacidad, detalles, proyector)".
     "values('"
     .$_POST["facultad"]."','"
     .$_POST["nombre"]."','"
     .$_POST["capacidad"]."','"
     .$_POST["detalles"]."','"
     .$_POST["proyector"]."')";

     $result = mysqli_query($conexion,$sql);
     if($result){
      echo "1";
     }else{
      echo "0";
     }

     mysqli_close($conexion);


  }



?>