<?php

include_once "./conectar.php";


if (!empty($_GET['actualizar'])){

$id = $_GET["idalumno"];
$nombre = $_GET["nuevo_nombre"];
$apellidos = $_GET["nuevo_apellidos"];
$expediente = $_GET['nuevo_expediente'];
$telefono = $_GET["nuevo_telefono"];
$email = $_GET["nuevo_email"];
$id_grupo = $_GET["nuevo_idGrupo"];


    $sql = "UPDATE Alumno SET id_grupo ='".$id_grupo."', nombre='".$nombre."', apellidos='".$apellidos."',email='".$expediente."', telefono='".$telefono."', email='".$email."' WHERE id_alumno='".$id."'";


    echo "<section class='add'>";

    if ($conexion->query($sql) === TRUE){
        echo "Alumno actualizado correctamente";
    } else {
        echo "Ha habido un error: ".$conexion->error;
    }

echo "<div class='form'><a href='./consulta_totalAlumnos.php'>ir a ALUMNOS</a></div>
</section>";
}

else{
    // Devolver tabla
    $id = $_GET["idalumno"];
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $expediente = $_GET["expediente"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email"];
    $nomGrupo = $_GET["nom_grupo"];

    
    $sql_aux = "SELECT id_grupo, nombre as 'nom_grupo' FROM Grupo order by nombre";

    $resultado_aux = $conexion->query($sql_aux);


    echo "<form action='#' method='get'>";
    echo "<input type='hidden' name='idalumno' value='$id'>";
    echo "<table>";

    echo "<tr><td>Nombre</td><td>Apellidos</td><td>Expediente</td><td>Teléfono</td><td>E-mail</td><td>Grupo</td></tr>";

    echo "<tr>
        <td><input type='texto' name='nuevo_nombre' value='".$nombre."'></td>
        <td><input type='texto' name='nuevo_apellidos' value='".$apellidos."'></td>
        <td><input type='texto' name='nuevo_expediente' value='".$expediente."'></td>
        <td><input type='texto' name='nuevo_telefono' value='".$telefono."'></td>
        <td><input type='texto' name='nuevo_email' value='".$email."'></td>
        <td>
        <select name='nuevo_idGrupo'>";

        if ($resultado_aux->num_rows > 0) {
            while ($row = $resultado_aux->fetch_assoc()) {
                $id = $row['id_grupo'];
                $nombre_grupo = $row['nom_grupo'];   
                
                if ($row['nom_grupo'] == $nomGrupo){
                    echo "<option value='".$id."' selected>".$nombre_grupo."</option>";
                } else {
                    echo "<option value='".$id."'>".$nombre_grupo."</option>";
                }
            }
        }           

        echo "</select>
        </td>
    </tr>";

    echo "</table>";
    echo "<input type='submit' name='actualizar' value='Actualizar datos'><br>";
    echo "</form>";
}



$conexion->close();
?>