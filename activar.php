<?php
// activar.php

require_once __DIR__ . "/config/conexion.php";

// 1. Validar token
$token = $_GET['token'] ?? '';

if (empty($token)) {
    die("Token no válido.");
}

// 2. Buscar usuario por token
$sql = "SELECT id, alta FROM usuarios WHERE token_activacion = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$token]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    die("El enlace de activación no es válido o ya fue usado.");
}

// 3. Verificar si ya está activo
if ((int)$usuario['alta'] === 1) {
    die("Esta cuenta ya fue activada anteriormente.");
}

// 4. Activar cuenta y eliminar token
$update = $pdo->prepare("
    UPDATE usuarios
    SET alta = 1, token_activacion = NULL
    WHERE id = ?
");
$update->execute([$usuario['id']]);

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cuenta activada | NeoBank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body class="nb-body">

<section class="min-vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">

                <div class="nb-card p-4 shadow">
                    <h2 class="fw-bold text-success mb-3">
                        ✔ Cuenta activada
                    </h2>

                    <p class="text-secondary mb-4">
                        Tu cuenta ha sido activada correctamente.
                        Ya puedes iniciar sesión en NeoBank.
                    </p>

                    <a href="login.php" class="btn nb-btn-primary">
                        Ir a iniciar sesión
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

</body>
</html>
