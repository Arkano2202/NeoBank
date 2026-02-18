<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acceso no permitido");
}

require_once __DIR__ . "/config/conexion.php";
require_once __DIR__ . "/config_mail.php";

/* =========================
   1. RECIBIR Y LIMPIAR DATOS
   ========================= */
$nombre    = trim($_POST["nombre"] ?? "");
$correo    = trim($_POST["correo"] ?? "");
$telefono  = trim($_POST["telefono"] ?? "");
$direccion = trim($_POST["direccion"] ?? "");
$pais      = trim($_POST["pais"] ?? "");
$password  = $_POST["password"] ?? "";
$confirm   = $_POST["password_confirm"] ?? "";
/* =========================
   2. VALIDACIONES BACKEND
   ========================= */
if (empty($nombre) || empty($correo) || empty($pais) || empty($password) || empty($confirm)) {
    die("Faltan campos obligatorios");
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header("Location: resultado.php?tipo=error");
    exit;
}

if (!empty($telefono) && !preg_match('/^[0-9+\s]{6,20}$/', $telefono)) {
    die("Número de teléfono no válido");
}

if (strlen($password) < 8) {
    die("La contraseña debe tener al menos 8 caracteres");
}

if ($password !== $confirm) {
    die("Las contraseñas no coinciden");
}

/* =========================
   3. VERIFICAR CORREO ÚNICO
   ========================= */
$check = $pdo->prepare("SELECT id FROM usuarios WHERE correo = ?");
$check->execute([$correo]);

if ($check->fetch()) {
    die("Este correo ya está registrado");
}

/* =========================
   4. PREPARAR DATOS
   ========================= */
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$token = bin2hex(random_bytes(32));

/* =========================
   5. INSERTAR USUARIO
   ========================= */
$sql = "
INSERT INTO usuarios
(nombre, correo, telefono, direccion, pais, password_hash, alta, token_activacion)
VALUES (?, ?, ?, ?, ?, ?, 0, ?)
";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $nombre,
    $correo,
    $telefono,
    $direccion,
    $pais,
    $passwordHash,
    $token
]);

/* =========================
   6. LINK DE ACTIVACIÓN (LOCALHOST OK)
   ========================= */
$activationLink = "http://localhost:8080/neobank/activar.php?token=" . $token;

/* =========================
   7. ENVIAR CORREO CON PHPMailer
   ========================= */
$enviado = enviarCorreoActivacion($correo, $nombre, $activationLink);

if (!$enviado) {
    header("Location: resultado.php?tipo=correo_error");
    exit;
}

header("Location: resultado.php?tipo=exito");
exit;
