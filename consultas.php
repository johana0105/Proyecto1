<?php
function conexion(){
 $enlace = mysqli_connect("localhost", "root", "usbw", "pruebas");
    
    if ($enlace->connect_error) {
    die("Error de conexion: " . $enlace->connect_error);
    
   
}
return $enlace;
}
function cuadro_crm($enlace){
    
$sql = "SELECT total,porcentaje,tipo_dato FROM valores";
$result = $enlace->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["total"]. " - Name: " . $row["porcentaje"]. " " . $row["tipo_dato"]. "<br>";
    
        $dato[]=array($row);
    }
    return $dato;
} else {
    echo "0 results";
}
}

//$enlace= conexion();
//var_dump(cuadro_crm($enlace));

 ?>

