<?php
include("conexion.php"); // Aquí se asume que $conn es una instancia de PDO

$nacional = $_POST['nacio'];

if(strlen($nacional) > 0) {
    // Preparar  usando PDO
    $sql = "INSERT INTO nacio(id_nacio, nombre_nacionalidad) VALUES (NULL, :nacio)";
    
    // Preparar la declaración Prepara la consulta para su ejecución, lo que permite evitar inyecciones SQL.
    $stmt = $conn->prepare($sql);
    
    // Vincular el valor de nacionalidad su parámetro
    $stmt->bindParam(':nacio', $nacional);
    
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