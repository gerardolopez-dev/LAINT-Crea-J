<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
    header("Location: ../Maqueta/index.php");
    exit();
}

if (!empty($_POST["iniciar"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        echo '<div class="alerta">Los campos están vacíos</div>';
    } else {
        $email = trim($_POST["email"]);   
        $password = trim($_POST["password"]); 

        $sql = $conexion->prepare("SELECT * FROM formulario WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $resultado = $sql->get_result();

        if ($datos = $resultado->fetch_object()) {
            if (password_verify($password, $datos->password)) {
                session_regenerate_id(true);
                
                $_SESSION['usuario'] = $email;
                $_SESSION['nombre'] = $datos->nombre;
                
                header("Location: ../Maqueta/index.php");
                exit();
            } else {
                echo '<div class="alerta">ACCESO DENEGADO - Contraseña incorreta</div>';
            }
        } else {
            echo '<div class="alerta">ACCESO DENEGADO - Email no encontrado</div>';
        }
    }
}
?>