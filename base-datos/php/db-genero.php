<?php
include("conexion.php"); // Aquí se asume que $conn es una instancia de PDO

$nacional = $_POST['genero'];

if(strlen($nacional) > 0) {
    // Preparar  usando PDO
    $sql = "INSERT INTO genero(id_genero, nombre_genero) VALUES (NULL, :genero)";
    
    // Preparar la declaración Prepara la consulta para su ejecución, lo que permite evitar inyecciones SQL.
    $stmt = $conn->prepare($sql);
    
    // Vincular el valor de nacionalidad su parámetro
    $stmt->bindParam(':genero', $nacional);
    
    // si se ejecuto correctamente sql 
    if($stmt->execute()) {
        echo "Registro guardado exitosamente"."<br/>";
    } else {
        echo "Error al guardar el registro"."<br/>";

    }
} else {
    echo " Revise sus datos."."<br/>";
}
?>

<a href="../index.php">Regresar</a>