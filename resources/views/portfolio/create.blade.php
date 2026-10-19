<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4f1e8">
    <title>Create a portfolio | MyFolio</title>
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
.btn:hover { 
    background: #173d2d; 
    transform: translateY(-2px); 
}
.btn.secondary { 
    background: transparent; 
    color: var(--ink); 
    border-color: var(--rule); 
}
.btn.secondary:hover { 
    border-color: var(--ink); 
    background: var(--sheet); 
}
.actions { 
    display: flex; 
    align-items: center; 
    flex-wrap: wrap; 
    gap: 10px; 
    margin-top: 25px; 
}

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

/* Portfolio editor: a quiet, structured form rather than a dashboard */
.builder-shell { padding-top: 42px; }
.builder-heading { display: grid; grid-template-columns: minmax(0, 1fr) 250px; gap: 42px; align-items: end; margin-bottom: 34px; }
.builder-heading h1 { margin: 15px 0 12px; font-size: clamp(2.8rem, 5.4vw, 5.2rem); }
.builder-heading p { max-width: 600px; margin-bottom: 0; color: var(--muted); }
.builder-note { padding: 17px 18px; border-left: 3px solid var(--orange); background: #ece7d9; }
.builder-note strong { display: block; margin-bottom: 5px; font: 500 .66rem var(--mono); letter-spacing: .06em; text-transform: uppercase; }
.builder-note p { margin: 0; font-size: .78rem; line-height: 1.65; }
.form-panel { max-width: 100%; }
.form-panel .form-intro { display: flex; justify-content: space-between; gap: 20px; align-items: start; margin-bottom: 30px; padding-bottom: 23px; border-bottom: 1px solid var(--rule); }
.form-intro h2 { margin: 6px 0 4px; }
.form-intro p { margin: 0; color: var(--muted); font-size: .84rem; }
.form-state { flex: 0 0 auto; padding: 7px 9px; border: 1px solid var(--rule); color: var(--muted); font: .62rem var(--mono); white-space: nowrap; }
@media(max-width:760px) {
    .builder-shell { padding-top: 30px; }
    .builder-heading { grid-template-columns: 1fr; gap: 21px; }
    .builder-note { max-width: none; }
    .form-panel .form-intro { display: block; }
    .form-state { display: inline-block; margin-top: 13px; }
}

    </style>
</head>
<body class="builder-page create-page">
<header class="topbar">
    <a class="brand" href="{{ route('home') }}" aria-label="MyFolio home">myfolio<span>.</span></a>
    <nav class="navlinks" aria-label="Main navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('portfolio.create') }}">Create a portfolio <span aria-hidden="true">↗</span></a>
    </nav>
</header>
    <main class="shell builder-shell">
        <section class="builder-heading">
            <div>
                <span class="eyebrow">Step 01 / Your information</span>
                <h1>Start with<br><span class="gradient">what makes you, you.</span></h1>
                <p>There is no need to overthink it. Add the details you have now; you can refine your portfolio later.</p>
            </div>
            <aside class="builder-note">
                <strong>A note before you begin</strong>
                <p>Use clear, specific details. A small project you can explain well is more useful than a long list of vague claims.</p>
            </aside>
        </section>

        <section class="panel form-panel">
            <div class="form-intro">
                <div><span class="eyebrow">Portfolio worksheet</span><h2>Tell us about yourself.</h2><p>Fields can be updated later. Start with what you know.</p></div>
                <span class="form-state">01 / 02 · DETAILS</span>
            </div>
            <form action="{{ route('portfolio.store') }}" method="POST">
                @csrf
<section class="form-block" aria-labelledby="basics-title">
                <div class="form-block-heading">
                    <span class="block-number">01 /</span>
                    <div>
                        <h2 id="basics-title">Your basics</h2>
                        <p>The details someone needs to know and the best way to reach you.</p>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="field">
                        <label for="full_name">Full Name</label>
                        <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" placeholder="Your full name">
                        @error('full_name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="email">Email Address</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="contact_number">Contact Number</label>
                        <input id="contact_number" name="contact_number" type="text" value="{{ old('contact_number') }}" placeholder="Your phone number">
                        @error('contact_number')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" value="{{ old('address') }}" placeholder="City, Country">
                        @error('address')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </section>

            <section class="form-block" aria-labelledby="story-title">
                <div class="form-block-heading">
                    <span class="block-number">02 /</span>
                    <div>
                        <h2 id="story-title">Your story</h2>
                        <p>Introduce yourself and add your educational background.</p>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="field full">
                        <label for="about_me">About Me</label>
                        <textarea id="about_me" name="about_me" placeholder="Tell people a little about yourself...">{{ old('about_me') }}</textarea>
                        @error('about_me')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field full">
                        <label for="education">Educational Background</label>
                        <textarea id="education" name="education" placeholder="School, program, year, or relevant training...">{{ old('education') }}</textarea>
                        @error('education')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </section>

            <section class="form-block" aria-labelledby="work-title">
                <div class="form-block-heading">
                    <span class="block-number">03 /</span>
                    <div>
                        <h2 id="work-title">What you bring</h2>
                        <p>Show the skills you have developed and the projects or experience behind them.</p>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="field">
                        <label for="skills">Skills</label>
                        <textarea id="skills" name="skills" placeholder="Separate skills with commas">{{ old('skills') }}</textarea>
                        @error('skills')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="projects">Projects</label>
                        <textarea id="projects" name="projects" placeholder="Describe projects you have worked on...">{{ old('projects') }}</textarea>
                        @error('projects')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field full">
                        <label for="work_experience">Work Experience</label>
                        <textarea id="work_experience" name="work_experience" placeholder="Roles, organizations, dates, and responsibilities...">{{ old('work_experience') }}</textarea>
                        @error('work_experience')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </section>

            <section class="form-block" aria-labelledby="links-title">
                <div class="form-block-heading">
                    <span class="block-number">04 /</span>
                    <div>
                        <h2 id="links-title">Finishing touches</h2>
                        <p>Add your links and an image so people can put a face to your work.</p>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="field full">
                        <label for="social_links">Social Media / Website Links</label>
                        <textarea id="social_links" name="social_links" placeholder="GitHub, LinkedIn, personal website...">{{ old('social_links') }}</textarea>
                        @error('social_links')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="field full">
                        <label for="profile_picture">Profile Picture</label>
                        <input id="profile_picture" name="profile_picture" type="file" accept="image/*">
                        @error('profile_picture')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </section>
                <div class="actions form-actions">
                    <button class="btn" type="submit">Continue to layouts <span aria-hidden="true">↗</span></button>
                    <a class="btn secondary" href="{{ route('home') }}">Cancel</a>
                </div>
            </form>
        </section>

        <footer class="footer">
            <span>MYFOLIO / STEP 01</span>
            <span>Your information stays editable in your portfolio workflow.</span>
        </footer>
    </main>
</body>
</html>
