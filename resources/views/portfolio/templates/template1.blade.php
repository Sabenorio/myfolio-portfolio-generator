<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $portfolio->full_name }} | Professional Portfolio</title>
    <style>
        :root {
            --ink: #182b43;
            --muted: #64748b;
            --line: #dbe3eb;
            --paper: #ffffff;
            --soft: #f3f6f9;
            --accent: #245b83;
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: #e9eef3;
            color: var(--ink);
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.65;
        }
        a { color: var(--accent); }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px max(24px, calc((100% - 1100px) / 2));
            background: var(--paper);
            border-bottom: 1px solid var(--line);
        }
        .brand { color: var(--ink); font-weight: 800; text-decoration: none; letter-spacing: .04em; }
        .topbar nav { display: flex; gap: 20px; }
        .topbar nav a { font-size: 14px; text-decoration: none; font-weight: 700; }
        .page {
            width: min(1100px, calc(100% - 32px));
            margin: 38px auto;
            display: grid;
            grid-template-columns: 280px minmax(0, 1fr);
            background: var(--paper);
            box-shadow: 0 12px 35px #20354b12;
            border: 1px solid var(--line);
        }
        .sidebar {
            padding: 36px 28px;
            background: var(--soft);
            border-right: 1px solid var(--line);
        }
        .profile-photo {
            width: 145px; height: 145px; object-fit: cover;
            border-radius: 4px; border: 5px solid white;
            box-shadow: 0 0 0 1px var(--line);
        }
        .initials {
            width: 145px; height: 145px; display: grid; place-items: center;
            background: #dce8f1; color: var(--accent); font-size: 42px; font-weight: 800;
        }
        .sidebar h1 { font-size: 26px; line-height: 1.15; margin: 22px 0 8px; }
        .role { color: var(--muted); font-size: 13px; text-transform: uppercase; letter-spacing: .13em; }
        .side-label { margin-top: 28px; padding-bottom: 7px; border-bottom: 2px solid var(--accent); font-size: 11px; font-weight: 800; letter-spacing: .14em; }
        .side-value { overflow-wrap: anywhere; font-size: 13px; color: #334155; }
        .main-content { padding: 38px 44px; min-width: 0; }
        .resume-heading { border-bottom: 3px solid var(--ink); padding-bottom: 20px; margin-bottom: 8px; }
        .resume-heading span { color: var(--accent); font-size: 12px; font-weight: 800; letter-spacing: .2em; text-transform: uppercase; }
        .resume-heading h2 { font-size: 30px; margin: 8px 0 0; }
        .content-section { padding: 24px 0; border-bottom: 1px solid var(--line); }
        .section-number { color: var(--accent); font-size: 10px; font-weight: 800; letter-spacing: .16em; margin: 0 0 5px; }
        .content-section h2 { font-size: 18px; margin: 0 0 10px; }
        .content-section p { white-space: pre-line; margin: 7px 0; color: #475569; font-size: 14px; }
        .skills-list { display: flex; flex-wrap: wrap; gap: 8px; }
        .skill { border: 1px solid #c7d5e2; padding: 5px 10px; font-size: 12px; border-radius: 3px; background: #f8fafc; }
        .actions { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px; }
        .button { display: inline-block; padding: 10px 14px; color: white; background: var(--accent); border: 0; text-decoration: none; font-size: 13px; font-weight: 700; cursor: pointer; }
        .button.secondary { color: var(--ink); background: white; border: 1px solid var(--line); }
        .manage { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 24px; }
        .manage form { margin: 0; }
        footer { text-align: center; color: var(--muted); padding: 24px; font-size: 12px; }
        @media (max-width: 760px) {
            .page { grid-template-columns: 1fr; margin: 16px auto; }
            .sidebar { border-right: 0; border-bottom: 1px solid var(--line); }
            .main-content { padding: 24px; }
            .topbar { padding: 16px 20px; }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <a class="brand" href="{{ route('home') }}">MYFOLIO / PROFILE</a>
        <nav aria-label="Main navigation">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('portfolio.create') }}">Create new</a>
        </nav>
    </header>

    <main class="page">
        <aside class="sidebar">
            @if ($portfolio->profile_picture)
                <img class="profile-photo" src="{{ asset('storage/' . $portfolio->profile_picture) }}" alt="Profile photo">
            @else
                <div class="initials" aria-hidden="true">{{ strtoupper(substr($portfolio->full_name, 0, 1)) }}</div>
            @endif

            <h1>{{ $portfolio->full_name }}</h1>
            <div class="role">Professional profile</div>

            <div class="side-label">CONTACT</div>
            @if ($portfolio->email)<p class="side-value">{{ $portfolio->email }}</p>@endif
            @if ($portfolio->contact_number)<p class="side-value">{{ $portfolio->contact_number }}</p>@endif
            @if ($portfolio->address)<p class="side-value">{{ $portfolio->address }}</p>@endif

            <div class="side-label">CORE SKILLS</div>
            <div class="skills-list">
                @foreach (preg_split('/[,\n]+/', $portfolio->skills ?? '', -1, PREG_SPLIT_NO_EMPTY) as $skill)
                    <span class="skill">{{ trim($skill) }}</span>
                @endforeach
            </div>

            @if ($portfolio->social_links)
                <div class="side-label">ONLINE PROFILE</div>
                <p class="side-value">{{ $portfolio->social_links }}</p>
            @endif
        </aside>

        <div class="main-content">
            <div class="resume-heading">
                <span>Curriculum vitae</span>
                <h2>Professional Summary</h2>
            </div>

    <section class="content-section about-section">
        <p class="section-number">01 / ABOUT</p>
        <h2>About me</h2>
        <p>{{ $portfolio->about_me ?: 'Add a short introduction about yourself.' }}</p>
    </section>

    <section class="content-section">
        <p class="section-number">02 / EDUCATION</p>
        <h2>Education</h2>
        <p>{{ $portfolio->education ?: 'Education details will appear here.' }}</p>
    </section>

    <section class="content-section">
        <p class="section-number">03 / EXPERIENCE</p>
        <h2>Work experience</h2>
        <p>{{ $portfolio->work_experience ?: 'Work experience will appear here.' }}</p>
    </section>

    <section class="content-section">
        <p class="section-number">04 / SELECTED WORK</p>
        <h2>Projects</h2>
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
        <p class="section-number">06 / CONTACT</p>
        <h2>Let's connect</h2>
        @if ($portfolio->email)
            <p><strong>Email:</strong> <a href="mailto:{{ $portfolio->email }}">{{ $portfolio->email }}</a></p>
        @endif
        @if ($portfolio->contact_number)
            <p><strong>Phone:</strong> {{ $portfolio->contact_number }}</p>
        @endif
        @if ($portfolio->address)
            <p><strong>Location:</strong> {{ $portfolio->address }}</p>
        @endif
        @if ($portfolio->social_links)
            <p><strong>Online:</strong> {{ $portfolio->social_links }}</p>
        @endif
    </section>

            <div class="manage">
                <a class="button" href="{{ route('portfolio.edit', $portfolio->id) }}">Edit portfolio</a>
                <button class="button secondary" type="button" onclick="window.print()">Print / Save PDF</button>
                <form method="POST" action="{{ route('portfolio.destroy', $portfolio->id) }}" onsubmit="return confirm('Delete this portfolio?')">
                    @csrf
                    @method('DELETE')
                    <button class="button secondary" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </main>

    <footer>Prepared with MyFolio · Professional template</footer>
</body>
</html>
