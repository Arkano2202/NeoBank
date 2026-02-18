<?php
// resultado.php

$tipo = $_GET['tipo'] ?? 'error';

$mensajes = [
    'exito' => [
        'titulo' => 'Registro exitoso',
        'mensaje' => 'Revisa tu correo y activa tu cuenta para continuar.',
        'clase' => 'success'
    ],
    'correo_error' => [
        'titulo' => 'Error al enviar correo',
        'mensaje' => 'Tu cuenta fue creada, pero no se pudo enviar el correo de activación.',
        'clase' => 'warning'
    ],
    'error' => [
        'titulo' => 'Ocurrió un error',
        'mensaje' => 'No fue posible completar el registro.',
        'clase' => 'danger'
    ]
];

$data = $mensajes[$tipo] ?? $mensajes['error'];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Resultado | NeoBank</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta http-equiv="refresh" content="3;url=index.php">
</head>

<body class="bg-dark text-light d-flex align-items-center min-vh-100">

<div class="container text-center">
  <div class="card bg-secondary text-light p-4 shadow-lg">
    <h2 class="mb-3 text-<?php echo $data['clase']; ?>">
      <?php echo $data['titulo']; ?>
    </h2>

    <p class="fs-5">
      <?php echo $data['mensaje']; ?>
    </p>

    <p class="small text-muted mt-3">
      Serás redirigido automáticamente...
    </p>
  </div>
</div>

</body>
</html>
