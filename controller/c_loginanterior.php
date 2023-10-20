<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["email"]) && empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {

        // Consulta preparada para evitar la inyección SQL
        $email = $_POST["email"];
        $clave = $_POST["password"];
        $sql = $conexion->prepare("SELECT * FROM login WHERE email=? AND clave=?");
        $sql->bind_param("ss", $email, $clave);

        // Ejecutar la consulta
        $sql->execute();

        // Obtener los resultados
        $resultado = $sql->get_result();

        if ($datos = $resultado->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["apellido"] = $datos->apellido;
            $_SESSION["tipousuario"] = $datos->tipousuario;
            
            // Redirigir al usuario según su rol
            if ($_SESSION['tipousuario'] == '1') {
                header("location: ../views/admin.php");
            } elseif ($_SESSION['tipousuario'] == '0') {
                header("location: ../views/usuario.php");
            } else {
                echo "<p>No tienes permiso para acceder a esta área.</p>";
            }
        } else {
            echo '<div class="alert alert-danger">EL USUARIO O CONTRASEÑA NO EXISTEN</div>';
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    }
}
?>
