<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
<link href="./estilos/estilos.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="cuerpo">
<header>
        <div class="logo">
            <img src="logo.png" alt="Logo" />
        </div>
        <nav class="nav-links">
            <ul>
                <li><a href="#home">nacionalidad</a></li>
                <li><a href="./pages/genero.php">genero</a></li>
                <li><a href="./pages/edicion.php">edicion</a></li>
                
            </ul>
        </nav>
      
    </header>
<div class="container">
    <h1> Adicionar Naciones </h1>
    <form method="POST" action="./php/guardar.php">
        <div class="row">
        <div class="col-2">    
        <label for="tiquete">Nacion</label>
        </div>
        <div class="col-4">
        <input type="text" class="form-control" placeholder="Pais" name="nacio" required="true"/>
        </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Guardar"></input>
    </form>
    <!--Formulario para grabar -->
</div>    
</body>

</html>








































<style>
    /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo para el header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #333;
    color: #fff;
}

/* Estilo para el logo */
.logo img {
    max-height: 50px;
}

/* Estilo para la navegación */
.nav-links ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
}

.nav-links a:hover {
    color: #ff6347; /* Color al pasar el mouse */
}

/* Estilo para el botón de llamada a la acción */
.cta button {
    padding: 10px 20px;
    background-color: #ff6347;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.cta button:hover {
    background-color: #ff4500; /* Color al pasar el mouse */
}
</style>