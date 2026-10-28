@verbatim
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sitesking — Tu web profesional con IA por 29€/mes</title>
<meta name="description" content="Tu web profesional, con IA y panel de control autogestionable, servidor incluido. 29€ al mes. Sin permanencia, sin compromiso, sin letra pequeña. Un producto de Hawkins.">
<meta property="og:title" content="Sitesking — Tu web profesional con IA por 29€/mes">
<meta property="og:description" content="Web profesional con IA, panel de control y servidor incluido por 29€/mes. Sin permanencia. Un producto de Hawkins.">
<meta property="og:type" content="website">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#0a0b0d; --bg:#0a0b0d; --surface:#121419; --surface-2:#171a21;
    --line:rgba(255,255,255,.09); --line-strong:rgba(255,255,255,.16);
    --text:#f4f6f8; --muted:#9aa2ad; --muted-2:#6b7280;
    --accent:#56b8e8; --accent-2:#8ad0f2; --accent-deep:#2f93c9;
    --radius:18px; --maxw:1140px;
    --shadow:0 24px 60px -24px rgba(0,0,0,.7);
    font-synthesis:none;
  }
  *{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth}
  body{
    background:var(--bg); color:var(--text);
    font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,sans-serif;
    line-height:1.6; -webkit-font-smoothing:antialiased; overflow-x:hidden;
  }
  a{color:inherit;text-decoration:none}
  .wrap{max-width:var(--maxw);margin:0 auto;padding:0 24px}
  .serif{font-family:'Fraunces',Georgia,serif;font-weight:600;letter-spacing:-.01em}
  .accent{color:var(--accent)}
  .muted{color:var(--muted)}

  /* ambient glow + triangles */
  .bg-fx{position:fixed;inset:0;z-index:-1;overflow:hidden;pointer-events:none}
  .bg-fx .glow{position:absolute;width:720px;height:720px;border-radius:50%;filter:blur(120px);opacity:.22}
  .bg-fx .g1{background:#2f93c9;top:-220px;left:-160px}
  .bg-fx .g2{background:#1c6fa0;bottom:-320px;right:-220px;opacity:.16}
  .grid-tex{position:absolute;inset:0;background-image:linear-gradient(var(--line) 1px,transparent 1px),linear-gradient(90deg,var(--line) 1px,transparent 1px);background-size:64px 64px;mask-image:radial-gradient(ellipse 80% 60% at 50% 0%,#000 30%,transparent 75%);opacity:.5}

  /* nav */
  header.nav{position:sticky;top:0;z-index:50;backdrop-filter:blur(12px);background:rgba(10,11,13,.72);border-bottom:1px solid var(--line)}
  .nav-in{display:flex;align-items:center;justify-content:space-between;height:70px}
  .brand{display:flex;align-items:center;gap:12px;font-weight:800;font-size:22px;letter-spacing:-.02em}
  .brand .mark{display:inline-grid;place-items:center;width:34px;height:34px;border-radius:9px;background:linear-gradient(145deg,var(--accent),var(--accent-deep));color:#06202e;font-weight:800}
  .brand .by{display:flex;align-items:center;gap:7px;font-size:12px;font-weight:600;color:var(--muted);border-left:1px solid var(--line-strong);padding-left:12px;margin-left:4px}
  .brand .by img{height:15px;width:auto;opacity:.92;transform:translateY(1px)}
  .nav-links{display:flex;align-items:center;gap:30px}
  .nav-links a{font-size:14.5px;color:var(--muted);font-weight:500}
  .nav-links a:hover{color:var(--text)}
  .btn{display:inline-flex;align-items:center;gap:9px;font-weight:600;font-size:15px;border-radius:999px;padding:12px 22px;border:1px solid transparent;cursor:pointer;transition:transform .15s ease,box-shadow .2s ease,background .2s}
  .btn-primary{background:linear-gradient(145deg,var(--accent),var(--accent-deep));color:#042030;box-shadow:0 10px 30px -10px rgba(86,184,232,.6)}
  .btn-primary:hover{transform:translateY(-2px);box-shadow:0 16px 40px -12px rgba(86,184,232,.75)}
  .btn-ghost{background:transparent;border-color:var(--line-strong);color:var(--text)}
  .btn-ghost:hover{background:var(--surface-2);border-color:var(--accent)}
  .btn-lg{padding:16px 30px;font-size:16.5px}

  /* hero */
  .hero{padding:84px 0 56px;position:relative}
  .pill{display:inline-flex;align-items:center;gap:9px;font-size:13px;font-weight:600;color:var(--accent-2);background:rgba(86,184,232,.1);border:1px solid rgba(86,184,232,.28);padding:7px 15px;border-radius:999px}
  .dot{width:7px;height:7px;border-radius:50%;background:var(--accent);box-shadow:0 0 0 4px rgba(86,184,232,.2)}
  h1.hero-t{font-size:clamp(40px,6.4vw,72px);line-height:1.03;letter-spacing:-.03em;font-weight:800;margin:22px 0 0}
  h1.hero-t .serif{font-weight:600;font-style:italic}
  .hero-sub{font-size:clamp(17px,2.2vw,21px);color:var(--muted);max-width:620px;margin:22px 0 0}
  .price-inline{color:var(--text);font-weight:700}
  .hero-cta{display:flex;flex-wrap:wrap;gap:14px;margin-top:34px}
  .reassure{display:flex;flex-wrap:wrap;gap:18px 26px;margin-top:26px;font-size:14px;color:var(--muted)}
  .reassure span{display:inline-flex;align-items:center;gap:8px}
  .check{color:var(--accent)}

  /* trust strip */
  .trust{margin-top:56px;border-top:1px solid var(--line);border-bottom:1px solid var(--line);padding:22px 0}
  .trust-in{display:flex;flex-wrap:wrap;align-items:center;gap:14px 30px;justify-content:space-between}
  .trust-label{font-size:12.5px;letter-spacing:.14em;text-transform:uppercase;color:var(--muted-2);font-weight:600}
  .logos{display:flex;flex-wrap:wrap;gap:12px 28px;align-items:center}
  .logos span{font-family:'Fraunces',serif;font-size:19px;font-weight:600;color:#c3c9d1;opacity:.82;white-space:nowrap}

  /* sections */
  section{padding:88px 0}
  .eyebrow{font-size:13px;letter-spacing:.16em;text-transform:uppercase;color:var(--accent);font-weight:700}
  h2{font-size:clamp(30px,4.4vw,46px);line-height:1.08;letter-spacing:-.025em;font-weight:800;margin-top:14px}
  .lead{color:var(--muted);font-size:18px;max-width:640px;margin-top:16px}
  .center{text-align:center}
  .center .lead{margin-left:auto;margin-right:auto}

  /* contrast / "si pagas más" */
  .contrast{background:
    radial-gradient(120% 120% at 50% -10%,rgba(86,184,232,.08),transparent 60%),
    var(--surface);border:1px solid var(--line);border-radius:28px;padding:56px clamp(24px,5vw,64px);text-align:center}
  .contrast h2{max-width:900px;margin-left:auto;margin-right:auto}
  .vs{display:grid;grid-template-columns:1fr auto 1fr;gap:20px;align-items:stretch;margin-top:42px;max-width:820px;margin-inline:auto;text-align:left}
  .vs-card{border:1px solid var(--line);border-radius:16px;padding:26px;background:var(--bg)}
  .vs-card.win{border-color:rgba(86,184,232,.45);background:linear-gradient(180deg,rgba(86,184,232,.08),transparent)}
  .vs-card .amt{font-size:30px;font-weight:800;letter-spacing:-.02em}
  .vs-card.win .amt{color:var(--accent)}
  .vs-card .amt small{font-size:15px;color:var(--muted);font-weight:600}
  .vs-card p{color:var(--muted);font-size:14.5px;margin-top:8px}
  .vs .mid{display:grid;place-items:center;color:var(--muted-2);font-weight:700;font-size:14px}
  @media(max-width:720px){.vs{grid-template-columns:1fr}.vs .mid{padding:4px}}

  /* features */
  .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:48px}
  .card{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:28px;transition:transform .2s ease,border-color .2s}
  .card:hover{transform:translateY(-4px);border-color:var(--line-strong)}
  .ic{width:46px;height:46px;border-radius:12px;display:grid;place-items:center;background:rgba(86,184,232,.12);border:1px solid rgba(86,184,232,.25);margin-bottom:16px}
  .ic svg{width:23px;height:23px;stroke:var(--accent);fill:none;stroke-width:1.8}
  .card h3{font-size:18.5px;font-weight:700;letter-spacing:-.01em}
  .card p{color:var(--muted);font-size:14.6px;margin-top:8px}
  @media(max-width:860px){.grid{grid-template-columns:repeat(2,1fr)}}
  @media(max-width:560px){.grid{grid-template-columns:1fr}}

  /* steps */
  .steps{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:48px;counter-reset:s}
  .step{position:relative;padding:28px;border:1px solid var(--line);border-radius:var(--radius);background:var(--surface)}
  .step::before{counter-increment:s;content:"0" counter(s);font-family:'Fraunces',serif;font-size:40px;color:var(--accent);opacity:.8;font-weight:600}
  .step h3{margin-top:10px;font-size:19px;font-weight:700}
  .step p{color:var(--muted);font-size:14.6px;margin-top:8px}
  @media(max-width:760px){.steps{grid-template-columns:1fr}}

  /* backed by hawkins */
  .backed{background:var(--surface);border:1px solid var(--line);border-radius:28px;padding:50px clamp(24px,5vw,56px);display:grid;grid-template-columns:1.1fr 1fr;gap:40px;align-items:center}
  .backed .hk-logo{display:flex;align-items:center;gap:14px;margin-bottom:18px}
  .backed .hk-logo img{height:26px}
  .backed .hk-logo .since{font-size:12.5px;color:var(--muted);border-left:1px solid var(--line-strong);padding-left:14px}
  .stats{display:flex;gap:30px;flex-wrap:wrap;margin-top:22px}
  .stat .n{font-size:30px;font-weight:800;letter-spacing:-.02em;color:var(--accent)}
  .stat .l{font-size:13px;color:var(--muted)}
  .client-wall{display:flex;flex-wrap:wrap;gap:10px}
  .client-wall span{font-family:'Fraunces',serif;font-size:16px;color:#cfd4db;border:1px solid var(--line);border-radius:10px;padding:9px 14px;background:var(--bg)}
  @media(max-width:820px){.backed{grid-template-columns:1fr;gap:26px}}

  /* pricing */
  .price-wrap{display:grid;place-items:center;margin-top:48px}
  .price-card{width:min(460px,100%);background:
    radial-gradient(130% 100% at 50% 0%,rgba(86,184,232,.12),transparent 55%),var(--surface);
    border:1px solid rgba(86,184,232,.35);border-radius:26px;padding:40px;text-align:center;box-shadow:var(--shadow);position:relative}
  .price-card .tag{position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:linear-gradient(145deg,var(--accent),var(--accent-deep));color:#042030;font-size:12.5px;font-weight:700;padding:6px 16px;border-radius:999px}
  .price-card .amount{font-size:66px;font-weight:800;letter-spacing:-.03em;line-height:1;margin-top:8px}
  .price-card .amount small{font-size:19px;color:var(--muted);font-weight:600;letter-spacing:0}
  .price-card .note{color:var(--muted);font-size:14.5px;margin-top:6px}
  .plist{text-align:left;margin:26px 0;display:grid;gap:12px}
  .plist li{list-style:none;display:flex;gap:11px;font-size:15px;color:#e6e9ed}
  .plist li svg{flex:0 0 auto;width:20px;height:20px;stroke:var(--accent);fill:none;stroke-width:2;margin-top:2px}
  .price-card .btn{width:100%;justify-content:center}
  .price-fine{font-size:12.8px;color:var(--muted-2);margin-top:14px}

  /* faq */
  .faq{max-width:780px;margin:44px auto 0}
  details{border:1px solid var(--line);border-radius:14px;padding:4px 20px;background:var(--surface);margin-bottom:12px}
  details[open]{border-color:var(--line-strong)}
  summary{cursor:pointer;list-style:none;padding:16px 0;font-weight:600;font-size:16.5px;display:flex;justify-content:space-between;align-items:center;gap:16px}
  summary::-webkit-details-marker{display:none}
  summary .plus{color:var(--accent);font-size:22px;transition:transform .2s;flex:0 0 auto}
  details[open] summary .plus{transform:rotate(45deg)}
  details p{color:var(--muted);font-size:15px;padding:0 0 18px}

  /* final cta */
  .final{text-align:center;background:
    radial-gradient(120% 140% at 50% 0%,rgba(86,184,232,.14),transparent 60%),var(--surface);
    border:1px solid var(--line);border-radius:28px;padding:64px clamp(24px,5vw,48px)}
  .final h2{max-width:720px;margin-inline:auto}

  /* footer */
  footer{border-top:1px solid var(--line);padding:50px 0 44px;margin-top:40px}
  .foot-in{display:flex;flex-wrap:wrap;justify-content:space-between;gap:28px}
  .foot-brand{max-width:320px}
  .foot-brand .by-hawkins{display:flex;align-items:center;gap:10px;margin-top:14px;color:var(--muted);font-size:14px}
  .foot-brand .by-hawkins img{height:18px}
  .foot-cols{display:flex;gap:60px;flex-wrap:wrap}
  .foot-cols h4{font-size:12.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--muted-2);margin-bottom:14px}
  .foot-cols a{display:block;color:var(--muted);font-size:14.5px;margin-bottom:9px}
  .foot-cols a:hover{color:var(--text)}
  .legal{margin-top:36px;padding-top:22px;border-top:1px solid var(--line);color:var(--muted-2);font-size:13px;display:flex;flex-wrap:wrap;gap:8px 22px;justify-content:space-between}

  /* scroll stage (efecto cinematográfico) */
  .stage{position:relative;height:360vh}
  .stage-sticky{position:sticky;top:0;height:100vh;overflow:hidden;display:grid;place-items:center}
  .stage-sticky .layer{position:absolute;will-change:transform,opacity}
  .big-price{font-weight:800;letter-spacing:-.045em;line-height:.82;text-align:center;opacity:0}
  .big-price .num{display:block;font-size:min(38vw,520px);background:linear-gradient(160deg,#aadef6,#56b8e8 42%,#2f93c9);-webkit-background-clip:text;background-clip:text;color:transparent;filter:drop-shadow(0 24px 70px rgba(86,184,232,.4))}
  .big-price .per{display:block;font-size:min(6vw,54px);color:var(--muted);font-weight:700;letter-spacing:-.01em;margin-top:.02em}
  .big-word{font-weight:800;font-size:min(10.5vw,152px);letter-spacing:-.02em;line-height:.9;text-align:center;opacity:0;text-transform:uppercase;text-shadow:0 20px 60px rgba(0,0,0,.6)}
  .big-word b{color:var(--accent)}
  .float-web{width:min(62vw,540px);opacity:0}
  .browser{border-radius:14px;border:1px solid var(--line-strong);background:var(--surface);box-shadow:0 46px 100px -30px rgba(0,0,0,.85);overflow:hidden}
  .browser .bar{display:flex;align-items:center;gap:7px;padding:11px 14px;background:var(--surface-2);border-bottom:1px solid var(--line)}
  .browser .bar i{width:11px;height:11px;border-radius:50%;background:#2c313b;display:inline-block}
  .browser .bar .u{margin-left:12px;font-size:12px;color:var(--muted-2);background:var(--bg);border-radius:6px;padding:4px 14px}
  .browser .shot{aspect-ratio:16/10;background:radial-gradient(90% 70% at 18% 0%,rgba(86,184,232,.2),transparent 60%),linear-gradient(180deg,#0e1014,#0a0b0d);display:flex;flex-direction:column;gap:12px;padding:26px}
  .browser .shot .h{height:16px;width:46%;border-radius:6px;background:linear-gradient(90deg,var(--accent),transparent)}
  .browser .shot .l{height:9px;border-radius:5px;background:rgba(255,255,255,.1)}
  .browser .shot .l.s{width:66%}.browser .shot .l.m{width:86%}
  .browser .shot .cta{margin-top:auto;height:34px;width:150px;border-radius:999px;background:linear-gradient(145deg,var(--accent),var(--accent-deep))}
  .stage-cap{position:absolute;bottom:6.5vh;left:0;right:0;text-align:center;color:var(--muted);font-size:clamp(15px,2vw,19px);font-weight:500;opacity:0;transition:opacity .35s;padding:0 20px}
  .stage-cap b{color:var(--text);font-weight:700}
  .stage-badge{position:absolute;top:7vh;left:50%;transform:translateX(-50%);display:inline-flex;gap:9px;align-items:center;font-size:13px;font-weight:600;color:var(--accent-2);background:rgba(86,184,232,.1);border:1px solid rgba(86,184,232,.28);padding:7px 15px;border-radius:999px;opacity:0}
  @media(max-width:760px){.stage{height:320vh}.float-web{width:84vw}.big-word{font-size:13vw}}

  /* reveal */
  .reveal{opacity:0;transform:translateY(22px);transition:opacity .7s ease,transform .7s ease}
  .reveal.in{opacity:1;transform:none}
  @media(prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none}}

  @media(max-width:760px){.nav-links{display:none}.hero{padding:56px 0 40px}}
  @media(max-width:480px){.brand .by{display:none}.brand{font-size:19px}.nav-in .btn-primary{padding:10px 15px;font-size:13px}.trust-in{flex-direction:column;align-items:flex-start;gap:12px}}
</style>
</head>
<body>
<div class="bg-fx"><div class="grid-tex"></div><div class="glow g1"></div><div class="glow g2"></div></div>

<header class="nav">
  <div class="wrap nav-in">
    <a class="brand" href="#top">
      <span class="mark">S</span>Sitesking
      <span class="by">by <img src="/assets/hawkins-logo-white.png" alt="Hawkins"></span>
    </a>
    <nav class="nav-links">
      <a href="#incluye">Qué incluye</a>
      <a href="#como">Cómo funciona</a>
      <a href="#hawkins">Quién lo hace</a>
      <a href="#precio">Precio</a>
    </nav>
    <a class="btn btn-primary" href="#precio">Empezar · 29€/mes</a>
  </div>
</header>

<main id="top">
  <!-- HERO -->
  <section class="hero">
    <div class="wrap">
      <span class="pill reveal"><span class="dot"></span> Sin permanencia · Sin compromiso · Sin letra pequeña</span>
      <h1 class="hero-t reveal">Tu web profesional, <span class="serif accent">con IA</span> y panel de control.<br>Por <span class="accent">29&nbsp;€</span> al mes.</h1>
      <p class="hero-sub reveal">Diseño a medida, inteligencia artificial, servidor y actualizaciones <span class="price-inline">incluidas</span>. La gestionas tú desde un panel sencillo. Y si un día no la quieres, te vas. Sin ataduras.</p>
      <div class="hero-cta reveal">
        <a class="btn btn-primary btn-lg" href="#precio">Quiero mi web &nbsp;→</a>
        <a class="btn btn-ghost btn-lg" href="#incluye">Ver qué incluye</a>
      </div>
      <div class="reassure reveal">
        <span><svg class="check" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Servidor y dominio incluidos</span>
        <span><svg class="check" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Cancela cuando quieras</span>
        <span><svg class="check" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Lista en días, no en meses</span>
      </div>
    </div>
    <div class="wrap">
      <div class="trust reveal">
        <div class="trust-in">
          <span class="trust-label">La agencia detrás ha trabajado con</span>
          <div class="logos">
            <span>Quirónsalud</span><span>Tío Pepe</span><span>APM&nbsp;Terminals</span><span>Algeciras&nbsp;CF</span><span>Trasmapi</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SCROLL STAGE (efecto cinematográfico) -->
  <section class="stage" id="stage">
    <div class="stage-sticky">
      <div class="stage-badge" id="stBadge"><span class="dot"></span> Sin permanencia</div>
      <div class="layer float-web" id="stWeb">
        <div class="browser">
          <div class="bar"><i></i><i></i><i></i><span class="u">tunegocio.com</span></div>
          <div class="shot"><div class="h"></div><div class="l m"></div><div class="l s"></div><div class="l m"></div><div class="cta"></div></div>
        </div>
      </div>
      <div class="layer big-price" id="stPrice"><span class="num">29€</span><span class="per">al mes · todo incluido</span></div>
      <div class="layer big-word" id="stWord">Sin<br><b>permanencia</b></div>
      <div class="stage-cap" id="stCap"></div>
    </div>
  </section>

  <!-- CONTRAST -->
  <section>
    <div class="wrap">
      <div class="contrast reveal">
        <span class="eyebrow">La idea</span>
        <h2>Una web profesional no tiene por qué costar 3.000&nbsp;€.<br>Si pagas más, <span class="serif accent">es porque quieres.</span></h2>
        <p class="lead" style="margin-inline:auto">Mismo diseño, misma tecnología, mismos resultados. La diferencia es que aquí no hay presupuestos interminables ni facturas sorpresa: una cuota clara al mes y ya está.</p>
        <div class="vs">
          <div class="vs-card">
            <div class="amt">1.500 – 4.000 €<small> + mantenimiento</small></div>
            <p>Lo que suele costar una web a medida: pago grande por adelantado, meses de espera y extras por cada cambio.</p>
          </div>
          <div class="mid">frente a</div>
          <div class="vs-card win">
            <div class="amt">29 €<small> / mes · todo incluido</small></div>
            <p>Tu web con IA, panel, servidor y soporte. Sin pago inicial, sin permanencia. Empiezas hoy y la tienes en días.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section id="incluye">
    <div class="wrap">
      <div class="reveal">
        <span class="eyebrow">Todo incluido</span>
        <h2>Lo que entra en tus 29&nbsp;€</h2>
        <p class="lead">Sin sorpresas. Esto es lo que tienes desde el primer día.</p>
      </div>
      <div class="grid">
        <div class="card reveal"><div class="ic"><svg viewBox="0 0 24 24"><path d="M12 3l1.9 4.6L18.5 9l-4.6 1.9L12 15.5 10.1 10.9 5.5 9l4.6-1.4z"/><path d="M19 15l.8 2 2 .8-2 .8-.8 2-.8-2-2-.8 2-.8z"/></svg></div><h3>Diseño a medida con IA</h3><p>Creamos tu web con tu contenido, tus fotos y tu estilo, acelerado con inteligencia artificial. Moderna, rápida y pensada para vender.</p></div>
        <div class="card reveal"><div class="ic"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M7 14h5"/></svg></div><h3>Panel de control autogestionable</h3><p>Cambia textos, fotos, precios o publica novedades tú mismo, cuando quieras, sin saber programar y sin depender de nadie.</p></div>
        <div class="card reveal"><div class="ic"><svg viewBox="0 0 24 24"><path d="M5 12a7 7 0 0 1 14 0v4a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3z"/><path d="M9 12h.01M15 12h.01"/></svg></div><h3>Asistente de IA incluido</h3><p>Opcional: un chat o agente de voz que atiende a tus clientes 24/7, responde dudas y capta contactos mientras tú trabajas.</p></div>
        <div class="card reveal"><div class="ic"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="12" rx="2"/><path d="M3 9h18M7 13h2"/></svg></div><h3>Servidor y dominio incluidos</h3><p>Alojamiento rápido y seguro con certificado SSL y copias de seguridad. No tienes que contratar ni configurar nada por tu cuenta.</p></div>
        <div class="card reveal"><div class="ic"><svg viewBox="0 0 24 24"><path d="M21 12a9 9 0 1 1-6.2-8.6"/><path d="M12 7v5l3 2"/></svg></div><h3>Actualizaciones y soporte</h3><p>Mantenimiento, mejoras y soporte real de un equipo de personas. Tu web siempre al día, sin que tengas que preocuparte.</p></div>
        <div class="card reveal"><div class="ic"><svg viewBox="0 0 24 24"><path d="M3 11l18-8-8 18-2-7-8-3z"/></svg></div><h3>Preparada para Google e IA</h3><p>SEO de base y optimización para que te encuentren en Google y en las búsquedas con IA. Rápida en móvil y lista para captar clientes.</p></div>
      </div>
    </div>
  </section>

  <!-- HOW -->
  <section id="como">
    <div class="wrap">
      <div class="reveal">
        <span class="eyebrow">Cómo funciona</span>
        <h2>En tres pasos y en días</h2>
        <p class="lead">Sin reuniones eternas ni presupuestos que no llegan.</p>
      </div>
      <div class="steps">
        <div class="step reveal"><h3>Nos cuentas tu negocio</h3><p>Rellenas un formulario corto o hablamos cinco minutos. Nos quedamos con lo esencial: qué haces, para quién y qué quieres conseguir.</p></div>
        <div class="step reveal"><h3>La creamos con IA</h3><p>Montamos tu web con inteligencia artificial y la pulimos a mano. En pocos días tienes una versión real, navegable, lista para enseñar.</p></div>
        <div class="step reveal"><h3>La activas y la gestionas tú</h3><p>Si te gusta, la activas por 29&nbsp;€/mes y entra en marcha con tu dominio. Desde el panel la cambias cuando quieras. Y si no, no pasa nada.</p></div>
      </div>
    </div>
  </section>

  <!-- BACKED BY HAWKINS -->
  <section id="hawkins">
    <div class="wrap">
      <div class="backed reveal">
        <div>
          <div class="hk-logo"><img src="/assets/hawkins-logo-white.png" alt="Hawkins"><span class="since">Desde 2008</span></div>
          <span class="eyebrow">Quién está detrás</span>
          <h2 style="font-size:clamp(26px,3.6vw,38px)">Sitesking es un producto de <span class="accent">Hawkins</span></h2>
          <p class="lead">No es una web de plantilla sin cara detrás. Detrás de Sitesking está Hawkins, agencia de IA, automatización y marketing de Algeciras, con el mismo equipo que trabaja para grandes marcas — ahora al alcance de tu negocio.</p>
          <div class="stats">
            <div class="stat"><div class="n">2008</div><div class="l">Desde hace 17 años</div></div>
            <div class="stat"><div class="n">8</div><div class="l">Premios Agripina</div></div>
            <div class="stat"><div class="n">2</div><div class="l">Sedes: Algeciras y Ceuta</div></div>
          </div>
        </div>
        <div>
          <p class="trust-label" style="margin-bottom:14px">Marcas que confían en Hawkins</p>
          <div class="client-wall">
            <span>Quirónsalud</span><span>Tío Pepe</span><span>APM Terminals</span><span>Algeciras CF</span><span>Trasmapi</span><span>Hera</span><span>Magisterio La Línea</span><span>Comurban</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section id="precio">
    <div class="wrap center">
      <div class="reveal">
        <span class="eyebrow">Precio</span>
        <h2>Un precio. Todo dentro.</h2>
        <p class="lead">Sin pago inicial. Sin permanencia. Cancelas cuando quieras.</p>
      </div>
      <div class="price-wrap">
        <div class="price-card reveal">
          <span class="tag">Todo incluido</span>
          <div class="amount">29&nbsp;€<small>/mes</small></div>
          <div class="note">IVA no incluido · sin permanencia</div>
          <ul class="plist">
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg> Web profesional a medida con IA</li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg> Panel de control autogestionable</li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg> Servidor, dominio y SSL incluidos</li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg> Actualizaciones y soporte continuo</li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg> Optimización para Google e IA</li>
            <li><svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg> Sin permanencia · cancelas cuando quieras</li>
          </ul>
          <!-- TODO: sustituir href por el Payment Link de Stripe (suscripción 29€/mes) -->
          <a class="btn btn-primary btn-lg" href="#contratar" data-checkout>Empezar ahora &nbsp;→</a>
          <div class="price-fine">Pago seguro con Stripe · Cancelación en un clic · Sin letra pequeña</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="wrap center">
      <div class="reveal"><span class="eyebrow">Dudas</span><h2>Preguntas frecuentes</h2></div>
      <div class="faq" style="text-align:left">
        <details class="reveal"><summary>¿De verdad no hay permanencia? <span class="plus">+</span></summary><p>De verdad. Pagas mes a mes y si un día no la quieres, la cancelas y ya está. Sin penalizaciones ni cláusulas escondidas.</p></details>
        <details class="reveal"><summary>¿Qué pasa con el servidor y el dominio? <span class="plus">+</span></summary><p>Van incluidos en la cuota. Nosotros nos encargamos del alojamiento, el certificado de seguridad y las copias. Tú no tienes que contratar ni configurar nada.</p></details>
        <details class="reveal"><summary>¿Puedo cambiar cosas yo mismo? <span class="plus">+</span></summary><p>Sí. Tienes un panel sencillo para editar textos, fotos, precios o publicar novedades sin saber programar. Y si prefieres que lo hagamos nosotros, también.</p></details>
        <details class="reveal"><summary>¿En cuánto tiempo la tengo? <span class="plus">+</span></summary><p>En días, no en meses. Con IA aceleramos el proceso: te enseñamos una versión real y navegable antes de que decidas activarla.</p></details>
        <details class="reveal"><summary>¿Y si quiero algo más complejo (tienda, reservas, app)? <span class="plus">+</span></summary><p>Se puede. Hawkins desarrolla tiendas online, sistemas de reservas y apps a medida. Empezamos con tu web por 29&nbsp;€/mes y crecemos cuando lo necesites.</p></details>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section id="contratar">
    <div class="wrap">
      <div class="final reveal">
        <span class="eyebrow">Empieza hoy</span>
        <h2>Tu web profesional, funcionando esta semana.</h2>
        <p class="lead" style="margin-inline:auto">29&nbsp;€/mes, todo incluido, sin ataduras. Si pagas más, es porque quieres.</p>
        <div class="hero-cta" style="justify-content:center">
          <!-- TODO: sustituir href por el Payment Link de Stripe -->
          <a class="btn btn-primary btn-lg" href="#" data-checkout>Quiero mi web · 29€/mes</a>
          <a class="btn btn-ghost btn-lg" href="https://hawkins.es" target="_blank" rel="noopener">Hablar con el equipo</a>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="wrap">
    <div class="foot-in">
      <div class="foot-brand">
        <a class="brand" href="#top"><span class="mark">S</span>Sitesking</a>
        <div class="by-hawkins">Un producto de <a href="https://hawkins.es" target="_blank" rel="noopener"><img src="/assets/hawkins-logo-white.png" alt="Hawkins"></a></div>
        <p class="muted" style="font-size:13.5px;margin-top:12px">Tu web profesional con IA y panel de control por 29&nbsp;€/mes. Sin permanencia, sin compromiso, sin letra pequeña.</p>
      </div>
      <div class="foot-cols">
        <div>
          <h4>Producto</h4>
          <a href="#incluye">Qué incluye</a>
          <a href="#como">Cómo funciona</a>
          <a href="#precio">Precio</a>
        </div>
        <div>
          <h4>Hawkins</h4>
          <a href="https://hawkins.es" target="_blank" rel="noopener">La agencia</a>
          <a href="https://hawkins.es" target="_blank" rel="noopener">Otros servicios</a>
          <a href="https://hawkins.es" target="_blank" rel="noopener">Contacto</a>
        </div>
      </div>
    </div>
    <div class="legal">
      <span>© 2026 Sitesking · Un producto de Hawkins (Thwork 3000 S.L.)</span>
      <span>Algeciras · Ceuta — Diseño y desarrollo: <a href="https://hawkins.es" target="_blank" rel="noopener" style="color:var(--muted)">Hawkins</a></span>
    </div>
  </div>
</footer>

<script>
  // reveal on scroll
  const io=new IntersectionObserver((es)=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.12});
  document.querySelectorAll('.reveal').forEach(el=>io.observe(el));

  // scroll stage (efecto cinematográfico)
  (function(){
    const stage=document.getElementById('stage'); if(!stage) return;
    const web=document.getElementById('stWeb'),price=document.getElementById('stPrice'),
          word=document.getElementById('stWord'),cap=document.getElementById('stCap'),badge=document.getElementById('stBadge');
    const clamp=(v,a,b)=>Math.max(a,Math.min(b,v)),
          lerp=(a,b,t)=>a+(b-a)*t,
          seg=(p,a,b)=>clamp((p-a)/(b-a),0,1),
          ease=t=>t<.5?2*t*t:1-Math.pow(-2*t+2,2)/2;
    const caps=[[0,'Tu web, creada con <b>IA</b> y lista en días'],
                [.36,'Todo incluido, por solo <b>29&nbsp;€ al mes</b>'],
                [.70,'<b>Sin permanencia.</b> Sin compromiso. Sin letra pequeña']];
    let last='',ticking=false;
    function frame(){
      ticking=false;
      const r=stage.getBoundingClientRect();
      const total=Math.max(1,stage.offsetHeight-window.innerHeight);
      const p=clamp((-r.top)/total,0,1);
      const inW=ease(seg(p,0,.30)), outW=ease(seg(p,.30,.56));
      web.style.opacity=clamp(inW*1.3 - seg(p,.60,.72),0,1);
      web.style.transform='translate('+(lerp(44,0,inW)+lerp(0,-28,outW))+'vw,'+lerp(0,-26,outW)+'vh) rotate('+(lerp(9,0,inW)+lerp(0,-7,outW))+'deg) scale('+(lerp(.82,1,inW)*lerp(1,.5,outW))+')';
      const inP=ease(seg(p,.30,.58)), outP=ease(seg(p,.66,.82));
      price.style.opacity=inP*(1-outP);
      price.style.transform='translateY('+lerp(0,-3,outP)+'vh) scale('+(lerp(.35,1,inP)*lerp(1,1.06,outP))+')';
      const inD=ease(seg(p,.68,.90));
      word.style.opacity=inD;
      word.style.transform='translateY('+lerp(16,0,inD)+'vh) scale('+lerp(.9,1,inD)+')';
      badge.style.opacity=clamp(seg(p,.03,.1)-seg(p,.92,1),0,1);
      let c=caps[0][1]; for(const k of caps) if(p>=k[0]) c=k[1];
      if(c!==last){cap.innerHTML=c;last=c;}
      cap.style.opacity=(p>.015&&p<.985)?1:0;
    }
    function onScroll(){ if(!ticking){ticking=true;requestAnimationFrame(frame);} }
    addEventListener('scroll',onScroll,{passive:true});
    addEventListener('resize',onScroll);
    frame();
  })();
  // checkout placeholder until Stripe Payment Link is set
  const STRIPE_LINK=""; // <-- pegar aquí el Payment Link de Stripe (suscripción 29€/mes)
  document.querySelectorAll('[data-checkout]').forEach(b=>b.addEventListener('click',(ev)=>{
    if(STRIPE_LINK){location.href=STRIPE_LINK;return;}
    ev.preventDefault();
    document.getElementById('contratar').scrollIntoView({behavior:'smooth'});
  }));
</script>
</body>
</html>

@endverbatim
