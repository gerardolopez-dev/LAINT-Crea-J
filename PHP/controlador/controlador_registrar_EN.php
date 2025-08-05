<?php

    if (!empty($_POST["registro"])) {
        if (empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["password"])) {
            echo '<div class="alerta">Fields are empty</div>';
        } else {
            $nombre = trim($_POST['nombre']  ?? '');
            $email  = trim($_POST['email']  ?? '');
            $password = $_POST['password'] ?? '';

            $stmt = $conexion->prepare("SELECT 1 FROM formulario WHERE email = ? LIMIT 1");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();           

            if ($stmt->num_rows > 0) {
            echo '<div class="alerta">This email is already registered</div>';
            $stmt->close();
            exit;
            }
            $stmt->close();

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conexion->prepare("INSERT INTO formulario (nombre, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $email, $password_hash);

            if ($stmt->execute()) {
                echo '<div class="alerta">User registered successfully</div>';
            } else {
                echo '<div class="alerta">Error registering user</div>';
            }
            $stmt->close();
        }
    }   
?>
