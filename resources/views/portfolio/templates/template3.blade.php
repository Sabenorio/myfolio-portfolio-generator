<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fbf8f0">
    <title>{{ $portfolio->full_name }} | Creative Portfolio</title>

    <style>
        :root {
            --paper: #fbf8f0;
            --paper-deep: #f1ecdf;
            --ink: #27332d;
            --muted: #657168;
            --line: #d8dfd5;
            --coral: #e76b50;
            --mint: #cbe7d6;
            --lilac: #e7def7;
            --yellow: #f4cc68;
            --white: #fffefa;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--ink);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
        }

        a {
            color: inherit;
        }

        button,
        input,
        textarea {
            font: inherit;
        }

        .site-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 20px clamp(20px, 5vw, 76px);
            border-bottom: 1px solid var(--line);
            background: rgba(255, 254, 250, 0.72);
        }

        .brand {
            color: var(--ink);
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 0.08em;
            text-decoration: none;
        }

        .brand span {
            color: var(--coral);
        }

        .site-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        .site-nav a {
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
        }

        .site-nav a:hover {
            color: var(--coral);
        }

        .edition {
            color: var(--muted);
            font-size: 11px;
            text-align: right;
        }

        .edition strong {
            display: block;
            color: var(--coral);
            font-size: 12px;
        }

        .page {
            width: min(1240px, calc(100% - 36px));
            margin: 30px auto 64px;
        }

        .hero {
            display: grid;
            grid-template-columns: minmax(0, 1.12fr) minmax(290px, 0.88fr);
            gap: 22px;
            align-items: stretch;
        }

        .hero-copy {
            position: relative;
            display: flex;
            min-height: 470px;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: clamp(28px, 5vw, 66px);
            overflow: hidden;
            background: var(--mint);
            border-radius: 4px 78px 4px 4px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 28px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 25px;
            height: 2px;
            background: var(--coral);
            content: "";
        }

        .hero h1 {
            max-width: 780px;
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(48px, 7.1vw, 94px);
            font-weight: 700;
            letter-spacing: -0.07em;
            line-height: 0.98;
            overflow-wrap: anywhere;
        }

        .hero h1 .name-second {
            color: var(--coral);
            font-style: italic;
            font-weight: 500;
        }

        .hero-description {
            max-width: 500px;
            margin: 24px 0 0;
            color: #42564a;
            font-size: 15px;
            white-space: pre-line;
        }

        .hero-footnote {
            display: flex;
            width: 100%;
            justify-content: space-between;
            gap: 12px;
            margin-top: 34px;
            padding-top: 12px;
            border-top: 1px solid rgba(39, 51, 45, 0.2);
            color: var(--muted);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .hero-art {
            position: relative;
            min-height: 470px;
            padding: 26px;
            overflow: hidden;
            background: var(--lilac);
            border-radius: 78px 4px 4px 4px;
        }

        .art-shape {
            position: absolute;
            top: 30px;
            right: 28px;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--yellow);
        }

        .portrait-frame {
            position: absolute;
            inset: 64px 42px 60px 42px;
            z-index: 1;
            display: grid;
            place-items: center;
            overflow: hidden;
            border: 10px solid var(--white);
            border-radius: 46% 46% 5px 5px;
            background: #e8a997;
            box-shadow: 0 12px 28px rgba(39, 51, 45, 0.09);
            transform: rotate(-3deg);
        }

        .portrait-frame img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .portrait-placeholder {
            display: grid;
            width: 100%;
            height: 100%;
            place-items: center;
            background: #e8a997;
            color: var(--ink);
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(100px, 16vw, 190px);
            font-style: italic;
        }

        .art-note {
            position: absolute;
            right: 18px;
            bottom: 18px;
            z-index: 2;
            max-width: 150px;
            padding: 12px 14px;
            background: var(--coral);
            color: var(--white);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 14px;
            font-style: italic;
            line-height: 1.2;
            transform: rotate(3deg);
        }

        .marquee {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 12px 24px;
            margin: 18px 0 24px;
            padding: 13px 10px;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            color: var(--muted);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-align: center;
            text-transform: uppercase;
        }

        .marquee span {
            color: var(--coral);
            font-size: 16px;
        }

        .story-grid {
            display: grid;
            grid-template-columns: repeat(12, minmax(0, 1fr));
            gap: 18px;
            align-items: start;
        }

        .story-card {
            min-width: 0;
            padding: clamp(22px, 3.3vw, 40px);
            overflow-wrap: anywhere;
        }

        .card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 28px;
            color: var(--muted);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .story-card h2 {
            margin: 0 0 16px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(28px, 3.8vw, 47px);
            font-weight: 600;
            letter-spacing: -0.055em;
            line-height: 1.05;
        }

        .story-card p {
            margin: 0;
            white-space: pre-line;
        }

        .story-card p + p {
            margin-top: 12px;
        }

        .about-card {
            grid-column: span 7;
            min-height: 290px;
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 4px 4px 70px 4px;
        }

        .education-card {
            grid-column: span 5;
            min-height: 290px;
            margin-top: 32px;
            background: var(--yellow);
            border-radius: 4px;
        }

        .experience-card {
            grid-column: span 5;
            min-height: 290px;
            background: var(--lilac);
            border-radius: 4px 70px 4px 4px;
        }

        .projects-card {
            grid-column: span 7;
            min-height: 330px;
            margin-top: -14px;
            background: var(--coral);
            color: var(--white);
            border-radius: 4px;
        }

        .projects-card .card-meta {
            color: rgba(255, 254, 250, 0.82);
        }

        .projects-card h2 {
            max-width: 420px;
            font-size: clamp(38px, 5.5vw, 70px);
        }

        .skills-card {
            grid-column: span 4;
            min-height: 240px;
            background: var(--mint);
            border-radius: 4px;
        }

        .contact-card {
            grid-column: span 8;
            min-height: 240px;
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 4px;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skill {
            display: inline-block;
            padding: 7px 11px;
            border: 1px solid rgba(39, 51, 45, 0.35);
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .contact-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px 24px;
        }

        .contact-item {
            min-width: 0;
            padding-top: 10px;
            border-top: 1px solid var(--line);
            overflow-wrap: anywhere;
        }

        .contact-item strong {
            display: block;
            margin-bottom: 5px;
            color: var(--coral);
            font-size: 10px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .contact-item a {
            text-decoration-color: var(--coral);
            text-underline-offset: 3px;
        }

        .portfolio-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 32px;
        }

        .button {
            display: inline-flex;
            min-height: 44px;
            align-items: center;
            justify-content: center;
            padding: 11px 16px;
            border: 1px solid var(--ink);
            border-radius: 3px;
            background: var(--ink);
            color: var(--white);
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover {
            background: var(--coral);
            border-color: var(--coral);
        }

        .button.secondary {
            background: transparent;
            color: var(--ink);
        }

        .button.secondary:hover {
            background: var(--paper-deep);
            border-color: var(--paper-deep);
        }

        .portfolio-actions form {
            margin: 0;
        }

        .site-footer {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            margin-top: 48px;
            padding-top: 18px;
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-size: 11px;
        }

        @media (max-width: 820px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .hero-copy,
            .hero-art {
                min-height: 390px;
            }

            .story-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .story-card,
            .about-card,
            .education-card,
            .experience-card,
            .projects-card,
            .skills-card,
            .contact-card {
                grid-column: span 1;
                min-height: 0;
                margin-top: 0;
            }

            .projects-card,
            .contact-card {
                grid-column: 1 / -1;
            }
        }

        @media (max-width: 560px) {
            .site-header {
                align-items: flex-start;
                padding: 17px 18px;
            }

            .site-nav {
                justify-content: flex-end;
                gap: 10px 14px;
            }

            .site-nav a {
                font-size: 11px;
            }

            .edition {
                display: none;
            }

            .page {
                width: calc(100% - 20px);
                margin-top: 12px;
            }

            .hero-copy {
                min-height: 390px;
                padding: 28px 23px;
                border-top-right-radius: 50px;
            }

            .hero h1 {
                font-size: clamp(46px, 13vw, 72px);
            }

            .hero-art {
                min-height: 370px;
                border-top-left-radius: 50px;
            }

            .portrait-frame {
                inset: 52px 38px 52px;
            }

            .story-grid {
                display: block;
            }

            .story-card,
            .about-card,
            .education-card,
            .experience-card,
            .projects-card,
            .skills-card,
            .contact-card {
                margin: 0 0 13px;
                padding: 24px;
            }

            .card-meta {
                margin-bottom: 22px;
            }

            .contact-list {
                grid-template-columns: 1fr;
            }

            .site-footer {
                flex-direction: column;
            }
        }

        @media print {
            body {
                background: #ffffff;
                color: #27332d;
            }

            .site-nav,
            .portfolio-actions {
                display: none;
            }

            .page {
                width: 100%;
                margin: 0;
            }

            .hero,
            .story-grid {
                break-inside: avoid;
            }

            .hero-copy,
            .hero-art,
            .story-card {
                print-color-adjust: exact;
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}">MYFOLIO<span> / </span>CREATIVE</a>

        <nav class="site-nav" aria-label="Main navigation">
            <a href="#story">My story</a>
            <a href="#contact">Contact</a>
            <a href="{{ route('portfolio.create') }}">New portfolio</a>
        </nav>

        <div class="edition">
            PERSONAL PORTFOLIO
            <strong>Creative edition / 03</strong>
        </div>
    </header>

    <main class="page">
        <section class="hero" aria-label="Portfolio introduction">
            <div class="hero-copy">
                <span class="eyebrow">A little about me</span>

                @php
                    $nameParts = preg_split('/\s+/', trim($portfolio->full_name), 2);
                @endphp

                <h1>
                    <span>{{ $nameParts[0] ?? $portfolio->full_name }}</span>
                    @if (!empty($nameParts[1]))
                        <span class="name-second">{{ $nameParts[1] }}</span>
                    @endif
                </h1>

                <p class="hero-description">{{ $portfolio->about_me ?: 'A collection of experiences, ideas, projects, and things I am excited to share.' }}</p>

                <div class="hero-footnote">
                    <span>Portfolio no. {{ str_pad((string) $portfolio->id, 3, '0', STR_PAD_LEFT) }}</span>
                    <span>Made to be personal</span>
                </div>
            </div>

            <div class="hero-art" aria-label="Profile portrait">
                <div class="art-shape" aria-hidden="true"></div>

                <div class="portrait-frame">
                    @if ($portfolio->profile_picture)
                        <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" alt="Portrait of {{ $portfolio->full_name }}">
                    @else
                        <div class="portrait-placeholder" aria-hidden="true">
                            {{ strtoupper(substr($portfolio->full_name, 0, 1)) }}
                        </div>
                    @endif
                </div>

                <div class="art-note">A work in progress, in the best way.</div>
            </div>
        </section>

        <div class="marquee" aria-label="Personal values">
            <span>✳</span> Stay curious <span>✳</span> Make things <span>✳</span> Keep learning <span>✳</span> Stay curious
        </div>

        <section class="story-grid" id="story" aria-label="Portfolio details">
            <article class="story-card about-card">
                <div class="card-meta">
                    <span>01 / The introduction</span>
                    <span>A little context</span>
                </div>
                <h2>The person<br>behind the projects.</h2>
                <p>{{ $portfolio->about_me ?: 'Add a short introduction to tell people who you are and what matters to you.' }}</p>
            </article>

            <article class="story-card education-card">
                <div class="card-meta">
                    <span>02 / Where I learned</span>
                    <span>Background</span>
                </div>
                <h2>Learning<br>along the way.</h2>
                <p>{{ $portfolio->education ?: 'Your educational background will appear here.' }}</p>
            </article>

            <article class="story-card experience-card">
                <div class="card-meta">
                    <span>03 / What I have done</span>
                    <span>Experience</span>
                </div>
                <h2>Growing through<br>the work.</h2>
                <p>{{ $portfolio->work_experience ?: 'Your work experience will appear here.' }}</p>
            </article>

            <article class="story-card projects-card">
                <div class="card-meta">
                    <span>04 / Selected projects</span>
                    <span>Things I have made ↗</span>
                </div>
                <h2>Ideas turned<br>into something real.</h2>
                <p>{{ $portfolio->projects ?: 'Your projects and creative work will appear here.' }}</p>
            </article>

            <article class="story-card skills-card">
                <div class="card-meta">
                    <span>05 / My toolkit</span>
                    <span>Skills</span>
                </div>
                <h2>Things I<br>bring to the table.</h2>
                <div class="skills-list">
                    @foreach (preg_split('/[,\n]+/', $portfolio->skills ?? '', -1, PREG_SPLIT_NO_EMPTY) as $skill)
                        <span class="skill">{{ trim($skill) }}</span>
                    @endforeach
                </div>
            </article>

            <article class="story-card contact-card" id="contact">
                <div class="card-meta">
                    <span>06 / Keep in touch</span>
                    <span>Open to a hello</span>
                </div>
                <h2>Let's start<br>a conversation.</h2>

                <div class="contact-list">
                    @if ($portfolio->email)
                        <div class="contact-item">
                            <strong>Email</strong>
                            <a href="mailto:{{ $portfolio->email }}">{{ $portfolio->email }}</a>
                        </div>
                    @endif

                    @if ($portfolio->contact_number)
                        <div class="contact-item">
                            <strong>Phone</strong>
                            {{ $portfolio->contact_number }}
                        </div>
                    @endif

                    @if ($portfolio->address)
                        <div class="contact-item">
                            <strong>Location</strong>
                            {{ $portfolio->address }}
                        </div>
                    @endif

                    @if ($portfolio->social_links)
                        <div class="contact-item">
                            <strong>Online</strong>
                            {{ $portfolio->social_links }}
                        </div>
                    @endif
                </div>
            </article>
        </section>

        <div class="portfolio-actions" aria-label="Portfolio actions">
            <a class="button" href="{{ route('portfolio.edit', $portfolio->id) }}">Edit portfolio</a>
            <button class="button secondary" type="button" onclick="window.print()">Print / Save PDF</button>

            <form method="POST"
                  action="{{ route('portfolio.destroy', $portfolio->id) }}"
                  onsubmit="return confirm('Are you sure you want to delete this portfolio?')">
                @csrf
                @method('DELETE')
                <button class="button secondary" type="submit">Delete portfolio</button>
            </form>
        </div>
    </main>

    <footer class="site-footer">
        <span>MyFolio · Creative template 03</span>
        <span>Made with curiosity and a little color.</span>
    </footer>
</body>
</html>
