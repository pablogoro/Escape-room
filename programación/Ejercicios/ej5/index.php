<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej5</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="px-4 py-2">
    <form action="./recibir.php" method="post">

    <!-- ingresar nombre -->
        <label for="nombre">Ingrese su nombre:</label>
        <br>
        <input type="text" name="nombre" >
        <br>
        <!-- Ingresar apellido -->
        <label for="apellido">Ingrese su apellido:</label>
        <br>
        <input type="text" name="apellido">
        <br>
        <!-- Ingresar edad -->
        <label for="edad">Ingrese su edad:</label>
        <br>
        <input type="text" name="edad">
        <br>
        <input type="radio" name="genero" value="hombre">
        <label for="hombre">hombre</label>
        <input type="radio" name="genero" value="mujer">
        <label for="mujer">mujer</label>
        <br>
        <input type="checkbox" name="futbol" value="futbol" >
        <label for="futbol">futbol</label>
        <input type="checkbox" name="cine" value="cine">
        <label for="futbol">cine</label>
        <br>
        <select name="categoria" >
            <option value="alumno">alumno</option>
            <option value="profesor">profesor</option>
            <option value="personal administrativo">personal administrativo</option>
            <option value="mantenimiento">mantenimiento</option>
        </select>
        <br>
        <br>
        
        <!-- enviar -->
        <button type="submit" class="btn btn-primary" value="enviar" name="enviar">enviar</button>


    </form>
</body>
</html>