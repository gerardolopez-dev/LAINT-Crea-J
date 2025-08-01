<?php

    if (!empty($_POST["registro"])) {
        if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["password"])) {
            echo '<div class="alerta">Los campos están vacíos</div>';
        } else {
            $nombre   = trim($_POST['nombre']   ?? '');
            $email   = trim($_POST['email']    ?? '');
            $password = $_POST['password'] ?? '';

            $stmt = $conexion->prepare("SELECT 1 FROM formulario WHERE email = ? LIMIT 1");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();           

            if ($stmt->num_rows > 0) {
            echo '<div class="alerta">Este correo ya está registrado</div>';
            $stmt->close();
            exit;
            }
            $stmt->close();

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conexion->prepare("INSERT INTO formulario (nombre, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $email, $password_hash);

            if ($stmt->execute()) {
                echo '<div class="alerta">Usuario registrado correctamente</div>';
            } else {
                echo '<div class="alerta">Error al registrar el usuario</div>';
            }
            $stmt->close();
        }
    }   
?>
