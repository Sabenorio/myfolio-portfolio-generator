<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4f1e8">
    <title>Choose a layout | MyFolio</title>
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
.mock-creative {
    min-height: 265px;
    padding: 10px;
    background: #f1ecdf;
    color: #27332d;
}
.mini-creative-canvas {
    height: 244px;
    padding: 10px;
    background: #fffefa;
    border: 1px solid #d8dfd5;
    overflow: hidden;
}
.mini-creative-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
    padding-bottom: 7px;
    border-bottom: 1px solid #d8dfd5;
    font: 800 .42rem var(--sans);
    letter-spacing: .05em;
}
.mini-creative-header nav { display: flex; gap: 7px; color: #657168; font: 600 .35rem var(--sans); }
.mini-creative-hero {
    display: grid;
    grid-template-columns: 1.12fr .88fr;
    gap: 6px;
    margin-top: 7px;
    height: 95px;
}
.mini-creative-copy {
    padding: 12px 9px 7px;
    background: #cbe7d6;
    border-radius: 3px 22px 3px 3px;
}
.mini-creative-label {
    display: inline-block;
    margin-bottom: 7px;
    color: #657168;
    font: 700 .34rem var(--mono);
    letter-spacing: .04em;
    text-transform: uppercase;
}
.mini-creative-title {
    margin: 0;
    color: #27332d;
    font: 700 clamp(1rem, 1.65vw, 1.55rem)/.9 var(--serif);
    letter-spacing: -.07em;
    overflow-wrap: anywhere;
}
.mini-creative-title em { display: block; color: #e76b50; font-weight: 500; }
.mini-creative-copyline { width: 84%; height: 3px; margin-top: 6px; background: rgba(39,51,45,.2); }
.mini-creative-copyline.short { width: 58%; }
.mini-creative-art {
    position: relative;
    min-width: 0;
    background: #e7def7;
    border-radius: 20px 3px 3px 3px;
    overflow: hidden;
}
.mini-creative-sun { position: absolute; top: 7px; right: 7px; width: 20px; height: 20px; border-radius: 50%; background: #f4cc68; }
.mini-creative-portrait {
    position: absolute;
    inset: 15px 12px 11px;
    display: grid;
    place-items: center;
    border: 4px solid #fffefa;
    border-radius: 45% 45% 3px 3px;
    background: #e8a997;
    color: #27332d;
    font: italic 700 2rem var(--serif);
    transform: rotate(-3deg);
}
.mini-creative-note { position: absolute; right: 5px; bottom: 5px; padding: 4px 5px; background: #e76b50; color: #fffefa; font: italic .34rem var(--serif); transform: rotate(3deg); }
.mini-creative-marquee {
    display: flex;
    justify-content: center;
    gap: 6px;
    margin: 5px 0;
    padding: 3px 1px;
    border-top: 1px solid #d8dfd5;
    border-bottom: 1px solid #d8dfd5;
    color: #657168;
    font: 700 .31rem var(--mono);
    letter-spacing: .03em;
}
.mini-creative-marquee span { color: #e76b50; }
.mini-creative-cards {
    display: grid;
    grid-template-columns: 1.2fr .8fr 1fr;
    gap: 5px;
}
.mini-creative-card { min-width: 0; height: 27px; padding: 3px; overflow: hidden; color: #27332d; font: 700 .32rem var(--sans); line-height: 1.15; }
.mini-creative-card.about { background: #fffefa; border: 1px solid #d8dfd5; }
.mini-creative-card.education { background: #f4cc68; margin-top: 3px; }
.mini-creative-card.experience { background: #e7def7; }
.mini-creative-card.projects { background: #e76b50; color: #fffefa; }
.mini-creative-card.skills { background: #cbe7d6; }
.template-content { padding: 22px; }
.template-content h2 { margin: 0 0 8px; font: 600 1.5rem/1.1 var(--serif); }
.template-content p { min-height: 70px; margin: 0; color: var(--muted); font-size: .85rem; line-height: 1.7; }
.template-content .actions { margin-top: 18px; }
.template-content .actions .btn { min-width: 135px; padding-inline: 18px; }
.template-number { color: var(--orange); font: 500 .68rem var(--mono); }
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

/* Template chooser: let each preview show its own visual point of view */
.chooser-shell { padding-top: 42px; }
.chooser-heading { display: flex; justify-content: space-between; align-items: end; gap: 36px; margin-bottom: 34px; }
.chooser-heading h1 { max-width: 650px; margin: 14px 0 10px; font-size: clamp(2.8rem, 5.6vw, 5.1rem); }
.chooser-heading p { max-width: 600px; margin-bottom: 0; color: var(--muted); }
.chooser-count { min-width: 110px; padding: 15px 0 3px 17px; border-left: 1px solid var(--rule); color: var(--muted); font: .66rem/1.8 var(--mono); text-transform: uppercase; }
.chooser-count strong { display: block; color: var(--orange); font: 500 2.3rem/1.1 var(--serif); }
.template-card { transition: transform .18s ease, box-shadow .18s ease; }
.template-card:hover { transform: translateY(-4px); box-shadow: 8px 10px 0 #e4dfd3; }
@media(max-width:760px) {
    .chooser-shell { padding-top: 30px; }
    .chooser-heading { display: block; }
    .chooser-count { display: inline-block; margin-top: 20px; padding-top: 6px; }
}

    </style>
</head>
<body class="chooser-page">
<header class="topbar">
    <a class="brand" href="{{ route('home') }}" aria-label="MyFolio home">myfolio<span>.</span></a>
    <nav class="navlinks" aria-label="Main navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('portfolio.create') }}">Create a portfolio <span aria-hidden="true">↗</span></a>
    </nav>
</header>
    <main class="shell chooser-shell">
        <section class="chooser-heading">
            <div>
                <span class="eyebrow">Step 02 / Choose a direction</span>
                <h1>Same story.<br><span class="gradient">Three points of view.</span></h1>
                <p>Each option has a different structure, rhythm, and visual personality. Choose the one that feels right for the work you want to show.</p>
            </div>
            <div class="chooser-count"><strong>03</strong>LAYOUTS TO<br>CHOOSE FROM</div>
        </section>

        <form id="templateForm" action="{{ route('portfolio.select-template', $portfolio->id) }}" method="POST">
            @csrf
            <input type="hidden" name="template" id="templateValue" value="template1">
            <section class="grid" aria-label="Available portfolio layouts">
                <article class="tile template-card">
                    <div class="mock mock-professional" aria-label="Professional layout miniature preview">
                        <div class="preview-topline"><span>MYFOLIO / PROFILE</span><span>01</span></div>
                        <div class="mini-resume">
                            <aside class="mini-sidebar">
                                <div class="mini-avatar"></div>
                                <div class="mini-section-label">Contact</div>
                                <div class="mini-line"></div><div class="mini-line short"></div>
                                <div class="mini-section-label">Skills</div>
                                <div class="mini-line"></div><div class="mini-line short"></div>
                            </aside>
                            <div>
                                <div class="mini-main-title">Name<br>Surname</div>
                                <div class="mini-line"></div><div class="mini-line short"></div>
                                <div class="mini-section"><div class="mini-section-label">Experience</div><div class="mini-line"></div><div class="mini-line short"></div></div>
                                <div class="mini-section"><div class="mini-section-label">Education</div><div class="mini-line"></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="template-content">
                        <span class="template-number">LAYOUT 01</span>
                        <h2>Professional</h2>
                        <p>A résumé-style sidebar and a clear main column for experience, education, and skills.</p>
                        <div class="actions">
                            <button class="btn" type="button" onclick="choose('template1','Professional')">Choose</button>
                        </div>
                    </div>
                </article>

                <article class="tile template-card">
                    <div class="mock mock-modern" aria-label="Modern layout miniature preview">
                        <div class="preview-topline"><span>INDEPENDENT / PORTFOLIO</span><span>02</span></div>
                        <div class="mini-modern-layout">
                            <div class="mini-modern-title">Make<br>good <em>things.</em></div>
                            <div class="mini-modern-photo"></div>
                        </div>
                        <div class="mini-project-row"><span></span><span></span><span></span></div>
                    </div>
                    <div class="template-content">
                        <span class="template-number">LAYOUT 02</span>
                        <h2>Modern</h2>
                        <p>A split-screen introduction, oversized typography, and a compact grid for project highlights.</p>
                        <div class="actions">
                            <button class="btn" type="button" onclick="choose('template2','Modern')">Choose</button>
                        </div>
                    </div>
                </article>

                <article class="tile template-card">
                    <div class="mock mock-creative" aria-label="Miniature preview of the actual Creative portfolio layout">
                        <div class="mini-creative-canvas">
                            <div class="mini-creative-header">
                                <span>MYFOLIO <span style="color:#e76b50">/ CREATIVE</span></span>
                                <nav aria-hidden="true"><span>STORY</span><span>CONTACT</span></nav>
                            </div>
                            <div class="mini-creative-hero">
                                <div class="mini-creative-copy">
                                    <span class="mini-creative-label">A little about me</span>
                                    <div class="mini-creative-title">Your<br><em>Name</em></div>
                                    <div class="mini-creative-copyline"></div>
                                    <div class="mini-creative-copyline short"></div>
                                </div>
                                <div class="mini-creative-art">
                                    <div class="mini-creative-sun"></div>
                                    <div class="mini-creative-portrait">Y</div>
                                    <div class="mini-creative-note">A work in progress</div>
                                </div>
                            </div>
                            <div class="mini-creative-marquee"><span>✳</span> STAY CURIOUS <span>✳</span> MAKE THINGS <span>✳</span> KEEP LEARNING</div>
                            <div class="mini-creative-cards">
                                <div class="mini-creative-card about">01 / THE INTRODUCTION<br><br>The person behind the projects</div>
                                <div class="mini-creative-card education">02 / EDUCATION<br><br>Learning along the way</div>
                                <div class="mini-creative-card experience">03 / EXPERIENCE<br><br>Growing through work</div>
                                <div class="mini-creative-card projects">04 / PROJECTS<br><br>Ideas made real</div>
                                <div class="mini-creative-card skills">05 / SKILLS<br><br>My creative toolkit</div>
                            </div>
                        </div>
                    </div>
                    <div class="template-content">
                        <span class="template-number">LAYOUT 03</span>
                        <h2>Creative</h2>
                        <p>An editorial collage with a mint introduction, lilac portrait panel, coral accents, and staggered story cards.</p>
                        <div class="actions">
                            <button class="btn" type="button" onclick="choose('template3','Creative')">Choose</button>
                        </div>
                    </div>
                </article>
            </section>
        </form>

        <footer class="footer">
            <a href="{{ route('portfolio.edit', $portfolio->id) }}">← Back to your details</a>
            <span>Choose a layout; your saved information stays the same.</span>
        </footer>
    </main>
    <script>

        function choose(value, name) {
            if (!confirm('Use the ' + name + ' template for your portfolio?')) {
                return;
            }

            document.getElementById('templateValue').value = value;
            document.getElementById('templateForm').requestSubmit();
        }
    </script>
</body>
</html>
