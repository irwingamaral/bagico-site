<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 — Página não encontrada | BagiCo</title>
<meta name="robots" content="noindex, nofollow">
<link rel="icon" type="image/png" href="/img/bagico_favicon.png">

<link rel="stylesheet" href="/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>:root{--noir:#0a0a0a;--carbon:#161616;--graphite:#1e1e1e;--ash:#8a8a8a;--ivory:#f5f5f5;--desire:#C0392B;--ember:#6b1c14;--serif:'Cormorant Garamond',Georgia,serif;--sans:'DM Sans',sans-serif;}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}html{scroll-behavior:smooth;}
body{background:var(--bg);color:var(--text-primary);font-family:var(--sans);font-weight:300;overflow-x:hidden;cursor:none;}
.cursor{position:fixed;width:8px;height:8px;background:var(--desire);border-radius:50%;pointer-events:none;z-index:9999;transition:transform .15s ease;transform:translate(-50%,-50%);}
.cursor-ring{position:fixed;width:32px;height:32px;border:1px solid rgba(192,57,43,.4);border-radius:50%;pointer-events:none;z-index:9998;transition:transform .4s ease,width .3s ease,height .3s ease;transform:translate(-50%,-50%);}
@media(hover:none) and (pointer:coarse){.cursor,.cursor-ring{display:none!important;}body{cursor:auto;}}
nav{position:fixed;top:0;left:0;right:0;z-index:100;padding:28px 60px;display:flex;align-items:center;justify-content:space-between;}
nav::before{content:'';position:absolute;inset:0;background:linear-gradient(to bottom,rgba(10,10,10,.95) 0%,transparent 100%);pointer-events:none;}
.logo{font-family:var(--serif);font-size:22px;font-weight:400;color:var(--text-secondary);letter-spacing:-.5px;position:relative;z-index:1;text-decoration:none;}
.logo span{color:var(--desire);}
.nav-links{display:flex;align-items:center;gap:28px;list-style:none;position:relative;z-index:1;}
.nav-links li{display:flex;align-items:center;}
.nav-links a{font-size:12px;font-weight:400;color:var(--text-secondary);text-decoration:none;letter-spacing:.12em;text-transform:uppercase;transition:color .3s ease;}
.nav-links a:hover{color:var(--text-primary);}
.nav-actions{display:flex;align-items:center;gap:12px;position:relative;z-index:1;}
.nav-suite-link{font-size:12px;color:var(--text-secondary);letter-spacing:.12em;text-transform:uppercase;border:1px solid var(--border);padding:10px 22px;text-decoration:none;transition:color .3s,border-color .3s;}
.nav-suite-link:hover{color:var(--text-primary);border-color:var(--text-secondary);}
.nav-cta{font-size:12px;color:var(--text-primary);text-decoration:none;letter-spacing:.12em;text-transform:uppercase;border:1px solid rgba(192,57,43,.5);padding:10px 22px;transition:background .3s,border-color .3s;}
.nav-cta:hover{background:var(--desire);border-color:var(--desire);}
.nav-dropdown{position:relative;display:flex;align-items:center;}
.nav-dropdown-trigger{font-size:11px;font-weight:400;color:var(--desire);letter-spacing:.1em;text-transform:uppercase;cursor:pointer;display:flex;align-items:center;gap:6px;transition:opacity .3s;user-select:none;}
.nav-dropdown-trigger:hover{opacity:.8;}
.nav-dropdown-trigger::after{content:'\25BE';font-size:9px;transition:transform .3s;}
.nav-dropdown:hover .nav-dropdown-trigger::after{transform:rotate(180deg);}
.nav-dropdown-menu{position:absolute;top:100%;left:50%;transform:translateX(-50%);min-width:220px;z-index:200;opacity:0;pointer-events:none;transition:opacity .25s ease;}
.nav-dropdown-menu::before{content:'';display:block;height:20px;}
.nav-dropdown:hover .nav-dropdown-menu{opacity:1;pointer-events:all;}
.nav-dropdown-menu-inner{background:var(--surface);border:1px solid var(--border);}
.nav-dropdown-menu a{display:block;padding:13px 18px;font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--text-secondary);text-decoration:none;border-bottom:1px solid var(--graphite);transition:color .2s,background .2s;}
.nav-dropdown-menu a:last-child{border-bottom:none;}
.nav-dropdown-menu a:hover{color:var(--text-primary);background:var(--graphite);}
.nav-dropdown-menu a span{color:var(--desire);margin-right:8px;font-size:8px;}
.mobile-toggle{display:none;flex-direction:column;justify-content:center;align-items:center;gap:5px;cursor:pointer;position:relative;z-index:101;padding:10px;width:44px;height:44px;border:1px solid var(--border);background:transparent;flex-shrink:0;}
.mobile-toggle span{display:block;width:20px;height:1.5px;background:var(--desire);transition:transform .3s ease,opacity .3s ease;}
.mobile-toggle.open span:nth-child(1){transform:translateY(6.5px) rotate(45deg);}
.mobile-toggle.open span:nth-child(2){opacity:0;}
.mobile-toggle.open span:nth-child(3){transform:translateY(-6.5px) rotate(-45deg);}
.mobile-menu{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:var(--bg);z-index:99;flex-direction:column;justify-content:center;align-items:flex-start;padding:100px 40px 60px;overflow-y:auto;}
.mobile-menu.open{display:flex;}
.mobile-menu a{font-family:var(--serif);font-size:32px;font-weight:300;color:var(--text-primary);text-decoration:none;letter-spacing:-.5px;line-height:1.2;margin-bottom:24px;transition:color .2s;}
.mobile-menu a:hover{color:var(--text-secondary);}
.mobile-section-title{font-size:12px;font-family:var(--sans);letter-spacing:.2em;text-transform:uppercase;color:var(--desire);margin-top:32px;margin-bottom:16px;font-weight:400;}
.mobile-sub-links{display:flex;flex-direction:column;gap:12px;margin-bottom:32px;}
.mobile-sub-links a{font-family:var(--sans)!important;font-size:13px!important;letter-spacing:.12em;text-transform:uppercase;color:var(--ash)!important;margin-bottom:0!important;}
.mobile-cta{margin-top:40px;background:var(--desire);color:var(--ivory)!important;font-family:var(--sans)!important;font-size:12px!important;letter-spacing:.15em!important;text-transform:uppercase;padding:16px 32px;display:inline-block;margin-bottom:0!important;}
.mobile-suite{font-family:var(--sans)!important;font-size:12px!important;letter-spacing:.12em;text-transform:uppercase;color:var(--ash)!important;border:1px solid var(--border);padding:12px 24px;margin-top:16px;margin-bottom:0!important;}
footer{padding:48px 60px;border-top:1px solid var(--graphite);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;}
.footer-logo{font-family:var(--serif);font-size:18px;color:var(--text-secondary);text-decoration:none;}
.footer-logo span{color:var(--desire);}
.footer-nav{display:flex;gap:28px;list-style:none;}
.footer-nav a{font-size:11px;letter-spacing:.12em;text-transform:uppercase;color:var(--text-secondary);text-decoration:none;opacity:.5;transition:opacity .3s;}
.footer-nav a:hover{opacity:1;}
.footer-social{display:flex;gap:18px;}
.footer-social a{color:var(--text-secondary);opacity:.5;transition:opacity .3s;display:flex;}
.footer-social a:hover{opacity:1;}
.footer-copy{font-size:11px;color:var(--text-secondary);opacity:.4;}
@keyframes fadeUp{from{opacity:0;transform:translateY(20px);}to{opacity:1;transform:translateY(0);}}
@media(max-width:900px){nav{padding:24px 28px;}.nav-links,.nav-actions{display:none!important;}.mobile-toggle{display:flex;}footer{padding:40px 28px;flex-direction:column;text-align:center;}}</style>
<?php include 'tags.php'; ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TR84VR9W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>
<nav>
  <a href="/" class="logo">BagiCo<span>.</span></a>
  <ul class="nav-links">
    <li><a href="/">Home</a></li>
    <li><a href="/#manifesto">Sobre</a></li>
    <li><a href="/#servicos">Serviços</a></li>
    <li><a href="/#niveis">Modelos</a></li>
    <li><a href="/#valores">Valores</a></li>
    <li class="nav-dropdown">
      <span class="nav-dropdown-trigger">Elevar minha marca</span>
      <div class="nav-dropdown-menu">
        <div class="nav-dropdown-menu-inner">
          <a href="/identidade-visual.php"><span>●</span> Identidade Visual</a>
          <a href="/social-media.php"><span>●</span> Social Media</a>
          <a href="/sites.php"><span>●</span> Criação de Sites</a>
          <a href="/trafego.php"><span>●</span> Tráfego Pago</a>
          <a href="/consultoria.php"><span>●</span> Consultoria</a>
          <a href="/ia.php"><span>●</span> IA para meu negócio</a>
          <a href="/palestras.php"><span>●</span> Palestras</a>
          <a href="/outros.php"><span>●</span> Outros serviços</a>
        </div>
      </div>
    </li>
    <li><a href="/em-breve">Blog</a></li>
  </ul>
  <div class="nav-actions">
    <a href="/suite.php" class="nav-suite-link">BagiCo<span style="color:var(--desire)">.</span> Suite</a>
    <a href="https://wa.me/5551993535790?text=Ol%C3%A1%21%20Vim%20pelo%20site%20da%20BagiCo%20e%20quero%20falar%20com%20voc%C3%AAs." target="_blank" class="nav-cta">Fale conosco</a>
  </div>
</nav>
<button class="theme-toggle" id="themeToggle" aria-label="Alternar tema claro/escuro">
  <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
  <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
</button>
<button class="mobile-toggle" id="mobileToggle" aria-label="Abrir menu">
  <span></span><span></span><span></span>
</button>
<div class="mobile-menu" id="mobileMenu">
  <a href="/">Home</a>
  <a href="/#manifesto">Sobre</a>
  <a href="/#servicos">Serviços</a>
  <a href="/#niveis">Modelos</a>
  <a href="/#valores">Valores</a>
  <span class="mobile-section-title">Elevar minha marca</span>
  <div class="mobile-sub-links">
    <a href="/identidade-visual.php">Identidade Visual</a>
    <a href="/social-media.php">Social Media</a>
    <a href="/sites.php">Criação de Sites</a>
    <a href="/trafego.php">Tráfego Pago</a>
    <a href="/consultoria.php">Consultoria</a>
    <a href="/ia.php">IA para meu negócio</a>
    <a href="/palestras.php">Palestras</a>
    <a href="/outros.php">Outros serviços</a>
  </div>
  <a href="/em-breve">Blog</a>
  <a href="/suite.php" class="mobile-suite">BagiCo. Suite</a>
  <a href="https://wa.me/5551993535790?text=Ol%C3%A1%21%20Vim%20pelo%20site%20da%20BagiCo%20e%20quero%20falar%20com%20voc%C3%AAs." target="_blank" class="mobile-cta">Fale conosco</a>
</div>
<style>
  .error-page{min-height:100vh;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:120px 96px;}
  .error-page::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50% 50%,rgba(192,57,43,.06) 0%,transparent 65%);}
  .error-content{text-align:center;position:relative;z-index:2;}
  .error-code{font-family:var(--serif);font-size:clamp(140px,20vw,280px);font-weight:300;line-height:1;color:var(--graphite);display:block;margin-bottom:-20px;opacity:0;animation:fadeUp .8s ease .1s forwards;}
  .error-title{font-family:var(--serif);font-size:clamp(32px,4vw,56px);font-weight:300;color:var(--text-primary);margin-bottom:20px;opacity:0;animation:fadeUp .8s ease .3s forwards;}
  .error-title em{font-style:italic;color:var(--text-secondary);}
  .error-sub{font-size:15px;color:var(--text-secondary);line-height:1.8;max-width:480px;margin:0 auto 48px;opacity:0;animation:fadeUp .8s ease .5s forwards;}
  .error-actions{display:flex;justify-content:center;gap:16px;flex-wrap:wrap;opacity:0;animation:fadeUp .8s ease .7s forwards;}
  .btn-primary{background:var(--desire);color:var(--text-primary);text-decoration:none;font-size:12px;letter-spacing:.15em;text-transform:uppercase;padding:16px 36px;transition:background .3s,transform .2s;display:inline-block;}
  .btn-primary:hover{background:var(--ember);transform:translateY(-1px);}
  .btn-secondary{color:var(--text-secondary);text-decoration:none;font-size:12px;letter-spacing:.15em;text-transform:uppercase;border:1px solid var(--border);padding:16px 28px;transition:color .3s,border-color .3s;}
  .btn-secondary:hover{color:var(--text-primary);border-color:var(--text-secondary);}
  .error-dot{width:6px;height:6px;border-radius:50%;background:var(--desire);display:inline-block;margin:0 8px;vertical-align:middle;}
</style>
<section class="error-page">
  <div class="error-content">
    <span class="error-code">404</span>
    <h1 class="error-title">Página <em>não encontrada</em></h1>
    <p class="error-sub">A página que você procura não existe ou foi movida.<span class="error-dot"></span>Mas a BagiCo continua aqui.</p>
    <div class="error-actions">
      <a href="/" class="btn-primary">Voltar ao início</a>
      <a href="https://wa.me/5551993535790?text=Ol%C3%A1%21%20Vim%20pelo%20site%20da%20BagiCo%20e%20quero%20falar%20com%20voc%C3%AAs." target="_blank" class="btn-secondary">Falar conosco</a>
    </div>
  </div>
</section>
<footer>
  <a href="/" class="footer-logo">BagiCo<span>.</span></a>
  <ul class="footer-nav">
    <li><a href="/#manifesto">Sobre</a></li>
    <li><a href="/#servicos">Serviços</a></li>
    <li><a href="/#niveis">Modelos</a></li>
    <li><a href="/#contato">Contato</a></li>
  </ul>
  <div class="footer-social">
    <a href="https://instagram.com/bagico.agencia" target="_blank" aria-label="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/></svg></a>
    <a href="https://tiktok.com/@bagico.agencia" target="_blank" aria-label="TikTok"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg></a>
    <a href="http://facebook.com/bagicoagencia" target="_blank" aria-label="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
    <a href="https://www.linkedin.com/company/bagico" target="_blank" aria-label="LinkedIn"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
  </div>
  <p class="footer-copy">© 2026 BagiCo. Todos os direitos reservados. Porto Alegre, RS · Atendemos todo o Brasil.</p>
</footer>
<script>var cursor=document.getElementById('cursor'),ring=document.getElementById('cursorRing'),mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',function(e){mx=e.clientX;my=e.clientY;cursor.style.left=mx+'px';cursor.style.top=my+'px';});
function animateRing(){rx+=(mx-rx)*.12;ry+=(my-ry)*.12;ring.style.left=rx+'px';ring.style.top=ry+'px';requestAnimationFrame(animateRing);}
animateRing();
document.querySelectorAll('a,button').forEach(function(el){el.addEventListener('mouseenter',function(){cursor.style.transform='translate(-50%,-50%) scale(2.5)';ring.style.width='48px';ring.style.height='48px';});el.addEventListener('mouseleave',function(){cursor.style.transform='translate(-50%,-50%) scale(1)';ring.style.width='32px';ring.style.height='32px';});});
(function(){var toggle=document.getElementById('mobileToggle'),menu=document.getElementById('mobileMenu');if(!toggle||!menu)return;toggle.addEventListener('click',function(e){e.stopPropagation();var isOpen=menu.classList.contains('open');menu.classList.toggle('open');toggle.classList.toggle('open');document.body.style.overflow=isOpen?'':'hidden';});menu.querySelectorAll('a').forEach(function(a){a.addEventListener('click',function(){menu.classList.remove('open');toggle.classList.remove('open');document.body.style.overflow='';});});document.addEventListener('click',function(e){if(menu.classList.contains('open')&&!menu.contains(e.target)&&e.target!==toggle){menu.classList.remove('open');toggle.classList.remove('open');document.body.style.overflow='';}});})();
  // ---- Tema claro/escuro ----
  (function() {
    var root = document.documentElement;
    var btn = document.getElementById('themeToggle');
    // Verificar preferência salva
    var saved = localStorage.getItem('bagico-theme');
    // Verificar preferência do sistema
    var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    var theme = saved || (prefersDark ? 'dark' : 'light');
    root.setAttribute('data-theme', theme);
    if (btn) {
      btn.addEventListener('click', function() {
        var current = root.getAttribute('data-theme');
        var next = current === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', next);
        localStorage.setItem('bagico-theme', next);
      });
    }
  })();
</script>
</body>
</html>