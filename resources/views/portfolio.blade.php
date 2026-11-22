<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TES PORTFOLIO ILHAM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#home">
            ILHAM<span class="text-primary">.</span>
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>

    </div>
</nav>

<!-- HOME SECTION -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <p class="welcome-text">HELLO, WELCOME TO MY PORTFOLIO</p>

                <h1>
                    Hi, I'm <span class="text-primary-custom">Ilham</span>
                </h1>

                <h2>Information Systems Student</h2>

                <p class="hero-description">
                    Saya adalah mahasiswa Sistem Informasi Telkom University
                    yang memiliki ketertarikan pada teknologi, pemrograman,
                    pengolahan data, dan pengembangan website.
                </p>

                <a href="#projects" class="btn btn-primary-custom">
                    Lihat Project Saya
                </a>

                <a href="#contact" class="btn btn-outline-secondary ms-2">
                    Hubungi Saya
                </a>
            </div>

            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <div class="profile-circle">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h4 class="mt-3 fw-bold">Ilham Nuriansyah</h4>
                <p class="text-secondary">Information Systems Student</p>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <div class="about-icon">
                    <i class="bi bi-person-workspace"></i>
                </div>
            </div>

            <div class="col-lg-7">
                <h2 class="section-title">About Me</h2>

                <p>
                    Halo! Saya Ilham Nuriansyah, mahasiswa semester 3
                    Program Studi Sistem Informasi Telkom University.
                    Saya memiliki ketertarikan pada dunia teknologi,
                    pemrograman, dan pengelolaan data.
                </p>

                <p>
                    Saya senang mempelajari hal-hal baru dan
                    mengembangkan kemampuan di bidang teknologi.
                    Saya memiliki pengalaman mengerjakan berbagai
                    proyek dan praktikum, khususnya dalam bidang
                    database, pemrograman, dan pengembangan website.
                </p>

                <p>
                    Saya terus berusaha meningkatkan kemampuan
                    akademik maupun keterampilan melalui berbagai
                    kegiatan pembelajaran dan praktikum.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="skills-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="skills-label">MY ABILITIES</span>
            <h2 class="section-title">Skills & Expertise</h2>
            <p class="section-description">
                Kemampuan yang terus saya pelajari dan kembangkan
                sebagai mahasiswa Sistem Informasi.
            </p>
        </div>

        <div class="row g-4">

            <!-- Java -->
            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h5>Java Programming</h5>
                    <p>
                        Memahami dasar pemrograman Java,
                        OOP, class, object, inheritance,
                        dan encapsulation.
                    </p>
                    <div class="skill-level">
                        <span>Beginner</span>
                        <span>65%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 65%"></div>
                    </div>
                </div>
            </div>

            <!-- Database -->
            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="bi bi-database"></i>
                    </div>
                    <h5>Database Management</h5>
                    <p>
                        Membuat database, mengelola tabel,
                        menggunakan SQL, dan memahami
                        relasi antar-data.
                    </p>
                    <div class="skill-level">
                        <span>Beginner</span>
                        <span>70%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h5>Web Development</h5>
                    <p>
                        Membangun halaman website menggunakan
                        HTML, CSS, dan Bootstrap.
                    </p>
                    <div class="skill-level">
                        <span>Beginner</span>
                        <span>65%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 65%"></div>
                    </div>
                </div>
            </div>

            <!-- Microsoft Office -->
            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="bi bi-file-earmark-word"></i>
                    </div>
                    <h5>Microsoft Office</h5>
                    <p>
                        Menyusun dokumen, mengolah informasi,
                        dan membuat laporan menggunakan
                        Microsoft Office.
                    </p>
                    <div class="skill-level">
                        <span>Intermediate</span>
                        <span>75%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <!-- Creative Design -->
            <div class="col-md-6 col-lg-4">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h5>Creative Design</h5>
                    <p>
                        Membuat desain presentasi, poster,
                        dan konten visual menggunakan Canva.
                    </p>
                    <div class="skill-level">
                        <span>Intermediate</span>
                        <span>75%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 75%"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="projects-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="projects-label">MY WORK & EXPERIENCE</span>
            <h2 class="section-title">Selected Projects & Practicals</h2>
            <p class="section-description">
                Beberapa proyek dan praktikum yang telah saya
                kerjakan selama mempelajari bidang Sistem Informasi.
            </p>
        </div>

        <div class="row g-4">

            <!-- Project 1 -->
            <div class="col-md-6">
                <div class="project-card">
                    <div class="project-image database-image">
                        <i class="bi bi-hdd-network"></i>
                    </div>

                    <div class="project-content">
                        <span class="project-category">
                            SYSTEM ADMINISTRATION
                        </span>
                        <h4>Web Server & DNS Server</h4>

                        <p>
                            Membangun dan mengonfigurasi web server
                            menggunakan Nginx serta DNS server
                            menggunakan BIND pada Rocky Linux 9.8.
                            Proyek ini mencakup konfigurasi domain
                            lokal dan pengujian akses website.
                        </p>

                        <div class="project-tags">
                            <span>Rocky Linux</span>
                            <span>Nginx</span>
                            <span>BIND DNS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-6">
                <div class="project-card">
                    <div class="project-image mail-image">
                        <i class="bi bi-envelope-at"></i>
                    </div>

                    <div class="project-content">
                        <span class="project-category">
                            SERVER CONFIGURATION
                        </span>
                        <h4>Mail Server Configuration</h4>

                        <p>
                            Melakukan konfigurasi layanan mail server
                            menggunakan Postfix dan Dovecot.
                            Praktikum ini meliputi pengaturan layanan
                            email serta pemeriksaan status server.
                        </p>

                        <div class="project-tags">
                            <span>Linux</span>
                            <span>Postfix</span>
                            <span>Dovecot</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6">
                <div class="project-card">
                    <div class="project-image web-image">
                        <i class="bi bi-mortarboard"></i>
                    </div>

                    <div class="project-content">
                        <span class="project-category">
                            WEB DEVELOPMENT
                        </span>
                        <h4>Student Information System</h4>

                        <p>
                            Mengembangkan aplikasi pengelolaan data
                            mahasiswa dengan fitur login, koneksi
                            database, tampilan data mahasiswa,
                            dan pengelolaan file foto.
                        </p>

                        <div class="project-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>XAMPP</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-md-6">
                <div class="project-card">
                    <div class="project-image cafe-image">
                        <i class="bi bi-cup-hot"></i>
                    </div>

                    <div class="project-content">
                        <span class="project-category">
                            DATABASE DESIGN
                        </span>
                        <h4>Cafe Database Design</h4>

                        <p>
                            Merancang sistem basis data cafe
                            untuk membantu penyimpanan dan
                            pengelolaan informasi secara
                            terstruktur menggunakan SQL.
                        </p>

                        <div class="project-tags">
                            <span>Database</span>
                            <span>SQL</span>
                            <span>Data Modeling</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="contact-label">HUBUNGI SAYA</span>
            <h2 class="section-title">Mari Terhubung!</h2>

            <p class="section-description">
                Saya terbuka untuk menjalin relasi, berbagi pengalaman,
                dan berkolaborasi dalam berbagai kesempatan.
                Jangan ragu untuk menghubungi saya melalui kontak
                yang tersedia di bawah ini.
            </p>
        </div>

        <div class="row justify-content-center g-4">

            <!-- Email -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <h5>Email</h5>
                    <p>
                        Untuk komunikasi dan kerja sama profesional.
                    </p>

                    <a href="mailto:emailkamu@example.com">
                        Kirim Email
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- LinkedIn -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-linkedin"></i>
                    </div>

                    <h5>LinkedIn</h5>
                    <p>
                        Untuk membangun koneksi dan relasi profesional.
                    </p>

                    <a href="https://www.linkedin.com/" target="_blank">
                        Kunjungi Profil
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Instagram -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-instagram"></i>
                    </div>

                    <h5>Instagram</h5>
                    <p>
                        Untuk mengenal aktivitas dan keseharian saya.
                    </p>

                    <a href="https://www.instagram.com/" target="_blank">
                        Kunjungi Instagram
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- GitHub -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-github"></i>
                    </div>

                    <h5>GitHub</h5>
                    <p>
                        Untuk melihat proyek dan hasil belajar pemrograman saya.
                    </p>

                    <a href="https://github.com/" target="_blank">
                        Kunjungi GitHub
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="container text-center">

        <h5>ILHAM.</h5>

        <p>
            Dibuat dengan semangat belajar dan berkembang
            oleh Ilham Nuriansyah.
        </p>

        <p class="copyright">
            &copy; 2026 Ilham Nuriansyah. Seluruh Hak Dilindungi.
        </p>

    </div>
</footer>

<!-- BOOTSTRAP JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
