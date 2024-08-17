<?php
include("conexion.php"); // Aquí se asume que $conn es una instancia de PDO

$ediciones = $_POST['edicion'];

if(strlen($ediciones) > 0) {
    // Preparar  usando PDO
    $sql = "INSERT INTO edicion(id_edicion, nombre_edicion) VALUES (NULL, :edicion)";
    
    // Preparar la declaración Prepara la consulta para su ejecución, lo que permite evitar inyecciones SQL.
    $stmt = $conn->prepare($sql);
    
    // Vincular el valor de nacionalidad su parámetro
    $stmt->bindParam(':edicion', $ediciones);
    
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