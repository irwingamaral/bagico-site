<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BagiCo. Suite &#8212; Em Breve</title>
<meta name="description" content="BagiCo Suite &#8212; O sistema de gest&atilde;o de marketing mais inovador est&aacute; chegando. Entre na lista de espera e garanta acesso priorit&aacute;rio.">
<meta name="robots" content="noindex, nofollow">
<meta name="author" content="BagiCo">
<meta name="language" content="pt-BR">

<!-- OPEN GRAPH -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://bagico.com.br/suite.html">
<meta property="og:title" content="BagiCo. Suite &#8212; O futuro da gest&atilde;o de marketing">
<meta property="og:description" content="Uma plataforma completa, inovadora e visceral para marcas que recusam o comum. Entre na lista de espera e garanta acesso priorit&aacute;rio.">
<meta property="og:locale" content="pt_BR">
<meta property="og:site_name" content="BagiCo">

<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BagiCo. Suite &#8212; Em Breve">
<meta name="twitter:description" content="O sistema de gest&atilde;o de marketing mais inovador est&aacute; chegando. Garanta seu acesso priorit&aacute;rio.">

<!-- GEO -->
<meta name="geo.region" content="BR-RS">
<meta name="geo.placename" content="Porto Alegre, Rio Grande do Sul, Brasil">
<link rel="icon" type="image/png" href="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/wAARCAEAAQADASIAAhEBAxEB/8QAGwABAQEAAwEBAAAAAAAAAAAAAAQCAwUBBgf/xAA0EAACAQMDAgQEBQQDAQAAAAAAAQIDBAUREiExBhNBUWEicYGRFDKhwdEjUrHhFUJi/8QAGgEBAQADAQEAAAAAAAAAAAAAAAECBAUDB//EACQRAQACAgICAgMBAQAAAAAAAAABAgMRBBIhMUEiUROBYf/aAAwDAQACEQMRAD8A8iAAAAAAAAAAAAAAAAAAAAA">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<style>
  :root {
    --noir: #0a0a0a;
    --carbon: #161616;
    --graphite: #1e1e1e;
    --ash: #8a8a8a;
    --ivory: #f5f5f5;
    --desire: #C0392B;
    --ember: #6b1c14;
    --serif: 'Cormorant Garamond', Georgia, serif;
    --sans: 'DM Sans', sans-serif;
  }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { background: var(--noir); color: var(--ivory); font-family: var(--sans); font-weight: 300; overflow-x: hidden; cursor: none; min-height: 100vh; display: flex; flex-direction: column; }

  /* CURSOR */
  .cursor { position: fixed; width: 8px; height: 8px; background: var(--desire); border-radius: 50%; pointer-events: none; z-index: 9999; transition: transform 0.15s ease; transform: translate(-50%, -50%); }
  .cursor-ring { position: fixed; width: 32px; height: 32px; border: 1px solid rgba(192,57,43,0.4); border-radius: 50%; pointer-events: none; z-index: 9998; transition: transform 0.4s ease, width 0.3s ease, height 0.3s ease; transform: translate(-50%, -50%); }

  /* NAV */
  nav { position: fixed; top: 0; left: 0; right: 0; z-index: 100; padding: 28px 60px; display: flex; align-items: center; justify-content: space-between; }
  nav::before { content: ''; position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10,10,10,0.95) 0%, transparent 100%); pointer-events: none; }
  .logo { font-family: var(--serif); font-size: 22px; font-weight: 400; color: var(--ash); letter-spacing: -0.5px; position: relative; z-index: 1; text-decoration: none; }
  .logo span { color: var(--desire); }
  .nav-links { display: flex; gap: 40px; list-style: none; position: relative; z-index: 1; }
  .nav-links a { font-size: 12px; font-weight: 400; color: var(--ash); text-decoration: none; letter-spacing: 0.12em; text-transform: uppercase; transition: color 0.3s ease; }
  .nav-links a:hover { color: var(--ivory); }
  .nav-suite-link:hover { color: var(--ivory); border-color: var(--ash); }

  .nav-actions { display: flex; align-items: center; gap: 12px; position: relative; z-index: 1; }
  .nav-suite-link { font-size: 12px; font-weight: 400; color: var(--ash); letter-spacing: 0.12em; text-transform: uppercase; border: 1px solid var(--graphite); padding: 10px 22px; text-decoration: none; transition: color 0.3s, border-color 0.3s; }
  .nav-suite-link:hover { color: var(--ivory); border-color: var(--ash); }
  .nav-dropdown { position: relative; }
  .nav-dropdown-trigger {
    font-size: 12px; font-weight: 400; color: var(--desire);
    letter-spacing: 0.12em; text-transform: uppercase;
    cursor: pointer; display: flex; align-items: center; gap: 6px;
    transition: opacity 0.3s; user-select: none;
  }
  .nav-dropdown-trigger:hover { opacity: 0.8; }
  .nav-dropdown-trigger::after { content: '\25BE'; font-size: 9px; transition: transform 0.3s; }
  .nav-dropdown:hover .nav-dropdown-trigger::after { transform: rotate(180deg); }
  .nav-dropdown-menu {
    position: absolute; top: 100%; left: 50%;
    transform: translateX(-50%);
    padding-top: 16px;
    min-width: 200px; z-index: 200;
    opacity: 0; pointer-events: none;
    transition: opacity 0.25s ease;
  }
  .nav-dropdown:hover .nav-dropdown-menu { opacity: 1; pointer-events: all; }
  .nav-dropdown-menu-inner { background: var(--carbon); border: 1px solid var(--graphite); }
  .nav-dropdown-menu a {
    display: block; padding: 13px 18px;
    font-size: 11px; letter-spacing: 0.12em; text-transform: uppercase;
    color: var(--ash); text-decoration: none;
    border-bottom: 1px solid var(--graphite);
    transition: color 0.2s, background 0.2s;
  }
  .nav-dropdown-menu a:last-child { border-bottom: none; }
  .nav-dropdown-menu a:hover { color: var(--ivory); background: var(--graphite); }
  .nav-dropdown-menu a span { color: var(--desire); margin-right: 8px; font-size: 8px; }
</style>
<?php include 'tags.php'; ?>
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- NAV -->
<nav aria-label="Menu principal BagiCo">
  <a href="/" class="logo" aria-label="BagiCo - P&aacute;gina inicial">BagiCo<span>.</span></a>
  <ul class="nav-links">
    <li><a href="/#manifesto">Sobre</a></li>
    <li><a href="/#servicos">Servi&ccedil;os</a></li>
    <li><a href="/#niveis">Modelos</a></li>
    <li><a href="/#valores">Valores</a></li>
    <li class="nav-dropdown">
      <span class="nav-dropdown-trigger">Elevar minha marca</span>
      <div class="nav-dropdown-menu">
        <div class="nav-dropdown-menu-inner">
          <a href="/identidade-visual.php"><span>&#9679;</span> Identidade Visual</a>
          <a href="/social-media.php"><span>&#9679;</span> Social Media</a>
          <a href="/sites.php"><span>&#9679;</span> Cria&ccedil;&atilde;o de Sites</a>
          <a href="/trafego.php"><span>&#9679;</span> Tr&aacute;fego Pago</a>
          <a href="/consultoria.php"><span>&#9679;</span> Consultoria</a>
        </div>
      </div>
    </li>
  </ul>
  <div class="nav-actions">
    <a href="/suite.php" class="nav-suite-link">BagiCo<span style="color:var(--desire)">.</span> Suite</a>
    <a href="https://wa.me/5551993535790" target="_blank" class="nav-cta">Fale conosco</a>
  </div>
</nav>

<!-- MAIN -->
<main aria-label="BagiCo Suite - Em breve">
  <div class="bg-glow"></div>
  <div class="bg-grid"></div>

  <div class="badge">
    <div class="badge-dot"></div>
    Em desenvolvimento
  </div>

  <p class="suite-eyebrow">BagiCo. Suite</p>

  <h1 class="suite-title">
    O futuro da<br>
    <em>gest&atilde;o de<br>marketing</em><span class="dot">.</span>
  </h1>

  <p class="suite-subtitle">
    Onde estrat&eacute;gia, criatividade e dados se encontram.
  </p>

  <p class="suite-desc">
    O <strong>BagiCo. Suite</strong> &eacute; um sistema de gest&atilde;o de marketing desenhado para marcas que recusam o comum. <strong>Uma plataforma completa, inovadora e visceral</strong> &mdash; criada para quem leva a s&eacute;rio o crescimento da sua marca. Em breve.
  </p>

  <button class="waitlist-btn" id="openModal" aria-label="Entrar na lista de espera">
    Quero entrar na lista de espera
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </button>
</main>

<!-- MODAL -->
<div class="modal-overlay" id="modalOverlay" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
  <div class="modal">
    <button class="modal-close" id="closeModal" aria-label="Fechar">&times;</button>

    <div id="formContainer">
      <p class="modal-label">Lista de espera</p>
      <h2 class="modal-title" id="modalTitle">Reserve seu lugar<br>no futuro<span style="color:var(--desire)">.</span></h2>
      <p class="modal-sub">Seja um dos primeiros a acessar o BagiCo. Suite quando lan&ccedil;armos. Voc&ecirc; receber&aacute; acesso priorit&aacute;rio e condi&ccedil;&otilde;es exclusivas.</p>

      <form id="waitlistForm" novalidate>
        <div class="form-grid">
          <div class="form-group">
            <label class="form-label" for="nome">Nome completo *</label>
            <input class="form-input" type="text" id="nome" name="nome" placeholder="Seu nome" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="empresa">Empresa *</label>
            <input class="form-input" type="text" id="empresa" name="empresa" placeholder="Nome da empresa" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="cargo">Cargo *</label>
            <input class="form-input" type="text" id="cargo" name="cargo" placeholder="Seu cargo" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="telefone">Telefone</label>
            <input class="form-input" type="tel" id="telefone" name="telefone" placeholder="(51) 99999-9999">
          </div>
          <div class="form-group form-full">
            <label class="form-label" for="email">E-mail *</label>
            <input class="form-input" type="email" id="email" name="email" placeholder="seu@email.com" required>
          </div>
        </div>

        <p class="form-error" id="formError">Por favor, preencha todos os campos obrigat&oacute;rios.</p>

        <div class="form-actions">
          <button type="button" class="btn-clear" id="clearForm">Limpar</button>
          <button type="submit" class="btn-submit" id="submitBtn">Garantir meu lugar</button>
        </div>
      </form>
    </div>

    <div class="form-feedback" id="formSuccess">
      <div class="feedback-icon">&#10003;</div>
      <h3 class="feedback-title">Voc&ecirc; est&aacute; na lista<span style="color:var(--desire)">.</span></h3>
      <p class="feedback-sub">Recebemos seu cadastro. Voc&ecirc; ser&aacute; um dos primeiros a saber quando o BagiCo. Suite estiver dispon&iacute;vel.<br><br>Fique de olho no seu e-mail.</p>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer aria-label="Rodap&eacute; BagiCo">
  <a href="/" class="footer-logo">BagiCo<span>.</span></a>
  <ul class="footer-nav">
    <li><a href="/#manifesto">Sobre</a></li>
    <li><a href="/#servicos">Servi&ccedil;os</a></li>
    <li><a href="/#niveis">Modelos</a></li>
    <li><a href="/#contato">Contato</a></li>
  </ul>
  <div class="footer-social">
    <a href="https://instagram.com/bagico.agencia" target="_blank" rel="noopener noreferrer" title="Instagram BagiCo" aria-label="Instagram">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/></svg>
    </a>
    <a href="https://tiktok.com/@bagico.agencia" target="_blank" rel="noopener noreferrer" title="TikTok BagiCo" aria-label="TikTok">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg>
    </a>
    <a href="http://facebook.com/bagicoagencia" target="_blank" rel="noopener noreferrer" title="Facebook BagiCo" aria-label="Facebook">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
    </a>
    <a href="https://www.linkedin.com/company/bagico" target="_blank" rel="noopener noreferrer" title="LinkedIn BagiCo" aria-label="LinkedIn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
    </a>
  </div>
  <p class="footer-copy">&copy; 2025 BagiCo. Todos os direitos reservados. Porto Alegre &mdash; Brasil.</p>
</footer>

<script>
  // =============================================
  // EMAILJS — CONFIGURAÇÃO
  // Substitua os valores abaixo após criar sua conta em emailjs.com
  // =============================================
  var EMAILJS_PUBLIC_KEY  = 'xdFnRdHocu4f8Ysom';
  var EMAILJS_SERVICE_ID  = 'service_t4sky7n';
  var EMAILJS_TEMPLATE_ID = 'template_12r7bmq';
  // =============================================

  (function() {
    emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY });
  })();

  // CURSOR
  var cursor = document.getElementById('cursor');
  var ring   = document.getElementById('cursorRing');
  var mx = 0, my = 0, rx = 0, ry = 0;
  document.addEventListener('mousemove', function(e) {
    mx = e.clientX; my = e.clientY;
    cursor.style.left = mx + 'px';
    cursor.style.top  = my + 'px';
  });
  function animateRing() {
    rx += (mx - rx) * 0.12;
    ry += (my - ry) * 0.12;
    ring.style.left = rx + 'px';
    ring.style.top  = ry + 'px';
    requestAnimationFrame(animateRing);
  }
  animateRing();
  document.querySelectorAll('a, button').forEach(function(el) {
    el.addEventListener('mouseenter', function() {
      cursor.style.transform = 'translate(-50%,-50%) scale(2.5)';
      ring.style.width  = '48px';
      ring.style.height = '48px';
    });
    el.addEventListener('mouseleave', function() {
      cursor.style.transform = 'translate(-50%,-50%) scale(1)';
      ring.style.width  = '32px';
      ring.style.height = '32px';
    });
  });

  // MODAL
  var overlay    = document.getElementById('modalOverlay');
  var openBtn    = document.getElementById('openModal');
  var closeBtn   = document.getElementById('closeModal');

  openBtn.addEventListener('click', function() {
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  });

  function closeModal() {
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  closeBtn.addEventListener('click', closeModal);
  overlay.addEventListener('click', function(e) {
    if (e.target === overlay) closeModal();
  });
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeModal();
  });

  // LIMPAR FORMULÁRIO
  document.getElementById('clearForm').addEventListener('click', function() {
    document.getElementById('waitlistForm').reset();
    document.getElementById('formError').classList.remove('visible');
  });

  // ENVIAR FORMULÁRIO
  document.getElementById('waitlistForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var nome     = document.getElementById('nome').value.trim();
    var empresa  = document.getElementById('empresa').value.trim();
    var cargo    = document.getElementById('cargo').value.trim();
    var telefone = document.getElementById('telefone').value.trim();
    var email    = document.getElementById('email').value.trim();
    var errorEl  = document.getElementById('formError');
    var submitBtn = document.getElementById('submitBtn');

    // Validação
    if (!nome || !empresa || !cargo || !email) {
      errorEl.classList.add('visible');
      return;
    }
    errorEl.classList.remove('visible');

    // Desabilita botão durante envio
    submitBtn.disabled = true;
    submitBtn.textContent = 'Enviando...';

    var templateParams = {
      to_email : 'irwing@outlook.com.br',
      from_name: nome,
      empresa  : empresa,
      cargo    : cargo,
      telefone : telefone || 'N&atilde;o informado',
      email    : email,
      reply_to : email
    };

    emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, templateParams)
      .then(function() {
        document.getElementById('formContainer').style.display = 'none';
        document.getElementById('formSuccess').classList.add('success');
      })
      .catch(function(err) {
        console.error('EmailJS erro:', err);
        submitBtn.disabled = false;
        submitBtn.textContent = 'Garantir meu lugar';
        errorEl.textContent = 'Erro ao enviar. Tente novamente ou entre em contato pelo WhatsApp.';
        errorEl.classList.add('visible');
      });
  });
</script>
</body>
</html>
