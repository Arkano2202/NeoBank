<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Registro | NeoBank</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" href="CSS/styles.css">
</head>

<body class="nb-body">

<section class="min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">

        <div class="nb-card p-4 shadow">
          <h3 class="fw-bold mb-3 text-center">Crear cuenta</h3>
          <p class="text-secondary text-center mb-4">
            Completa tus datos para comenzar
          </p>

          <!-- FORMULARIO -->
          <form id="registroForm" method="POST" action="procesar_registro.php" novalidate>

            <!-- NOMBRE -->
            <div class="mb-3">
              <label class="form-label">Nombre completo</label>
              <input type="text"
                     class="form-control"
                     name="nombre"
                     required
                     minlength="3"
                     placeholder="Ej: Juan Pérez">
            </div>

            <!-- CORREO -->
            <div class="mb-3">
              <label class="form-label">Correo electrónico</label>
              <input type="email"
                     class="form-control"
                     name="correo"
                     required
                     placeholder="correo@ejemplo.com">
            </div>

            <!-- TELÉFONO -->
            <div class="mb-3">
              <label class="form-label">Teléfono</label>
              <input type="tel"
                     class="form-control"
                     name="telefono"
                     pattern="[0-9+\s\-]{7,20}"
                     title="Solo números, mínimo 7 dígitos"
                     placeholder="+1 300 123 4567">
            </div>

            <!-- DIRECCIÓN -->
            <div class="mb-3">
              <label class="form-label">Dirección</label>
              <input type="text"
                     class="form-control"
                     name="direccion"
                     placeholder="Calle, ciudad, código postal">
            </div>

            <!-- PAÍS -->
            <div class="mb-3">
              <label class="form-label">País</label>
              <input type="text"
                     class="form-control"
                     name="pais"
                     required
                     placeholder="País de residencia">
            </div>

            <!-- CONTRASEÑA -->
            <div class="mb-3">
              <label class="form-label">Contraseña</label>
              <input type="password"
                     id="password"
                     class="form-control"
                     name="password"
                     required
                     minlength="8"
                     placeholder="Mínimo 8 caracteres">
            </div>

            <!-- CONFIRMAR CONTRASEÑA -->
            <div class="mb-4">
              <label class="form-label">Confirmar contraseña</label>
              <input type="password"
                     id="confirmPassword"
                     class="form-control"
                     name="password_confirm"
                     required
                     minlength="8"
                     placeholder="Repite la contraseña">
            </div>

            <!-- ERROR PASSWORD -->
            <div class="alert alert-danger d-none" id="errorPass">
              Las contraseñas no coinciden
            </div>

            <button type="submit" class="btn nb-btn-primary w-100">
              Crear cuenta
            </button>

          </form>
          <!-- /FORMULARIO -->

        </div>

      </div>
    </div>
  </div>
</section>

<script>
document.getElementById("registroForm").addEventListener("submit", function(e){
  const pass = document.getElementById("password").value;
  const confirm = document.getElementById("confirmPassword").value;

  if(pass !== confirm){
    e.preventDefault();
    document.getElementById("errorPass").classList.remove("d-none");
    return;
  }

  document.getElementById("errorPass").classList.add("d-none");
});
</script>

</body>
</html>
