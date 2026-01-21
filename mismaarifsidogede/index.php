<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIS Sidogede Grabag</title>
    <meta name="keywords" content="MIS Sidogede, Madrasah Ibtidaiyah, Sekolah Islam Grabag, Pendidikan Dasar Islam" />
    <meta name="description"
        content="MIS Sidogede Grabag: Menanamkan nilai Al-Qur'an sejak dini, membentuk generasi sholeh, cerdas, dan berkontribusi untuk bangsa." />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        :root {
            --primary: #1e8449;
            --primary-light: #27ae60;
            --secondary: #16a085;
            --accent: #f39c12;
            --light: #f8fafc;
            --dark: #0f172a;
            --gray: #64748b;
            --light-gray: #f1f5f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: var(--dark);
            background-color: #fff;
            line-height: 1.7;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 15px 0;
            transition: all 0.4s ease;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 1.2rem;
            color: white;
            text-decoration: none;
        }

        header.scrolled .logo {
            color: var(--primary);
        }

        .logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 28px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            padding: 5px 0;
        }

        header.scrolled nav ul li a {
            color: var(--dark);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s;
        }

        nav ul li a:hover::after,
        nav ul li a.active::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: white;
            border-radius: 2px;
            transition: 0.3s;
        }

        header.scrolled .menu-toggle span {
            background: var(--primary);
        }

        /* Hero */
        #home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url("https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&q=80");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding-top: 80px;
        }

        .hero-content {
            max-width: 700px;
        }

        #home h1 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        #home p {
            font-size: 1.1rem;
            opacity: 0.95;
            margin-bottom: 30px;
            max-width: 600px;
        }

        .btn {
            display: inline-block;
            padding: 12px 32px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
        }

        .btn:hover {
            background: transparent;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        /* Section Umum */
        section {
            padding: 90px 0;
        }

        h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 50px;
            position: relative;
            color: var(--dark);
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        /* About */
        #about {
            background-color: var(--light-gray);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .about-text p {
            margin-bottom: 15px;
            color: var(--gray);
            text-align: justify;
        }

        .about-img {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .about-img img {
            width: 100%;
            display: block;
            transition: transform 0.4s ease;
        }

        .about-img:hover img {
            transform: scale(1.03);
        }

        /* Visi Misi - Horizontal */
        .vm-cards {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .vm-card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            flex: 1;
            min-width: 300px;
            transition: all 0.3s ease;
        }

        .vm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .vm-card h3 {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .vm-card p,
        .vm-card ul {
            color: var(--gray);
            font-size: 1rem;
        }

        .vm-card ul {
            padding-left: 20px;
            margin-top: 10px;
        }

        .vm-card li {
            margin-bottom: 8px;
        }

        /* Keunggulan */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .feature-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 16px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 18px;
        }

        .feature-card h3 {
            margin-bottom: 12px;
            color: var(--secondary);
        }

        .feature-card p {
            color: var(--gray);
            font-size: 0.95rem;
        }

        /* Galeri */
        .gallery-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .gallery-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            background: white;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .gallery-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.05);
        }

        .card-caption {
            padding: 15px;
            text-align: center;
            font-weight: 500;
            color: var(--dark);
            background: #fafafa;
            border-top: 1px solid #eee;
        }

        /* Kontak */
        #contact {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("assets/img/bg_header.png");
            background-size: cover;
            background-position: center;
            color: white;
        }

        #contact h2 {
            color: white;
        }

        #contact h2::after {
            background: var(--accent);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
        }

        .contact-form textarea {
            height: 120px;
            resize: vertical;
        }

        .contact-info-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 16px;
            backdrop-filter: blur(5px);
        }

        .contact-info-box p {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 18px;
            font-size: 1.05rem;
        }

        .contact-info-box i {
            color: var(--accent);
            font-size: 1.2rem;
            margin-top: 4px;
        }

        .submit-btn {
            background: var(--accent);
            color: var(--dark);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background: white;
            transform: translateY(-3px);
        }

        .absensi-container {
            max-width: 950px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }

        .absensi-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            width: 100%;
            max-width: 700px;
        }

        .absensi-img-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .absensi-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        .absensi-desc {
            text-align: center;
            font-size: 1.05rem;
            color: var(--text-dark);
            max-width: 600px;
            margin: 0;
        }

        .btn-absensi {
            background: var(--secondary);
            color: white;
            font-weight: 600;
            padding: 14px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.4);
            display: inline-block;
        }

        .btn-absensi:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(39, 174, 96, 0.6);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 30px 0;
            font-size: 0.95rem;
        }

        /* Responsive */
        @media (max-width: 992px) {

            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .about-img {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            nav ul {
                display: none;
            }

            .menu-toggle {
                display: flex;
            }

            h2 {
                font-size: 1.8rem;
            }
        }

        /* Tambahkan di media query untuk mobile menu */
        @media (max-width: 768px) {
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background: white;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 20px;
                transition: 0.4s ease;
                z-index: 999;
            }

            nav ul.active {
                right: 0;
            }

            nav ul li a {
                color: var(--dark);
                font-size: 1.1rem;
            }

            header.scrolled nav ul li a {
                color: var(--dark);
            }

            .menu-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .menu-toggle.active span:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="navbar">
        <div class="container">
            <nav>
                <a href="#home" class="logo">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpolygon points='50,10 90,35 90,75 50,95 10,75 10,35' fill='%231e8449' stroke='%23fff' stroke-width='2'/%3E%3Ctext x='50' y='60' font-family='Arial' font-size='40' font-weight='bold' text-anchor='middle' fill='%23fff'%3EMIS%3C/text%3E%3C/svg%3E"
                        alt="Logo MIS Sidogede Grabag" />
                    <span>MIS SIDOGEDE</span>
                </a>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Profil</a></li>
                    <li><a href="#visi-misi">Visi & Misi</a></li>
                    <li><a href="#keunggulan">Keunggulan</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#absensi">Absensi Digital</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Menanamkan Nilai Qur’ani, Membentuk Generasi Emas</h1>
                <p>MIS Sidogede Grabag hadir sebagai wadah pendidikan dasar yang menggabungkan kecerdasan intelektual,
                    spiritual, dan karakter islami sejak usia dini.</p>
                <a href="#contact" class="btn">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section id="about">
        <div class="container">
            <h2>Profil Sekolah</h2>
            <div class="about-grid">
                <div class="about-text">
                    <h3>Madrasah Ibtidaiyah Swasta Sidogede</h3>
                    <p>Berdiri sejak tahun 2005, MIS Sidogede Grabag telah menjadi pilihan utama orang tua di wilayah
                        Magelang bagian utara yang menginginkan pendidikan dasar berbasis nilai-nilai Islam.</p>
                    <p>Kami percaya bahwa fondasi pendidikan yang kuat dimulai dari lingkungan yang penuh kasih,
                        disiplin, dan keteladanan. Di sini, setiap anak didik tidak hanya belajar membaca dan berhitung,
                        tetapi juga belajar menjadi pribadi yang jujur, tanggung jawab, dan peduli.</p>
                    <p>Dengan kurikulum Kemenag yang diperkaya oleh program tahfidz, akhlak harian, dan pembiasaan
                        ibadah, kami siap menyiapkan generasi masa depan yang unggul di dunia dan akhirat.</p>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80"
                        alt="Kampus MIS Sidogede Grabag" />
                    <div class="img-caption">Kampus MIS Sidogede Grabag</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section id="visi-misi">
        <div class="container">
            <h2>Visi & Misi</h2>
            <div class="vm-cards">
                <div class="vm-card">
                    <h3><i class="fas fa-eye"></i> Visi</h3>
                    <p>Menjadi madrasah unggulan yang melahirkan generasi Qur’ani, berprestasi, berakhlak mulia, dan
                        berwawasan global.</p>
                </div>
                <div class="vm-card">
                    <h3><i class="fas fa-bullseye"></i> Misi</h3>
                    <ul>
                        <li>Menyelenggarakan pendidikan berbasis Al-Qur’an dan As-Sunnah</li>
                        <li>Mengembangkan potensi akademik dan non-akademik secara seimbang</li>
                        <li>Menanamkan nilai-nilai akhlakul karimah dalam keseharian</li>
                        <li>Menciptakan lingkungan belajar yang aman, nyaman, dan inspiratif</li>
                        <li>Memperkuat sinergi antara sekolah, keluarga, dan masyarakat</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan -->
    <section id="keunggulan">
        <div class="container">
            <h2>Keunggulan Kami</h2>
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-quran"></i></div>
                    <h3>Tahfidz Qur’an</h3>
                    <p>Program hafalan surat pendek & juz ‘amma sejak kelas 1.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3>Guru Teladan</h3>
                    <p>Pendidik berkompeten, bersertifikat, dan berakhlak baik.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-medal"></i></div>
                    <h3>Prestasi Nyata</h3>
                    <p>Rutin juara lomba MTQ, sains, dan seni tingkat kecamatan.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-school"></i></div>
                    <h3>Lingkungan Islami</h3>
                    <p>Sholat Dhuha, dzuhur berjamaah, dan pembiasaan adab sehari-hari.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri">
        <div class="container">
            <h2>Dokumentasi Kegiatan</h2>
            <div class="gallery-cards">
                <div class="gallery-card">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80"
                        alt="Belajar Bersama" />
                    <div class="card-caption">Belajar Bersama</div>
                </div>
                <div class="gallery-card">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=600&q=80"
                        alt="MTQ Anak-Anak" />
                    <div class="card-caption">MTQ Anak-Anak</div>
                </div>
                <div class="gallery-card">
                    <img src="https://images.pexels.com/photos/3875190/pexels-photo-3875190.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Pramuka" />
                    <div class="card-caption">Pramuka</div>
                </div>
                <div class="gallery-card">
                    <img src="https://images.pexels.com/photos/6984310/pexels-photo-6984310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Lomba Kaligrafi" />
                    <div class="card-caption">Lomba Kaligrafi</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABSENSI DIGITAL PREVIEW -->
    <section id="absensi" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Absensi Digital Sekolah</h2>
                <div></div>
            </div>
            <div class="absensi-container">
                <div class="absensi-gallery">
                    <div class="absensi-img-wrapper">
                        <img src="assets/absen1.jpeg" alt="Tampilan Absensi Siswa - Halaman Login" />
                    </div>
                    <div class="absensi-img-wrapper">
                        <img src="assets/absen2.jpeg" alt="Tampilan Absensi Siswa - Daftar Kehadiran" />
                    </div>
                    <div class="absensi-img-wrapper">
                        <img src="assets/absen3.jpeg" alt="Tampilan Absensi Orang Tua - Laporan Bulanan" />
                    </div>
                </div>
                <p class="absensi-desc">
                    Pantau kehadiran putra-putri Anda secara real-time melalui sistem absensi digital berbasis web.
                </p>
                <a href="https://sekolahpintar.my/missidogede/presensi/  " target="_blank" rel="noopener"
                    class="btn-absensi">
                    Buka Aplikasi Absensi
                </a>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <div class="contact-grid">
                <form class="contact-form">
                    <input type="text" placeholder="Nama Lengkap" required />
                    <input type="email" placeholder="Email atau No. HP" required />
                    <textarea placeholder="Pesan Anda..."></textarea>
                    <button type="submit" class="submit-btn">Kirim Pesan</button>
                </form>
                <div class="contact-info-box">
                    <p><i class="fas fa-map-marker-alt"></i> Dusun Sidogede, Desa Grabag, Kec. Grabag, Kab. Magelang,
                        Jawa Tengah</p>
                    <p><i class="fas fa-phone"></i> (0293) XXX-XXXX</p>
                    <p><i class="fas fa-envelope"></i> info@missetiodege.sch.id</p>
                    <p><i class="fas fa-clock"></i> Senin–Jumat • 07.00–14.00 WIB</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 MIS Sidogede Grabag. All Rights Reserved.</p>
        <p>Menanamkan nilai Qur’ani, membentuk generasi emas.</p>
    </footer>

    <script>
        // Scroll effect header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            header.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Smooth scroll & active link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mobile Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('nav ul');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });

        // Close menu when clicking on a link
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('active');
            });
        });

        // Active link on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav ul li a');

            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>