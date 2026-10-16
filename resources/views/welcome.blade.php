<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4f1e8">
    <title>MyFolio — Your work, in your words</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Mono:wght@400;500;600&family=Manrope:wght@400;500;600;700;800&display=swap');

:root {
    --paper: #f4f1e8;
    --sheet: #fffdf7;
    --ink: #222d27;
    --muted: #6c746c;
    --rule: #d8d2c5;
    --green: #24543f;
    --orange: #c65d3a;
    --butter: #e7cf78;
    --soft-green: #e6ece4;
    --danger: #b42318;
    --mono: 'IBM Plex Mono', monospace;
    --sans: 'Manrope', Arial, sans-serif;
    --serif: 'Fraunces', Georgia, serif;
}

* { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
    min-height: 100vh;
    margin: 0;
    overflow-x: hidden;
    background: var(--paper);
    color: var(--ink);
    font-family: var(--sans);
    font-size: 15px;
    line-height: 1.65;
}
a { color: inherit; }
button, input, textarea, select { font: inherit; }
button, a { -webkit-tap-highlight-color: transparent; }

.topbar {
    width: min(1180px, calc(100% - 44px));
    margin: 0 auto;
    padding: 25px 0 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 28px;
    border-top: 5px solid var(--ink);
    border-bottom: 1px solid var(--rule);
}
.brand {
    display: inline-flex;
    align-items: baseline;
    color: var(--ink);
    font: 700 1.7rem/1 var(--serif);
    letter-spacing: -.07em;
    text-decoration: none;
}
.brand span { color: var(--orange); }
.navlinks { display: flex; align-items: center; gap: clamp(16px, 3vw, 34px); }
.navlinks a {
    color: var(--muted);
    font-size: .82rem;
    font-weight: 800;
    text-decoration: none;
    transition: color .16s ease;
}
.navlinks a:hover { color: var(--orange); }
.navlinks a:last-child { color: var(--green); }

.shell { width: min(1120px, calc(100% - 44px)); margin: 0 auto 76px; }
.eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--orange);
    font: 600 .7rem/1.4 var(--mono);
    letter-spacing: .08em;
    text-transform: uppercase;
}
.eyebrow::before { content: ''; width: 21px; height: 2px; background: currentColor; }
h1, h2, h3, p { margin-top: 0; }
h1, h2, h3 { font-family: var(--serif); font-weight: 600; }
h1 { margin-bottom: 20px; font-size: clamp(2.8rem, 6vw, 5.6rem); line-height: .99; letter-spacing: -.065em; }
h1 .gradient { color: var(--green); }
h2 { font-size: clamp(1.65rem, 3vw, 2.45rem); line-height: 1.13; letter-spacing: -.04em; }
.muted, .hero p { color: var(--muted); }

.btn {
    display: inline-flex;
    min-height: 47px;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 12px 18px;
    border: 1px solid var(--green);
    border-radius: 2px;
    background: var(--green);
    color: #fffdf7;
    font-size: .85rem;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
    transition: background .16s ease, color .16s ease, transform .16s ease;
}
.btn:hover { background: #173d2d; transform: translateY(-2px); }
.btn.secondary { background: transparent; color: var(--ink); border-color: var(--rule); }
.btn.secondary:hover { border-color: var(--ink); background: var(--sheet); }
.actions { display: flex; align-items: center; flex-wrap: wrap; gap: 10px; margin-top: 25px; }

.footer {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-top: 44px;
    padding-top: 17px;
    border-top: 1px solid var(--rule);
    color: var(--muted);
    font: .68rem/1.6 var(--mono);
    letter-spacing: .02em;
}
.footer a { text-decoration: none; }
.footer a:hover { color: var(--orange); }

/* Form controls */
.panel {
    background: var(--sheet);
    border: 1px solid var(--rule);
    border-radius: 0;
    padding: clamp(22px, 4vw, 42px);
    box-shadow: 8px 8px 0 #e4dfd3;
}
.panel h2 { margin-bottom: 7px; }
.form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 20px 22px; }
.field { min-width: 0; display: flex; flex-direction: column; gap: 7px; }
.field.full { grid-column: 1 / -1; }
.field label { color: var(--ink); font-size: .73rem; font-weight: 800; letter-spacing: .015em; }
.field input, .field textarea, .field select {
    width: 100%;
    min-height: 47px;
    padding: 12px 13px;
    border: 1px solid #d7d1c5;
    border-radius: 2px;
    outline: none;
    background: #fffefa;
    color: var(--ink);
    font-size: .9rem;
    transition: border-color .16s ease, box-shadow .16s ease;
}
.field input:focus, .field textarea:focus, .field select:focus {
    border-color: var(--green);
    box-shadow: 3px 3px 0 #dfe8de;
}
.field input::placeholder, .field textarea::placeholder { color: #92978f; }
.field textarea { min-height: 122px; resize: vertical; line-height: 1.6; }
.field input[type='file'] { padding: 9px; background: #f8f6ef; }
.field input[type='file']::file-selector-button {
    margin-right: 12px;
    padding: 8px 10px;
    border: 1px solid var(--rule);
    background: var(--sheet);
    color: var(--ink);
    cursor: pointer;
}
.error { color: var(--danger); font-size: .78rem; }
.profile-photo { display: block; width: 92px; height: 92px; margin: 5px 0 10px; object-fit: cover; border: 1px solid var(--rule); border-radius: 0; }
.form-block + .form-block { margin-top: 34px; padding-top: 30px; border-top: 1px solid var(--rule); }
.form-block-heading { display: grid; grid-template-columns: 42px 1fr; gap: 14px; align-items: start; margin-bottom: 20px; }
.form-block-heading .block-number { color: var(--orange); font: 500 .74rem/1.6 var(--mono); }
.form-block-heading h2 { margin: -5px 0 3px; font-size: 1.55rem; }
.form-block-heading p { margin: 0; color: var(--muted); font-size: .83rem; }
.form-actions { padding-top: 25px; margin-top: 30px; border-top: 1px solid var(--rule); }

/* Template picker */
.grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
.tile { min-width: 0; background: var(--sheet); border: 1px solid var(--rule); border-radius: 0; box-shadow: 5px 5px 0 #e4dfd3; }
.template-card { overflow: hidden; padding: 0; }
.mock { position: relative; min-height: 265px; overflow: hidden; padding: 20px; border-bottom: 1px solid var(--rule); }
.mock-title { position: relative; z-index: 1; }
.mock-professional { background: #e8eced; color: #18334a; }
.mock-modern { background: #19292a; color: #f5f3e9; }
.mock-creative { background: #f4d3bd; color: #242b23; }
.preview-topline { display: flex; justify-content: space-between; gap: 10px; font: 500 .57rem var(--mono); letter-spacing: .04em; }
.mock-professional .mini-resume { display: grid; grid-template-columns: 30% 1fr; gap: 11px; margin-top: 17px; min-height: 180px; background: #fff; padding: 12px; box-shadow: 3px 3px 0 #c8d0d0; }
.mini-sidebar { padding-right: 8px; border-right: 1px solid #dce2e2; }
.mini-avatar { width: 34px; height: 34px; margin-bottom: 12px; border-radius: 50%; background: #b6c8d3; }
.mini-line { height: 4px; margin: 7px 0; background: currentColor; opacity: .23; }
.mini-line.short { width: 58%; }
.mini-section-label { margin: 5px 0; font: 600 .47rem var(--mono); text-transform: uppercase; }
.mini-main-title { margin: 1px 0 8px; font: 700 .9rem/1.06 var(--serif); }
.mini-section { margin-top: 12px; border-top: 1px solid #e0e4e2; padding-top: 6px; }
.mock-modern { padding: 18px 20px; }
.mock-modern .mini-modern-layout { display: grid; grid-template-columns: 1.15fr .85fr; gap: 10px; margin-top: 28px; align-items: center; }
.mini-modern-title { max-width: 170px; font: 700 clamp(1.35rem,2vw,2.1rem)/.9 var(--sans); letter-spacing: -.09em; }
.mini-modern-title em { display: block; color: #d5e37b; font-style: normal; }
.mini-modern-photo { min-height: 123px; background: #a1bcb3; border: 5px solid #e0e6c8; }
.mini-project-row { display: grid; grid-template-columns: repeat(3,1fr); gap: 5px; margin-top: 13px; }
.mini-project-row span { height: 27px; background: #314b47; border-top: 3px solid #d5e37b; }
.mock-creative { padding: 19px; }
.mock-creative .mini-creative-label { font: 600 .58rem var(--mono); text-transform: uppercase; letter-spacing: .06em; }
.mini-creative-title { margin-top: 17px; font: 700 clamp(1.6rem,2.3vw,2.4rem)/.84 var(--serif); letter-spacing: -.07em; }
.mini-creative-title em { display: block; margin-left: 27px; color: #b74d32; font-weight: 500; }
.mini-creative-blocks { display: grid; grid-template-columns: 1.1fr .8fr 1fr; gap: 6px; align-items: end; margin-top: 18px; }
.mini-creative-blocks span { height: 69px; border: 1px solid #242b23; background: #d7e1a0; }
.mini-creative-blocks span:nth-child(2) { height: 49px; background: #e97852; }
.mini-creative-blocks span:nth-child(3) { height: 85px; background: #e7c75f; }
.template-content { padding: 22px; }
.template-content h2 { margin: 0 0 8px; font: 600 1.5rem/1.1 var(--serif); }
.template-content p { min-height: 70px; margin: 0; color: var(--muted); font-size: .85rem; line-height: 1.7; }
.template-content .actions { margin-top: 18px; }
.template-content .actions .btn { flex: 1; padding-inline: 11px; }
.template-number { color: var(--orange); font: 500 .68rem var(--mono); }
#previewPanel { margin-top: 28px; }
[hidden] { display: none !important; }

@media (max-width: 860px) {
    .grid { grid-template-columns: 1fr; }
    .template-content p { min-height: 0; }
    .mock { min-height: 230px; }
}
@media (max-width: 640px) {
    .topbar { width: calc(100% - 32px); padding-top: 19px; gap: 15px; }
    .brand { font-size: 1.45rem; }
    .navlinks { gap: 12px; }
    .navlinks a { font-size: .72rem; }
    .shell { width: calc(100% - 32px); margin-bottom: 46px; }
    .form-grid { grid-template-columns: 1fr; }
    .field.full { grid-column: auto; }
    .panel { padding: 20px 16px; box-shadow: 4px 4px 0 #e4dfd3; }
    .footer { flex-direction: column; gap: 8px; }
    .template-content { padding: 18px; }
    .actions .btn { flex: 1; }
}

/* Home page: editorial cover layout */
.home-shell { padding-top: 48px; }
.home-hero { display: grid; grid-template-columns: minmax(0, 1fr) minmax(360px, .88fr); gap: clamp(38px, 7vw, 94px); align-items: center; }
.home-copy { padding: 12px 0 28px; }
.home-copy h1 { max-width: 640px; margin-top: 23px; font-size: clamp(3.3rem, 7.3vw, 6.7rem); }
.home-copy h1 em { color: var(--green); font-style: italic; font-weight: 500; }
.home-copy > p { max-width: 470px; color: var(--muted); font-size: 1rem; line-height: 1.9; }
.home-copy .actions { margin-top: 32px; }
.home-visual { position: relative; padding: 20px 22px 24px; background: #e6e8da; border: 1px solid #cfd5c7; box-shadow: 12px 12px 0 #d9d5c8; transform: rotate(1.1deg); }
.visual-meta { display: flex; justify-content: space-between; gap: 14px; color: #68766a; font: 500 .62rem var(--mono); letter-spacing: .06em; }
.sample-sheet { min-height: 350px; margin-top: 15px; padding: 24px 24px 17px; background: #fffdf6; border: 1px solid #d8d4c9; color: #202d26; }
.sample-brand { display: flex; justify-content: space-between; gap: 12px; font: 600 .62rem var(--mono); letter-spacing: .06em; }
.sample-title { margin-top: 36px; font: 600 clamp(2.5rem, 4vw, 4.4rem)/.88 var(--serif); letter-spacing: -.075em; }
.sample-title span { color: var(--orange); }
.sample-subtitle { margin-top: 14px; color: #6c746b; font: 500 .59rem var(--mono); letter-spacing: .07em; }
.sample-rule { height: 1px; margin: 23px 0 18px; background: #d9ddd3; }
.sample-content { display: grid; grid-template-columns: 90px 1fr; align-items: start; gap: 18px; }
.sample-portrait { height: 105px; background: #d7dfcf; border: 1px solid #c6d0bf; position: relative; }
.sample-portrait::before { content: ''; position: absolute; width: 34px; height: 34px; left: 27px; top: 17px; border-radius: 50%; background: #b3c1a8; }
.sample-portrait::after { content: ''; position: absolute; width: 58px; height: 31px; left: 15px; bottom: 0; background: #b3c1a8; border-radius: 28px 28px 0 0; }
.sample-lines span { display: block; height: 5px; margin: 10px 0; background: #daddd4; }
.sample-lines span:nth-child(1) { width: 78%; height: 7px; background: #41594a; }
.sample-lines span:nth-child(2) { width: 92%; }
.sample-lines span:nth-child(3) { width: 69%; }
.sample-lines span:nth-child(4) { width: 82%; margin-top: 19px; background: #c65d3a; }
.sample-lines span:nth-child(5) { width: 58%; }
.sample-footer { display: flex; justify-content: space-between; gap: 12px; margin-top: 25px; padding-top: 12px; border-top: 1px solid #d9ddd3; color: #70786f; font: .53rem var(--mono); }
.visual-note { position: absolute; right: -24px; bottom: 24px; max-width: 178px; padding: 13px 15px; background: var(--butter); border: 1px solid #c7b15d; color: #283328; font-size: .74rem; font-weight: 800; line-height: 1.4; transform: rotate(-3deg); }
.visual-note strong { display: block; margin-bottom: 4px; font: 500 .62rem var(--mono); text-transform: uppercase; }
.home-rule { margin: 75px 0 47px; display: flex; align-items: center; gap: 16px; padding: 14px 0; border-top: 1px solid var(--rule); border-bottom: 1px solid var(--rule); color: var(--green); font: 500 .65rem var(--mono); letter-spacing: .08em; text-transform: uppercase; }
.home-rule span { color: var(--orange); font-size: 1rem; }
.steps-section { padding: 0 0 45px; }
.section-heading { display: flex; justify-content: space-between; align-items: end; gap: 30px; margin-bottom: 26px; }
.section-heading h2 { max-width: 450px; margin: 8px 0 0; font-size: clamp(2.1rem, 4vw, 3.1rem); }
.section-heading p { max-width: 330px; margin-bottom: 3px; color: var(--muted); font-size: .85rem; }
.step-list { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); border-top: 1px solid var(--ink); border-bottom: 1px solid var(--ink); }
.step-item { min-height: 190px; padding: 22px 22px 24px 0; }
.step-item + .step-item { padding-left: 22px; border-left: 1px solid var(--rule); }
.step-item .number { color: var(--orange); font: 500 .72rem var(--mono); }
.step-item h3 { margin: 18px 0 8px; font-size: 1.45rem; }
.step-item p { max-width: 300px; margin-bottom: 0; color: var(--muted); font-size: .83rem; }
.closing-note { display: flex; justify-content: space-between; align-items: center; gap: 28px; margin-top: 48px; padding: 29px 32px; background: var(--soft-green); border: 1px solid #ced9cd; }
.closing-note h2 { margin: 9px 0 7px; }
.closing-note p { max-width: 610px; margin-bottom: 0; color: var(--muted); font-size: .88rem; }
@media(max-width: 860px) {
    .home-hero { grid-template-columns: 1fr; gap: 24px; }
    .home-visual { max-width: 560px; margin: 0 auto; width: calc(100% - 20px); }
    .home-copy { padding-bottom: 0; }
    .home-rule { margin-top: 58px; }
}
@media(max-width: 640px) {
    .home-shell { padding-top: 32px; }
    .home-copy h1 { font-size: clamp(3.1rem, 14vw, 4.7rem); }
    .sample-sheet { padding: 17px; min-height: 310px; }
    .visual-note { right: -8px; bottom: 10px; }
    .section-heading { display: block; }
    .section-heading p { margin-top: 14px; }
    .step-list { grid-template-columns: 1fr; }
    .step-item, .step-item + .step-item { min-height: 0; padding: 20px 0; border-left: 0; }
    .step-item + .step-item { border-top: 1px solid var(--rule); }
    .step-item h3 { margin-top: 10px; }
    .closing-note { display: block; padding: 23px 19px; }
    .closing-note .btn { margin-top: 20px; width: 100%; }
}

    </style>
</head>
<body class="home-page">
<header class="topbar">
    <a class="brand" href="{{ route('home') }}" aria-label="MyFolio home">myfolio<span>.</span></a>
    <nav class="navlinks" aria-label="Main navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('portfolio.create') }}">Create a portfolio <span aria-hidden="true">↗</span></a>
    </nav>
</header>
    <main class="shell home-shell">
        <section class="home-hero" aria-labelledby="hero-title">
            <div class="home-copy">
                <span class="eyebrow">A small tool for big next steps</span>
                <h1 id="hero-title">Make room for your work<span class="gradient">.</span><br><em>Show it well.</em></h1>
                <p>Build a personal portfolio with the details you already have: the things you have learned, the projects you have made, and the work you want to do next.</p>
                <div class="actions">
                    <a class="btn" href="{{ route('portfolio.create') }}">Start your portfolio <span aria-hidden="true">↗</span></a>
                    <a class="btn secondary" href="#how-it-works">See how it works</a>
                </div>
            </div>

            <div class="home-visual" aria-label="Illustrated sample portfolio preview">
                <div class="visual-meta"><span>MYFOLIO / SAMPLE SHEET</span><span>LAYOUT 01 — 03</span></div>
                <div class="sample-sheet">
                    <div class="sample-brand"><span>MF / WORKS</span><span>PERSONAL PORTFOLIO</span></div>
                    <div class="sample-title">First<br>Last<span>.</span></div>
                    <div class="sample-subtitle">STUDENT · DESIGNER · BUILDER</div>
                    <div class="sample-rule"></div>
                    <div class="sample-content">
                        <div class="sample-portrait" aria-hidden="true"></div>
                        <div class="sample-lines" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
                    </div>
                    <div class="sample-footer"><span>SELECTED WORK / INTRODUCTION</span><span>2026</span></div>
                </div>
                <div class="visual-note"><strong>Start here →</strong>Your story first. The design comes next.</div>
            </div>
        </section>

        <div class="home-rule" aria-hidden="true"><span>✳</span> No design software needed <span>•</span> Three distinct layouts <span>•</span> Yours to share</div>

        <section class="steps-section" id="how-it-works" aria-labelledby="steps-title">
            <div class="section-heading">
                <div><span class="eyebrow">The process</span><h2 id="steps-title">From blank page to<br>something worth sharing.</h2></div>
                <p>Keep it simple. Add your information, choose a visual direction, then review the finished page.</p>
            </div>
            <div class="step-list">
                <article class="step-item">
                    <span class="number">01 / DETAILS</span>
                    <h3>Tell us about you.</h3>
                    <p>Add your introduction, contact details, education, skills, projects, and experience.</p>
                </article>
                <article class="step-item">
                    <span class="number">02 / DIRECTION</span>
                    <h3>Choose a point of view.</h3>
                    <p>Pick a professional, modern, or creative layout that suits the work you want to show.</p>
                </article>
                <article class="step-item">
                    <span class="number">03 / SHARE</span>
                    <h3>Put it out there.</h3>
                    <p>Review your portfolio and use its page link when sharing your work with others.</p>
                </article>
            </div>
        </section>

        <section class="closing-note">
            <div>
                <span class="eyebrow">Make it yours</span>
                <h2>Good work deserves a home.</h2>
                <p>There is no need to start with a perfect story. Put your experience together, shape it over time, and let your portfolio grow with you.</p>
            </div>
            <a class="btn" href="{{ route('portfolio.create') }}">Build my portfolio <span aria-hidden="true">↗</span></a>
        </section>

        <footer class="footer">
            <span>MYFOLIO / PERSONAL PORTFOLIO BUILDER</span>
            <span>Made for the next thing you want to do.</span>
        </footer>
    </main>
</body>
</html>
