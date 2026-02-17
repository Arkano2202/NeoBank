<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>NeoBank</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" href="styles.css">
</head>

<body class="nb-body">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark nb-navbar fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
      <span class="nb-dot">•</span> NeoBank
    </a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nbMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nbMenu">
      <ul class="navbar-nav mx-auto gap-lg-3">
        <li class="nav-item"><a class="nav-link" data-i18n="navAccount" href="#">Cuenta</a></li>
        <li class="nav-item"><a class="nav-link" data-i18n="navCards" href="#">Tarjetas</a></li>
        <li class="nav-item"><a class="nav-link" data-i18n="navPlans" href="#">Planes</a></li>
        <li class="nav-item"><a class="nav-link" data-i18n="navSecurity" href="#">Seguridad</a></li>
      </ul>

      <div class="d-flex align-items-center gap-2">
        <button class="btn btn-sm btn-outline-light" onclick="setLang('es')">ES</button>
        <button class="btn btn-sm btn-outline-light" onclick="setLang('en')">EN</button>
        <a href="#" class="btn btn-link text-light text-decoration-none" data-i18n="login">Iniciar sesión</a>
        <a href="#" class="btn nb-btn-primary" data-i18n="openAccount">Abrir cuenta</a>
      </div>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="nb-hero">
  <div class="container">
    <div class="row align-items-center min-vh-100 pt-5">

      <div class="col-lg-6 text-center text-lg-start">
        <span class="nb-badge mb-3" data-i18n="badge">Nuevo · Cuenta internacional</span>

        <h1 class="display-5 fw-bold mt-3">
          <span data-i18n="heroLine1">Control total de tu dinero,</span><br>
          <span class="nb-gradient" data-i18n="heroLine2">sin complicaciones</span>
        </h1>

        <p class="text-secondary fs-5 mt-4" data-i18n="heroSub">
          Pagos, ahorros e inversiones desde una sola app segura.
        </p>

        <div class="mt-4 d-flex gap-3 justify-content-center justify-content-lg-start">
          <a href="#" class="btn nb-btn-primary btn-lg" data-i18n="ctaPrimary">Abrir cuenta gratis</a>
        </div>

        <div class="d-flex gap-4 mt-4 small text-secondary justify-content-center justify-content-lg-start">
          <span><i class="bi bi-shield-check text-primary"></i> <span data-i18n="trust1">Hasta 100k€ protegidos</span></span>
          <span><i class="bi bi-bank text-primary"></i> <span data-i18n="trust2">Regulado</span></span>
        </div>
      </div>

      <div class="col-lg-6 position-relative mt-5 mt-lg-0">
        <div class="nb-card-mockup">
          <div class="nb-card-top">
            <span class="nb-card-brand">NeoBank</span>
            <i class="bi bi-wifi"></i>
          </div>

          <div class="nb-chip"></div>

          <div class="nb-card-number">
            •••• •••• •••• 4821
          </div>

          <div class="nb-card-bottom">
            <span class="nb-card-name">CARLOS R.</span>
            <span class="nb-card-type">VIRTUAL</span>
          </div>
        </div>

        <div class="nb-float-note">
          <i class="bi bi-arrow-up-circle"></i>
          <div>
            <small data-i18n="note">Ingreso recibido</small><br>
            <strong>+2.850 €</strong>
          </div>
        </div>

        <!-- NUEVA ACTIVIDAD -->
        <div class="nb-activity">
          <div>Pago Amazon <span>-42 €</span></div>
          <div>Ahorro mensual <span>+150 €</span></div>
          <div>Inversión BTC <span>+3.2%</span></div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- METRICS -->
<section class="nb-metrics">
  <div class="container">
    <div class="row text-center gy-4">
      <div class="col-6 col-lg-3">
        <h2 class="nb-metric">18M+</h2>
        <p data-i18n="m1">Clientes satisfechos</p>
      </div>
      <div class="col-6 col-lg-3">
        <h2 class="nb-metric">35+</h2>
        <p data-i18n="m2">Divisas disponibles</p>
      </div>
      <div class="col-6 col-lg-3">
        <h2 class="nb-metric">200+</h2>
        <p data-i18n="m3">Países y regiones</p>
      </div>
      <div class="col-6 col-lg-3">
        <h2 class="nb-metric">24/7</h2>
        <p data-i18n="m4">Soporte prioritario</p>
      </div>
    </div>
  </div>
</section>

<!-- SUPERAPP -->
<section class="nb-superapp text-center">
  <div class="container">
    <h2 class="fw-bold mb-3" data-i18n="superTitle">
      Una superapp para todo tu dinero
    </h2>
    <p class="text-secondary fs-5" data-i18n="superSub">
      Desde gastos diarios hasta inversiones a largo plazo, NeoBank te da el control total.
    </p>
  </div>
</section>

<!-- FEATURES -->
<section class="nb-features">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-6 col-lg-4">
        <div class="nb-feature-card">
          <i class="bi bi-globe"></i>
          <h5 data-i18n="f1t">Cuenta internacional</h5>
          <p data-i18n="f1d">Recibe y envía dinero en múltiples divisas sin comisiones ocultas.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="nb-feature-card">
          <i class="bi bi-pie-chart"></i>
          <h5 data-i18n="f2t">Presupuestos inteligentes</h5>
          <p data-i18n="f2d">Controla tus gastos con alertas y límites automáticos.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="nb-feature-card">
          <i class="bi bi-safe"></i>
          <h5 data-i18n="f3t">Cajas fuertes</h5>
          <p data-i18n="f3d">Ahorra para tus objetivos con rendimiento anual.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="nb-feature-card">
          <i class="bi bi-fingerprint"></i>
          <h5 data-i18n="f4t">Seguridad biométrica</h5>
          <p data-i18n="f4d">Acceso con FaceID y verificación avanzada.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="nb-feature-card">
          <i class="bi bi-graph-up"></i>
          <h5 data-i18n="f5t">Inversiones accesibles</h5>
          <p data-i18n="f5d">Invierte desde montos pequeños en mercados globales.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="nb-feature-card">
          <i class="bi bi-currency-bitcoin"></i>
          <h5 data-i18n="f6t">Cripto integrado</h5>
          <p data-i18n="f6d">Compra y gestiona criptomonedas directamente desde la app.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="lang.js"></script>

<!-- HOW IT WORKS -->
<section class="nb-how">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold mb-3" data-i18n="howTitle">
        Cómo funciona NeoBank
      </h2>
      <p class="text-secondary fs-5" data-i18n="howSub">
        Empieza a gestionar tu dinero en pocos pasos, de forma simple y segura.
      </p>
    </div>

    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <div class="nb-step">
          <div class="nb-step-number">1</div>
          <i class="bi bi-person-plus"></i>
          <h6 data-i18n="how1t">Crea tu cuenta</h6>
          <p data-i18n="how1d">
            Regístrate en minutos con tus datos básicos.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="nb-step">
          <div class="nb-step-number">2</div>
          <i class="bi bi-shield-check"></i>
          <h6 data-i18n="how2t">Verifica tu identidad</h6>
          <p data-i18n="how2d">
            Protegemos tu cuenta cumpliendo estándares internacionales.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="nb-step">
          <div class="nb-step-number">3</div>
          <i class="bi bi-wallet2"></i>
          <h6 data-i18n="how3t">Gestiona tu dinero</h6>
          <p data-i18n="how3d">
            Paga, ahorra e invierte desde un solo lugar.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="nb-step">
          <div class="nb-step-number">4</div>
          <i class="bi bi-graph-up-arrow"></i>
          <h6 data-i18n="how4t">Mantén el control</h6>
          <p data-i18n="how4d">
            Visualiza todo en tiempo real, sin sorpresas.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="nb-testimonials">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h2 class="fw-bold mb-1" data-i18n="testTitle">Lo que dicen algunos de nuestros usuarios</h2>
        <p class="text-secondary" data-i18n="testSub">Personas y empresas que confían en NeoBank.</p>
      </div>

      <div class="d-flex gap-2">
        <button class="nb-arrow" onclick="prevTestimonial()">‹</button>
        <button class="nb-arrow" onclick="nextTestimonial()">›</button>
      </div>
    </div>

    <div class="row g-4" id="testimonialContainer">
      <!-- JS injecta los testimonios -->
    </div>

  </div>
</section>

<!-- FINAL CTA -->
<section class="nb-cta">
  <div class="container text-center">
    <div class="nb-cta-box">

      <h2 class="fw-bold mb-3" data-i18n="ctaFinalTitle">
        Empieza hoy con NeoBank
      </h2>

      <p class="fs-5 text-secondary mb-4" data-i18n="ctaFinalSub">
        Controla tu dinero, ahorra con inteligencia y muévete sin fronteras.
      </p>

      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="#" class="btn nb-btn-primary btn-lg" data-i18n="ctaFinalPrimary">
          Abrir cuenta gratis
        </a>
      </div>

      <div class="mt-4 small text-secondary">
        <i class="bi bi-check-circle-fill text-primary"></i>
        <span data-i18n="ctaFinalNote">
          Sin comisiones ocultas · Sin compromiso
        </span>
      </div>

    </div>
  </div>
</section>

<!-- LEGAL FOOTER -->
<footer class="nb-footer">
  <div class="container">
    <div class="row gy-4">

      <!-- INFO -->
      <div class="col-md-6">
        <h6 class="fw-semibold mb-2">NeoBank</h6>
        <p class="small text-secondary" data-i18n="legalCompany">
          NeoBank Technologies Ltd. Registrada como empresa tecnológica financiera.
        </p>

        <p class="small text-secondary" data-i18n="legalDisclaimer">
          NeoBank no es un banco. Los servicios financieros son provistos por entidades asociadas debidamente reguladas.
        </p>

        <p class="small text-secondary" data-i18n="legalRisk">
          Los productos financieros y criptoactivos implican riesgos y pueden resultar en la pérdida de capital.
        </p>
      </div>

      <!-- LINKS -->
      <div class="col-md-3">
        <h6 class="fw-semibold mb-2" data-i18n="legalTitle">Legal</h6>
        <ul class="list-unstyled small">
          <li><a href="#" data-i18n="terms">Términos y condiciones</a></li>
          <li><a href="#" data-i18n="privacy">Política de privacidad</a></li>
          <li><a href="#" data-i18n="cookies">Política de cookies</a></li>
          <li><a href="#" data-i18n="legalNotice">Aviso legal</a></li>
        </ul>
      </div>

      <!-- CONTACT -->
      <div class="col-md-3">
        <h6 class="fw-semibold mb-2" data-i18n="contactTitle">Contacto</h6>
        <p class="small text-secondary mb-1">
          Email: <a href="mailto:legal@neobank.com">legal@neobank.com</a>
        </p>
        <p class="small text-secondary">
          Support: <a href="mailto:support@neobank.com">support@neobank.com</a>
        </p>
      </div>

    </div>

    <hr class="nb-footer-divider">

    <div class="text-center small text-secondary">
      © 2026 NeoBank. <span data-i18n="rights">Todos los derechos reservados.</span>
    </div>
  </div>
</footer>

<!--TESTIMONIOS-->
<script>
let currentIndex = 0;

const testimonials = [
  { img:"images/LauraMartinez.png", textKey:"t1text", nameKey:"t1name", roleKey:"t1role", rating:5 },
  { img:"images/DanielBrooks.png", textKey:"t2text", nameKey:"t2name", roleKey:"t2role", rating:5 },
  { img:"images/SophieLaurent.png", textKey:"t3text", nameKey:"t3name", roleKey:"t3role", rating:5 },
  { img:"images/CarlosRamirez.png", textKey:"t4text", nameKey:"t4name", roleKey:"t4role", rating:4.5 },
  { img:"images/MariaGonzalez.png", textKey:"t5text", nameKey:"t5name", roleKey:"t5role", rating:4.5 },
  { img:"images/BAT_Mexico.png", textKey:"t6text", nameKey:"t6name", roleKey:"t6role", rating:5 },
  { img:"images/Binbo.png", textKey:"t7text", nameKey:"t7name", roleKey:"t7role", rating:5 }
];

function getLang(){
  return localStorage.getItem("lang") || "es";
}

function renderStars(r){
  return "★".repeat(Math.floor(r)) + (r % 1 ? "☆" : "");
}

function renderTestimonials(){
  const container = document.getElementById("testimonialContainer");
  const lang = getLang();
  container.innerHTML = "";

  for(let i=0;i<3;i++){
    const item = testimonials[(currentIndex+i)%testimonials.length];

    container.innerHTML += `
      <div class="col-md-4">
        <div class="nb-testimonial-card">
          <div class="nb-stars">${renderStars(item.rating)}</div>
          <p>${t[lang][item.textKey]}</p>
          <div class="nb-user">
            ${
              item.img
                ? `<img src="${item.img}" alt="">`
                : `<div class="nb-company-avatar">${item.initials}</div>`
            }
            <div>
              <strong>${t[lang][item.nameKey]}</strong><br>
              <small>${t[lang][item.roleKey]}</small>
            </div>
          </div>
        </div>
      </div>`;
  }
}

function nextTestimonial(){
  currentIndex = (currentIndex + 1) % testimonials.length;
  renderTestimonials();
}

function prevTestimonial(){
  currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
  renderTestimonials();
}

/* 👇 ESTO ES LA CLAVE */
document.querySelectorAll("button[onclick^='setLang']").forEach(btn=>{
  btn.addEventListener("click", ()=>{
    setTimeout(renderTestimonials, 50);
  });
});

document.addEventListener("DOMContentLoaded", renderTestimonials);
</script>

</body>
</html>
