<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MI Ma'arif 1 Grabag | Presensi Guru & E-Learning</title>
    <meta name="keywords" content="MI Ma'arif Grabag, Madrasah Ibtidaiyah, Presensi Guru, E-Learning" />
    <link rel="icon" href="assets/img/logo-mi-maarif.png" type="image/png" />
    <meta name="description" content="Website resmi MI Ma'arif 1 Grabag - Sistem Presensi Guru, E-Learning, dan Informasi Sekolah" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        :root {
            --primary: #1e8449;
            --primary-light: #27ae60;
            --secondary: #16a085;
            --accent: #f39c12;
            --light: #f8fafc;
            --dark: #0f172a;
            --gray: #64748b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        html { scroll-behavior: smooth; }
        body { color: var(--dark); background: #fff; line-height: 1.6; }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: 1s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active { opacity: 1; transform: translateY(0); }

        header {
            position: fixed; top: 0; width: 100%; background: transparent;
            transition: all 0.4s ease; z-index: 1000; padding: 10px 0;
        }
        header.scrolled { background: rgba(255, 255, 255, 0.98); box-shadow: 0 4px 20px rgba(0,0,0,0.1); padding: 5px 0; }
        nav { max-width: 1200px; margin: auto; display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; }
        .logo { display: flex; align-items: center; gap: 12px; font-weight: 700; color: white; font-size: 1.1rem; transition: 0.3s; }
        header.scrolled .logo { color: var(--primary); }
        .logo img { width: 50px; height: 50px; object-fit: contain; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2)); }
        nav ul { display: flex; gap: 30px; list-style: none; }
        nav ul li a { text-decoration: none; color: white; font-weight: 500; font-size: 0.95rem; transition: 0.3s; position: relative; padding: 5px 0; }
        nav ul li a::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 0; background-color: var(--accent); transition: width 0.3s ease; }
        nav ul li a:hover::after, nav ul li a.active::after { width: 100%; }
        nav ul li a:hover, nav ul li a.active { color: var(--accent) !important; }

        .dropdown { position: relative; display: inline-block; }
        .dropdown-content {
            display: none; position: absolute; background-color: #f9f9f9; min-width: 180px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2); z-index: 1; border-radius: 8px; overflow: hidden;
        }
        .dropdown-content li { float: none; }
        .dropdown-content a { color: black; padding: 12px 16px; text-decoration: none; display: block; text-align: left; }
        .dropdown-content a:hover { background-color: #f1f1f1; }
        .dropdown:hover .dropdown-content { display: block; }

        header.scrolled nav ul li a { color: var(--dark); }
        header.scrolled nav ul li a::after { background-color: var(--primary); }
        header.scrolled nav ul li a:hover, header.scrolled nav ul li a.active { color: var(--primary) !important; }

        .menu-toggle { display: none; flex-direction: column; gap: 5px; cursor: pointer; }
        .menu-toggle span { width: 28px; height: 3px; background: white; border-radius: 5px; transition: 0.4s; }
        header.scrolled .menu-toggle span { background: var(--primary); }

        @media (max-width: 900px) { nav ul { gap: 15px; } nav ul li a { font-size: 0.9rem; } }
        @media (max-width: 768px) {
            nav ul {
                position: fixed; top: 0; right: -100%; width: 80%; height: 100vh; background: white;
                flex-direction: column; align-items: center; justify-content: center;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1); transition: 0.5s cubic-bezier(0.4,0,0.2,1);
            }
            nav ul.active { right: 0; }
            nav ul li a { color: var(--dark); font-size: 1.2rem; }
            .menu-toggle { display: flex; z-index: 1001; }
        }

        #home {
            min-height: 100vh; display: flex; align-items: center;
            background: linear-gradient(rgba(30,132,73,0.7), rgba(22,160,133,0.6)), url('assets/bg_header.png');
            background-size: cover; background-position: center; background-attachment: fixed; color: white; text-align: center;
        }
        #home h1 { font-size: clamp(2rem, 5vw, 3.5rem); line-height: 1.2; margin-bottom: 20px; font-weight: 800; }
        #home p { font-size: 1.1rem; max-width: 800px; margin: 0 auto 40px; opacity: 0.9; }
        .btn { padding: 15px 35px; border-radius: 50px; text-decoration: none; font-weight: 600; margin: 8px; display: inline-block; transition: 0.3s; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; }
        .btn-primary { background: var(--primary); color: white; border: 2px solid var(--primary); }
        .btn-outline { border: 2px solid white; color: white; }
        .btn-primary:hover { background: var(--primary-light); transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        .btn-outline:hover { background: white; color: var(--primary); transform: translateY(-3px); }

        section { padding: 100px 20px; }
        .container { max-width: 1100px; margin: auto; }
        h2 { font-size: 2.2rem; margin-bottom: 40px; position: relative; padding-bottom: 15px; }
        h2::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: var(--primary); border-radius: 2px; }

        /* About, VM, Keunggulan, Galeri (dari template sebelumnya, disingkat agar fokus) */
        #about .grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: center; }
        #about img { width: 100%; border-radius: 12px; }
        #about p { color: var(--gray); font-size: 1.05rem; margin-bottom: 15px; text-align: justify; }

        .vm-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(400px,1fr)); gap: 30px; margin-top: 50px; }
        .vm-card { background: white; padding: 40px 35px; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-left: 5px solid var(--primary); }
        .vm-card h3 { color: var(--primary); margin-bottom: 20px; font-size: 1.6rem; display: flex; gap: 12px; }
        .vm-card ul { list-style: none; }
        .vm-card li { padding: 10px 0 10px 30px; position: relative; color: var(--gray); }
        .vm-card li::before { content: "✓"; position: absolute; left: 0; color: var(--primary); font-weight: bold; }

        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px,1fr)); gap: 30px; margin-top: 50px; }
        .card { background: white; padding: 40px 30px; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: 0.4s; text-align: center; border-bottom: 4px solid transparent; }
        .card i { font-size: 3rem; color: var(--primary); margin-bottom: 20px; }
        .card h3 { margin-bottom: 15px; color: var(--secondary); }
        .card p { color: var(--gray); }
        .card:hover { transform: translateY(-12px); border-bottom: 4px solid var(--primary); }

        .gallery { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px,1fr)); gap: 20px; margin-top: 40px; }
        .gallery-item { position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: 0.4s; }
        .gallery-item img { width: 100%; height: 280px; object-fit: cover; transition: 0.4s; }
        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-caption { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 30px 20px 15px; font-weight: 600; transform: translateY(100%); transition: 0.3s; }
        .gallery-item:hover .gallery-caption { transform: translateY(0); }

        /* === PRESENSI SISWA & GURU (SIDE BY SIDE) === */
        .presensi-wrapper {
            max-width: 1200px; margin: 0 auto; background: white; padding: 40px; border-radius: 24px; box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .presensi-row {
            display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;
        }
        .presensi-col {
            background: var(--light); border-radius: 20px; padding: 25px; transition: 0.3s;
        }
        .presensi-col:hover { box-shadow: 0 20px 30px rgba(0,0,0,0.1); }
        .video-wrapper {
            position: relative; width: 100%; padding-bottom: 56.25%; /* 16:9 */ height: 0; overflow: hidden; border-radius: 16px; box-shadow: 0 8px 25px rgba(0,0,0,0.15); margin-bottom: 20px;
        }
        .video-wrapper iframe {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;
        }
        .foto-dua {
            display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin: 20px 0;
        }
        .foto-dua img {
            width: 100%; height: 150px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s;
        }
        .foto-dua img:hover { transform: scale(1.03); }
        .account-badge {
            background: white; border-radius: 12px; padding: 15px; margin: 15px 0; border-left: 4px solid var(--primary);
        }
        .btn-presensi {
            background: var(--primary); color: white; font-weight: 600; padding: 12px 25px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: 0.3s; box-shadow: 0 4px 10px rgba(30,132,73,0.3);
        }
        .btn-presensi:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(30,132,73,0.5); }

        /* === E-LEARNING (dengan video dan foto) === */
        .elearning-container {
            max-width: 1200px; margin: 0 auto; background: white; padding: 40px; border-radius: 24px; box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .elearning-grid {
            display: grid; grid-template-columns: 1.2fr 1fr; gap: 40px; align-items: start;
        }
        .elearning-video-foto .video-wrapper { margin-bottom: 25px; }
        .elearning-images {
            display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-bottom: 20px;
        }
        .elearning-images img {
            width: 100%; height: 150px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s;
        }
        .elearning-images img:hover { transform: translateY(-5px); }
        .demo-account-box {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border: 2px dashed #cbd5e1; border-radius: 16px; padding: 25px;
        }
        .demo-account-title { color: var(--primary); font-weight: 600; font-size: 1.2rem; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }
        .account-role { background: #dcfce7; color: #166534; padding: 6px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500; display: inline-block; margin-bottom: 10px; }
        .account-info { background: white; border-radius: 12px; padding: 18px; margin-bottom: 15px; border: 1px solid #e2e8f0; }
        .account-detail { margin-bottom: 8px; font-size: 1rem; }
        .account-detail strong { color: var(--primary); min-width: 70px; display: inline-block; }
        .btn-elearning {
            background: var(--secondary); color: white; font-weight: 600; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-size: 1.1rem; transition: 0.3s; box-shadow: 0 4px 15px rgba(22,160,133,0.4); display: inline-flex; align-items: center; gap: 10px; margin-top: 20px;
        }
        .btn-elearning:hover { transform: scale(1.05); box-shadow: 0 8px 25px rgba(22,160,133,0.6); }

        /* Bell IOT (ringkas) */
        .bell-container { max-width: 1200px; margin: 0 auto; background: white; padding: 40px; border-radius: 24px; box-shadow: 0 15px 40px rgba(0,0,0,0.1); display: flex; flex-direction: column; align-items: center; gap: 30px; }
        .bell-images { display: grid; grid-template-columns: repeat(3,1fr); gap: 15px; width: 100%; }
        .bell-img-wrapper img { width: 100%; height: 200px; object-fit: cover; border-radius: 12px; }
        .btn-bell { background: var(--primary); color: white; font-weight: 600; padding: 16px 40px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; }

        #contact { background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/bg_header.png'); background-size: cover; color: white; }
        #contact h2::after { background: var(--accent); }
        form { display: grid; gap: 20px; max-width: 700px; }
        input, textarea { padding: 16px; border-radius: 12px; border: none; font-size: 1rem; }
        .contact-info p { display: flex; align-items: center; gap: 15px; font-size: 1.05rem; }
        .contact-info i { font-size: 1.5rem; color: var(--accent); }
        footer { text-align: center; padding: 40px 20px; background: var(--dark); color: white; }

        @media (max-width: 768px) {
            .presensi-row { grid-template-columns: 1fr; }
            .elearning-grid { grid-template-columns: 1fr; }
            h2::after { left: 50%; transform: translateX(-50%); }
            .bell-images { grid-template-columns: 1fr; }
        }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2::after { left: 50%; transform: translateX(-50%); }
    </style>
</head>
<body>
    <header id="navbar">
        <nav>
            <div class="logo">
                <img src="assets/logomi.png" alt="Logo MI Ma'arif 1 Grabag" />
                <span>MI MA'ARIF 1 GRABAG</span>
            </div>
            <ul id="navMenu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#visi-misi">Visi & Misi</a></li>
                <li><a href="#keunggulan">Keunggulan</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Digitalisasi ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="#absensi">Absensi Digital</a></li>
                        <li><a href="#elearning">E-Learning</a></li>
                        <li><a href="#bell-iot">Bell Otomatis</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span><span></span><span></span>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="container">
            <h1>Membentuk Generasi Islami<br />Cerdas & Berkarakter</h1>
            <p>Pendidikan dasar Islam dengan integrasi teknologi presensi guru, siswa, dan e-learning modern</p>
            <div class="hero-btns">
                <a href="#contact" class="btn btn-primary">Daftar Sekarang</a>
                <a href="#about" class="btn btn-outline">Selengkapnya</a>
            </div>
        </div>
    </section>

    <section id="about" class="reveal">
        <div class="container grid">
            <div class="about-img-wrapper"><img src="assets/logomi.png" alt="Logo" /></div>
            <div>
                <h2>Tentang MI Ma'arif 1 Grabag</h2>
                <p>Madrasah Ibtidaiyah Ma'arif 1 Grabag berkomitmen memberikan pendidikan berkualitas yang mengintegrasikan ilmu pengetahuan umum dengan nilai-nilai keislaman, serta didukung sistem digital terkini.</p>
                <p>Dengan tenaga pendidik berpengalaman dan fasilitas digital (presensi, e-learning, bell IoT), kami ciptakan lingkungan belajar modern dan Islami.</p>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="reveal">
        <div class="container">
            <h2>Visi & Misi</h2>
            <div class="vm-grid">
                <div class="vm-card"><h3><i class="fas fa-eye"></i> Visi</h3><p>Menjadikan MI Ma'arif 1 Grabag sebagai lembaga pendidikan Islam yang unggul dalam prestasi dan teknologi.</p></div>
                <div class="vm-card"><h3><i class="fas fa-bullseye"></i> Misi</h3><ul><li>Menyelenggarakan pendidikan berkualitas</li><li>Mengintegrasikan teknologi digital</li><li>Menanamkan nilai keislaman</li><li>Membangun kerjasama dengan orang tua</li></ul></div>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="reveal">
        <div class="container">
            <h2>Keunggulan Kami</h2>
            <div class="cards">
                <div class="card"><i class="fas fa-quran"></i><h3>Pendidikan Islami</h3><p>Pembelajaran Al-Qur'an dan akhlak mulia</p></div>
                <div class="card"><i class="fas fa-chalkboard-teacher"></i><h3>Guru Berkualitas</h3><p>Tenaga pendidik profesional</p></div>
                <div class="card"><i class="fas fa-trophy"></i><h3>Prestasi Unggul</h3><p>Juara akademik & non-akademik</p></div>
                <div class="card"><i class="fas fa-laptop"></i><h3>Sistem Digital</h3><p>Presensi & e-learning terpadu</p></div>
            </div>
        </div>
    </section>

    <section id="galeri" class="reveal">
        <div class="container">
            <h2>Galeri Kegiatan</h2>
            <div class="gallery">
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800" alt="Belajar"><div class="gallery-caption">Pembelajaran di Kelas</div></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800" alt="Olahraga"><div class="gallery-caption">Olahraga</div></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?w=800" alt="Keagamaan"><div class="gallery-caption">Kegiatan Keagamaan</div></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=800" alt="Pramuka"><div class="gallery-caption">Ekstrakurikuler</div></div>
            </div>
        </div>
    </section>

    <!-- ===== PRESENSI SISWA & GURU SIDE BY SIDE ===== -->
    <section id="absensi" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>Absensi Digital</h2>
                <p>Sistem presensi online untuk siswa dan guru (terintegrasi)</p>
            </div>
            <div class="presensi-wrapper">
                <div class="presensi-row">
                    <!-- KOLOM SISWA -->
                    <div class="presensi-col">
                        <h3 style="color: var(--primary); margin-bottom: 15px;"><i class="fas fa-user-graduate"></i> Presensi Siswa</h3>
                        <div class="video-wrapper">
                            <iframe src="https://drive.google.com/file/d/1VKsXNTbwuXER6rPFsSoDlGl4jK0vHlPg/preview" allow="autoplay"></iframe>
                        </div>
                        <div class="foto-dua">
                            <img src="assets/absen1.jpeg" alt="Absen Siswa 1">
                            <img src="assets/absen2.jpeg" alt="Absen Siswa 2">
                        </div>
                        <div class="account-badge">
                            <strong><i class="fas fa-key"></i> Akun Demo Siswa</strong><br>
                            <span>Username: admin | Password: admin</span>
                        </div>
                        <a href="https://sekolahpintar.my/mimaarifgrabag1/presensi/" target="_blank" class="btn-presensi"><i class="fas fa-external-link-alt"></i> Buka Presensi Siswa</a>
                    </div>
                    <!-- KOLOM GURU -->
                    <div class="presensi-col">
                        <h3 style="color: var(--primary); margin-bottom: 15px;"><i class="fas fa-chalkboard-teacher"></i> Presensi Guru</h3>
                        <div class="video-wrapper">
                            <!-- Video Presensi Guru dari GDrive -->
                            <iframe src="https://drive.google.com/file/d/1U_LMerwCj8VZNZjxELfi1Lxi17DuMxoL/preview" allow="autoplay"></iframe>
                        </div>
                        <div class="foto-dua">
                            <!-- Foto di bawah video (contoh, bisa diganti dengan file asli) -->
                            <img src="assets/absen_guru1.png" alt="Presensi Guru 1" onerror="this.src='https://via.placeholder.com/300x200?text=Foto+Guru+1'">
                            <img src="assets/absen_guru2.png" alt="Presensi Guru 2" onerror="this.src='https://via.placeholder.com/300x200?text=Foto+Guru+2'">
                        </div>
                        <!-- Keterangan khusus guru: user admin password admin123 -->
                        <div class="account-badge" style="border-left-color: var(--accent);">
                            <strong><i class="fas fa-key"></i> Akun Demo Guru</strong><br>
                            <span>Username: <strong>admin</strong> | Password: <strong>admin123</strong></span>
                        </div>
                        <a href="https://sekolahpintar.my/mimaarifgrabag1/presensi/" target="_blank" class="btn-presensi"><i class="fas fa-external-link-alt"></i> Buka Presensi Guru</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== E-LEARNING ===== (dengan video dan foto sesuai permintaan) -->
    <section id="elearning" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>E-Learning Sekolah</h2>
                <p>Akses materi dan tugas online, serta tutorial penggunaan platform</p>
            </div>
            <div class="elearning-container">
                <div class="elearning-grid">
                    <!-- Kiri: video + foto -->
                    <div class="elearning-video-foto">
                        <div class="video-wrapper">
                            <!-- Video E-Learning dari GDrive -->
                            <iframe src="https://drive.google.com/file/d/1WxZDJDQcV-dOSYtCCAB9I_26h5kTNRYt/preview" allow="autoplay"></iframe>
                        </div>
                        <div class="elearning-images">
                            <img src="assets/elearning1.jpeg" alt="Elearning 1" onerror="this.src='https://via.placeholder.com/300x200?text=Tutor+1'">
                            <img src="assets/elearning2.jpeg" alt="Elearning 2" onerror="this.src='https://via.placeholder.com/300x200?text=Tutor+2'">
                        </div>
                        <p style="margin-top: 15px; color: var(--gray);"><i class="fas fa-info-circle"></i> Tutorial penggunaan e-learning untuk guru dan siswa.</p>
                    </div>
                    <!-- Kanan: akun demo dan fitur -->
                    <div>
                        <div class="demo-account-box">
                            <div class="demo-account-title"><i class="fas fa-user-graduate"></i> Akun Demo E-Learning</div>
                            <div class="account-info">
                                <span class="account-role">Guru</span>
                                <div class="account-detail"><strong>Email:</strong> guru@sekolahpintar.my</div>
                                <div class="account-detail"><strong>Password:</strong> guru</div>
                            </div>
                            <div class="account-info">
                                <span class="account-role">Siswa</span>
                                <div class="account-detail"><strong>Email:</strong> siswa@sekolahpintar.my</div>
                                <div class="account-detail"><strong>Password:</strong> siswa</div>
                            </div>
                            <p style="font-size:0.9rem;"><i class="fas fa-info-circle"></i> Gunakan akun demo untuk mencoba.</p>
                            <a href="https://sekolahpintar.my/elearning/" target="_blank" class="btn-elearning"><i class="fas fa-external-link-alt"></i> Buka E-Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BELL IOT (ringkas) -->
    <section id="bell-iot" class="reveal">
        <div class="container">
            <div class="section-title"><h2>Bell Sekolah Otomatis (IoT)</h2><p>Sistem bell berbasis IoT akurat</p></div>
            <div class="bell-container">
                <div class="bell-images">
                    <div class="bell-img-wrapper"><img src="assets/bel1.jpeg" alt="bel1" onerror="this.src='https://via.placeholder.com/300x200?text=Bell+1'"></div>
                    <div class="bell-img-wrapper"><img src="assets/bel2.jpeg" alt="bel2" onerror="this.src='https://via.placeholder.com/300x200?text=Bell+2'"></div>
                    <div class="bell-img-wrapper"><img src="assets/bel3.jpeg" alt="bel3" onerror="this.src='https://via.placeholder.com/300x200?text=Bell+3'"></div>
                </div>
                <a href="https://sekolahpintar.my/bel" target="_blank" class="btn-bell"><i class="fas fa-play-circle"></i> Lihat Demo Bell IoT</a>
            </div>
        </div>
    </section>

    <section id="contact" class="reveal">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px,1fr)); gap:40px;">
                <form><input type="text" placeholder="Nama Lengkap" required><input type="email" placeholder="Email / No HP" required><textarea rows="4" placeholder="Pertanyaan" required></textarea><button type="submit" class="btn btn-primary" style="background:var(--accent);color:var(--dark);border:none;">Kirim Pesan <i class="fas fa-paper-plane"></i></button></form>
                <div class="contact-info"><p><i class="fas fa-map-marker-alt"></i> Grabag, Magelang, Jawa Tengah</p><p><i class="fas fa-phone"></i> (0293) XXX-XXXX</p><p><i class="fas fa-envelope"></i> info@mimaarifgrabag.sch.id</p></div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 MI Ma'arif 1 Grabag. All Rights Reserved.</p>
        <p>Membentuk Generasi Islami yang Cerdas dan Berkarakter</p>
    </footer>

    <script>
        // Reveal on scroll
        const reveals = document.querySelectorAll(".reveal");
        function revealScroll() { reveals.forEach(el => { if (el.getBoundingClientRect().top < window.innerHeight - 100) el.classList.add("active"); }); }
        window.addEventListener("scroll", revealScroll); window.addEventListener("load", revealScroll);

        // Navbar scroll
        const header = document.getElementById("navbar");
        window.addEventListener("scroll", () => { header.classList.toggle("scrolled", window.scrollY > 50); });

        // Mobile menu toggle
        const menuToggle = document.getElementById("menuToggle");
        const navMenu = document.getElementById("navMenu");
        menuToggle.addEventListener("click", () => {
            navMenu.classList.toggle("active");
            const spans = menuToggle.querySelectorAll("span");
            spans[0].style.transform = navMenu.classList.contains("active") ? "rotate(45deg) translate(5px, 6px)" : "none";
            spans[1].style.opacity = navMenu.classList.contains("active") ? "0" : "1";
            spans[2].style.transform = navMenu.classList.contains("active") ? "rotate(-45deg) translate(5px, -6px)" : "none";
        });
 
        // Active menu
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll("nav ul li a");
        window.addEventListener("scroll", () => {
            let current = "";
            sections.forEach(section => { if (pageYOffset >= section.offsetTop - 150) current = section.getAttribute("id"); });
            navLinks.forEach(a => { a.classList.remove("active"); if (a.getAttribute("href").includes(current)) a.classList.add("active"); });
        });
    </script>
</body>
</html>