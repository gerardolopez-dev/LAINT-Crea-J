<?php
    if (!empty($_POST["iniciar"])) {
        // Debug: Mostrar todos los datos POST
        echo "<div style='background: yellow; padding: 10px; margin: 10px;'>";
        echo "<strong>DEBUG - Datos recibidos:</strong><br>";
        echo "Email recibido: '" . (isset($_POST["email"]) ? $_POST["email"] : 'NO RECIBIDO') . "'<br>";
        echo "Password recibido: '" . (isset($_POST["password"]) ? $_POST["password"] : 'NO RECIBIDO') . "'<br>";
        echo "Botón iniciar: '" . $_POST["iniciar"] . "'<br>";
        echo "</div>";

        // Verificar si los campos están vacíos
        if (empty($_POST["email"]) || empty($_POST["password"])) {
            echo '<div class="alerta">Los campos están vacíos</div>';
        } else {
            $email = trim($_POST["email"]);   
            $password = trim($_POST["password"]); 

            echo "<div style='background: lightblue; padding: 10px; margin: 10px;'>";
            echo "<strong>DEBUG - Datos procesados:</strong><br>";
            echo "Email procesado: '$email'<br>";
            echo "Password procesado: '$password'<br>";
            echo "</div>";

            // Primero verificar la conexión
            if (!$conexion) {
                echo '<div class="alerta">Error de conexión a la base de datos</div>';
            } else {
                echo "<div style='background: lightgreen; padding: 10px; margin: 10px;'>";
                echo "<strong>DEBUG - Conexión exitosa</strong><br>";
                echo "</div>";

                // Consulta simple primero para debug
                $sql_debug = "SELECT * FROM formulario";
                $resultado_debug = $conexion->query($sql_debug);
                
                echo "<div style='background: orange; padding: 10px; margin: 10px;'>";
                echo "<strong>DEBUG - Todos los usuarios en la tabla:</strong><br>";
                if ($resultado_debug && $resultado_debug->num_rows > 0) {
                    while($row = $resultado_debug->fetch_assoc()) {
                        echo "ID: " . $row["id"] . " - Email: '" . $row["email"] . "' - Password: '" . $row["password"] . "'<br>";
                    }
                } else {
                    echo "No se encontraron registros en la tabla o error en la consulta<br>";
                    echo "Error MySQL: " . $conexion->error;
                }
                echo "</div>";

                // Ahora la consulta de login
                $sql = "SELECT * FROM formulario WHERE email = '$email' AND password = '$password'";
                echo "<div style='background: pink; padding: 10px; margin: 10px;'>";
                echo "<strong>DEBUG - Consulta SQL:</strong><br>";
                echo "$sql<br>";
                echo "</div>";

                $resultado = $conexion->query($sql);

                if (!$resultado) {
                    echo '<div class="alerta">Error en la consulta: ' . $conexion->error . '</div>';
                } else if ($resultado->num_rows > 0) {
                    echo "<div style='background: green; color: white; padding: 10px; margin: 10px;'>";
                    echo "<strong>LOGIN EXITOSO!</strong><br>";
                    echo "</div>";
                    
                    // Comentar temporalmente la redirección para ver el debug
                    // session_start();
                    // $_SESSION['usuario'] = $email;
                    // header("Location: ../../index.html");
                    // exit();
                } else {
                    echo '<div class="alerta">ACCESO DENEGADO - No se encontró coincidencia exacta</div>';
                    echo "<div style='background: red; color: white; padding: 10px; margin: 10px;'>";
                    echo "Número de filas encontradas: " . $resultado->num_rows;
                    echo "</div>";
                }
            }
        }
    }
?>