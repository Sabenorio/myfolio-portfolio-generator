<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $portfolio->full_name }} | Modern Portfolio</title>
    <style>
        :root { --bg: #101820; --panel: #192630; --text: #f4f7f8; --muted: #a9bac3; --accent: #8de0d1; --line: #34444d; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; background: var(--bg); color: var(--text); font-family: Inter, "Segoe UI", Arial, sans-serif; line-height: 1.6; }
        a { color: inherit; }
        .nav { display: flex; justify-content: space-between; align-items: center; padding: 22px max(24px, calc((100% - 1180px) / 2)); border-bottom: 1px solid var(--line); }
        .logo { font-size: 14px; font-weight: 900; letter-spacing: .16em; text-decoration: none; }
        .nav a:last-child { text-decoration: none; color: var(--accent); font-size: 13px; }
        .wrap { width: min(1180px, calc(100% - 40px)); margin: 0 auto; }
        .hero { min-height: 590px; display: grid; grid-template-columns: 1.15fr .85fr; align-items: center; gap: 54px; padding: 70px 0; }
        .eyebrow { color: var(--accent); font-size: 12px; font-weight: 800; letter-spacing: .2em; text-transform: uppercase; }
        .hero h1 { font-size: clamp(46px, 7vw, 92px); line-height: .98; letter-spacing: -.07em; margin: 22px 0; max-width: 680px; }
        .hero h1 span { color: var(--accent); }
        .intro { max-width: 560px; color: var(--muted); font-size: 17px; white-space: pre-line; }
        .hero-image { position: relative; padding: 18px; background: var(--accent); transform: rotate(2deg); }
        .hero-image img { display: block; width: 100%; height: 440px; object-fit: cover; filter: saturate(.82); }
        .image-placeholder { height: 440px; display: grid; place-items: center; background: #263842; color: var(--accent); font-size: 100px; font-weight: 900; }
        .image-caption { position: absolute; right: -12px; bottom: -18px; padding: 12px 16px; background: var(--panel); border: 1px solid var(--line); font-size: 12px; }
        .quick-links { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 28px; }
        .pill { display: inline-block; padding: 12px 18px; border: 1px solid var(--line); border-radius: 100px; text-decoration: none; font-size: 13px; font-weight: 700; }
        .pill.primary { background: var(--accent); color: #10211f; border-color: var(--accent); }
        .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; padding: 30px 0 70px; }
        .content-section { background: var(--panel); border: 1px solid var(--line); padding: 28px; min-width: 0; }
        .content-section.wide { grid-column: 1 / -1; }
        .section-number { color: var(--accent); font-size: 11px; font-weight: 800; letter-spacing: .18em; margin: 0 0 12px; }
        .content-section h2 { font-size: 25px; letter-spacing: -.04em; margin: 0 0 14px; }
        .content-section p { color: var(--muted); white-space: pre-line; margin: 8px 0; }
        .skills-list { display: flex; flex-wrap: wrap; gap: 8px; }
        .skill { padding: 7px 11px; border-radius: 100px; background: #263a43; color: var(--accent); font-size: 12px; }
        .contact-section a { color: var(--accent); }
        .manage { display: flex; gap: 10px; flex-wrap: wrap; margin: 0 0 48px; }
        .button { display: inline-block; padding: 12px 16px; background: var(--accent); color: #10211f; border: 1px solid var(--accent); border-radius: 5px; text-decoration: none; font-size: 13px; font-weight: 800; cursor: pointer; }
        .button.secondary { background: transparent; color: var(--text); border-color: var(--line); }
        .manage form { margin: 0; }
        footer { border-top: 1px solid var(--line); color: var(--muted); padding: 24px; text-align: center; font-size: 12px; }
        @media (max-width: 760px) {
            .hero { grid-template-columns: 1fr; gap: 34px; padding: 48px 0; }
            .hero-image { max-width: 440px; }
            .hero-image img, .image-placeholder { height: 340px; }
            .content-grid { grid-template-columns: 1fr; }
            .content-section.wide { grid-column: auto; }
            .nav { padding: 18px 22px; }
        }
    </style>
</head>
<body>
    <header class="nav">
        <a class="logo" href="{{ route('home') }}">MF / MYFOLIO</a>
        <a href="{{ route('portfolio.create') }}">Create a portfolio ↗</a>
    </header>

    <main class="wrap">
        <section class="hero">
            <div>
                <p class="eyebrow">Portfolio · {{ date('Y') }}</p>
                <h1>Hi, I'm <span>{{ $portfolio->full_name }}</span>.</h1>
                <p class="intro">{{ $portfolio->about_me ?: 'I create thoughtful work and enjoy turning ideas into useful projects.' }}</p>
                <div class="quick-links">
                    @if ($portfolio->email)
                        <a class="pill primary" href="mailto:{{ $portfolio->email }}">Let's talk ↗</a>
                    @endif
                    <a class="pill" href="#projects">Explore my work ↓</a>
                </div>
            </div>

            <div class="hero-image">
                @if ($portfolio->profile_picture)
                    <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" alt="Portrait of {{ $portfolio->full_name }}">
                @else
                    <div class="image-placeholder">{{ strtoupper(substr($portfolio->full_name, 0, 1)) }}</div>
                @endif
                <div class="image-caption">A little about me — a lot to create.</div>
            </div>
        </section>

        <div class="content-grid">
            <section class="content-section wide">
                <p class="section-number">01 / INTRODUCTION</p>
                <h2>About me</h2>
                <p>{{ $portfolio->about_me ?: 'Add your introduction to tell visitors what matters to you.' }}</p>
            </section>

            <section class="content-section">
                <p class="section-number">02 / BACKGROUND</p>
                <h2>Education</h2>
                <p>{{ $portfolio->education ?: 'Education details will appear here.' }}</p>
            </section>

            <section class="content-section">
                <p class="section-number">03 / EXPERIENCE</p>
                <h2>Work experience</h2>
                <p>{{ $portfolio->work_experience ?: 'Work experience will appear here.' }}</p>
            </section>

            <section class="content-section wide" id="projects">
                <p class="section-number">04 / SELECTED PROJECTS</p>
                <h2>Things I've worked on</h2>
                <p>{{ $portfolio->projects ?: 'Project details will appear here.' }}</p>
            </section>

            <section class="content-section">
                <p class="section-number">05 / TOOLKIT</p>
                <h2>Skills</h2>
                <div class="skills-list">
                    @foreach (preg_split('/[,\n]+/', $portfolio->skills ?? '', -1, PREG_SPLIT_NO_EMPTY) as $skill)
                        <span class="skill">{{ trim($skill) }}</span>
                    @endforeach
                </div>
            </section>

            <section class="content-section contact-section">
                <p class="section-number">06 / SAY HELLO</p>
                <h2>Contact</h2>
                @if ($portfolio->email)<p>{{ $portfolio->email }}</p>@endif
                @if ($portfolio->contact_number)<p>{{ $portfolio->contact_number }}</p>@endif
                @if ($portfolio->address)<p>{{ $portfolio->address }}</p>@endif
                @if ($portfolio->social_links)<p>{{ $portfolio->social_links }}</p>@endif
            </section>
        </div>

        <div class="manage">
            <a class="button" href="{{ route('portfolio.edit', $portfolio->id) }}">Edit portfolio</a>
            <button class="button secondary" type="button" onclick="window.print()">Print / Save PDF</button>
            <form method="POST" action="{{ route('portfolio.destroy', $portfolio->id) }}" onsubmit="return confirm('Delete this portfolio?')">
                @csrf
                @method('DELETE')
                <button class="button secondary" type="submit">Delete</button>
            </form>
        </div>
    </main>

    <footer>MyFolio · Modern portfolio layout</footer>
</body>
</html>
