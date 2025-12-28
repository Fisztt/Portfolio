<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <title>Bajusz Krisztián | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- BAL OLDALI NAVBAR -->
    <nav class="sidebar">
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button id="themeToggle" class="theme-btn">🌙</button>
    </nav>

    <!-- FŐ TARTALOM -->
    <main class="main-content">
        <!-- HERO SZEKCIÓ -->
        <section id="hero" class="hero container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="assets/images/me.jpg" alt="Portrait of Bajusz Krisztián" class="hero-img">
                </div>
                <div class="col-md-7">
                    <h1>Hi, I'm Krisztián</h1>
                    <h2>Web Designer & Developer</h2>
                    <p>Hungarian Junior full-stack developer from Serbia with focus on PHP, JavaScript, HTML and CSS</p>

                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="container">
            <h3>Experiences</h3>
            <p>2023 - Present: Student at VТS University of Subotica, Serbia
            </p>
        </section>
        <!-- SKILLS -->
        <section id="skills" class="container">
            <h3>Skills</h3>
            <div class="carousel">
                <div class="group">
                    <div class="card"><i class="fa-brands fa-html5"> HTML</i></div>
                    <div class="card"><i class="fa-brands fa-css3-alt"> CSS</i></div>
                    <div class="card"><i class="fa-brands fa-js"> JavaScript</i></div>
                    <div class="card"><i class="fa-brands fa-php"> PHP</i></div>
                    <div class="card"><i class="fa-solid fa-database"> MySQL</i></div>
                    <div class="card"><i class="fa-brands fa-bootstrap"> Bootstrap</i></div>
                    <div class="card"><i class="fa-brands fa-figma"> Figma</i></div>

                </div>
                <div aria-hidden class="group">
                    <div class="card"><i class="fa-brands fa-html5"> HTML</i></div>
                    <div class="card"><i class="fa-brands fa-css3-alt"> CSS</i></div>
                    <div class="card"><i class="fa-brands fa-js"> JavaScript</i></div>
                    <div class="card"><i class="fa-brands fa-php"> PHP</i></div>
                    <div class="card"><i class="fa-solid fa-database"> MySQL</i></div>
                    <div class="card"><i class="fa-brands fa-bootstrap"> Bootstrap</i></div>
                    <div class="card"><i class="fa-brands fa-figma"> Figma</i></div>
                </div>
                <div aria-hidden class="group">
                    <div class="card"><i class="fa-brands fa-html5"> HTML</i></div>
                    <div class="card"><i class="fa-brands fa-css3-alt"> CSS</i></div>
                    <div class="card"><i class="fa-brands fa-js"> JavaScript</i></div>
                    <div class="card"><i class="fa-brands fa-php"> PHP</i></div>
                    <div class="card"><i class="fa-solid fa-database"> MySQL</i></div>
                    <div class="card"><i class="fa-brands fa-bootstrap"> Bootstrap</i></div>
                    <div class="card"><i class="fa-brands fa-figma"> Figma</i></div>
                </div>
            </div>
        </section>


        <!-- PROJECTS -->
        <section id="projects" class="container">
            <h3>Projects</h3>
            <p>Coming soon...</p>
            <a href="#projects" class="btn-main">View Projects</a>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="container">
            <h3>Contact</h3>
            <a class="btn-main"
                href="https://mail.google.com/mail/?view=cm&fs=1&to=bajuszkrisztian246@gmail.com&su=Hello&body=Hi Krisztián!"
                target="_blank">Email me via Gmail</a>

        </section>
    </main>
    <footer class="footer">
        <div class="container text-center">
            <p>Connect with me:</p>
            <div class="items">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://discord.com" target="_blank"><i class="fab fa-discord"></i></a>
                <a href="https://github.com/Fisztt" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <p>&copy; 2025 Bajusz Krisztián</p>
        </div>
    </footer>
    <!-- JAVASCRIPT: THEME TOGGLE -->
    <script>

        const btn = document.getElementById('themeToggle');
        const body = document.body;

        btn.addEventListener('click', () => {
            body.classList.toggle('dark');
            btn.textContent = body.classList.contains('dark') ? '☀️' : '🌙';
            localStorage.setItem('theme', body.classList.contains('dark') ? 'dark' : 'light');
        });

        // oldal betöltéskor
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark');
            btn.textContent = '☀️';
        }
    </script>

</body>

</html>