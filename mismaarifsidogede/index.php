<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIS Sidogede Grabag</title>
    <meta name="keywords" content="MIS Sidogede, Madrasah Ibtidaiyah, Sekolah Islam Grabag, Pendidikan Dasar Islam" />
    <meta name="description"
        content="MIS Sidogede Grabag: Menanamkan nilai Al-Qur'an sejak dini, membentuk generasi sholeh, cerdas, dan berkontribusi untuk bangsa." />
    <link href="https://fonts.googleapis.com/css2?family=Poppins  :wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css  " />
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

                .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 180px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside dropdown */
        .dropdown-content li {
            float: none;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show dropdown on hover */
        .dropdown:hover .dropdown-content {
            display: block;
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
                url("https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&q=80  ");
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

        /* === E-LEARNING === */
        .elearning-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .elearning-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .elearning-images {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .elearning-img-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .elearning-img-wrapper:hover {
            transform: translateY(-5px);
        }

        .elearning-img-wrapper img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .elearning-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .elearning-feature {
            background: var(--light);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            transition: 0.3s;
        }

        .elearning-feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .elearning-feature i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .demo-account-box {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border: 2px dashed #cbd5e1;
            border-radius: 16px;
            padding: 25px;
            margin-top: 30px;
        }

        .demo-account-title {
            color: var(--primary);
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .account-role {
            background: #dcfce7;
            color: #166534;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 10px;
        }

        .account-info {
            background: white;
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 15px;
            border: 1px solid #e2e8f0;
        }

        .account-detail {
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .account-detail strong {
            color: var(--primary);
            min-width: 70px;
            display: inline-block;
        }

        .btn-elearning {
            background: var(--secondary);
            color: white;
            font-weight: 600;
            padding: 16px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(22, 160, 133, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-elearning:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(22, 160, 133, 0.6);
        }

        /* === BELL SEKOLAH IOT === */
        .bell-container {
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

        .bell-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 16px;
        width: 100%;
        max-width: 700px;
        }

        .bell-img-wrapper {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .bell-img-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        }

        .bell-desc {
        text-align: center;
        font-size: 1.05rem;
        color: var(--text-dark);
        max-width: 600px;
        margin: 0;
        }

        .demo-account-simple {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }

        .demo-account-simple h4 {
            color: #495057;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .demo-credentials {
            background: white;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 10px;
            border: 1px dashed #dee2e6;
        }

        .demo-credentials div {
            padding: 4px 0;
        }

        /* Versi Minimalis */
        .bell-features-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 40px 0;
            justify-content: center;
        }

        .bell-feature-card {
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            border: 1px solid #e9ecef;
        }

        .bell-feature-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .demo-card .bell-feature-icon {
            color: var(--primary);
        }

        .bell-feature-card h4 {
            margin-bottom: 10px;
            color: #343a40;
        }

        .demo-credentials {
            background: white;
            padding: 8px;
            border-radius: 5px;
            margin: 10px 0;
            border: 1px solid #dee2e6;
        }

        .btn-bell {
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

        .btn-bell:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 20px rgba(39, 174, 96, 0.6);
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

        /* === ABSENSI DIGITAL === */
        .absensi-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .absensi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center; /* Align ke atas */
        }

        /* --- Perubahan untuk embed Instagram --- */
        .instagram-embed-container {
            position: relative;
            width: 100%;
            max-width: 540px; /* Sesuaikan ukuran maksimum dengan ukuran default Instagram */
            margin: 0 auto; /* Buat rata tengah */
            padding-bottom: 100%; /* Rasio aspek 9:16 untuk video potrait (540x960px) */
            height: 0;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .instagram-embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* --- Perubahan untuk tampilan di mobile --- */
        @media (max-width: 768px) {
            .absensi-grid {
                grid-template-columns: 1fr; /* Satu kolom di mobile */
                gap: 30px;
            }
            .instagram-embed-container {
                max-width: 100%;
                padding-bottom: 177.8%; /* Jaga rasio aspek */
            }
        }

        .absensi-images {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .absensi-img-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .absensi-img-wrapper:hover {
            transform: translateY(-5px);
        }

        .absensi-img-wrapper img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .absensi-features {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start; /* Align ke atas agar ikon dan teks sejajar */
            gap: 15px;
            padding: 15px;
            background: var(--light);
            border-radius: 12px;
            border-left: 4px solid var(--primary);
        }

        .feature-item i {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .feature-item h4 {
            color: var(--dark);
            margin-bottom: 5px;
        }

        .feature-item p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .absensi-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 30px;
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
            align-items: center;
            gap: 8px;
        }

        .btn-absensi:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(30, 132, 73, 0.6);
        }

        .btn-secondary {
            background: var(--light);
            color: var(--primary);
            border: 2px solid var(--primary);
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
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80  "
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
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80  "
                        alt="Belajar Bersama" />
                    <div class="card-caption">Belajar Bersama</div>
                </div>
                <div class="gallery-card">
                    <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=600&q=80  "
                        alt="MTQ Anak-Anak" />
                    <div class="card-caption">MTQ Anak-Anak</div>
                </div>
                <div class="gallery-card">
                    <img src="https://images.pexels.com/photos/3875190/pexels-photo-3875190.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1  "
                        alt="Pramuka" />
                    <div class="card-caption">Pramuka</div>
                </div>
                <div class="gallery-card">
                    <img src="https://images.pexels.com/photos/6984310/pexels-photo-6984310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1  "
                        alt="Lomba Kaligrafi" />
                    <div class="card-caption">Lomba Kaligrafi</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABSENSI DIGITAL -->
    <section id="absensi" class="section reveal">
        <div class="container">
            <div class="section-title">
                <h2>Absensi Digital</h2>
            </div>
            <div class="absensi-container">
                <div class="absensi-grid">
                    <!-- Video Promo -->
                    <div>
                        <h3 class="demo-account-title">
                            <i class="fab fa-youtube"></i>
                            Video Demo Absensi Digital
                        </h3>
                        <div class="instagram-embed-container">
                            <iframe src="https://drive.google.com/file/d/1VKsXNTbwuXER6rPFsSoDlGl4jK0vHlPg/preview"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <!-- Gallery & Fitur -->
                    <div class="absensi-features">
                        <h3 class="demo-account-title">
                            <i class="fas fa-images"></i>
                            Tampilan Aplikasi Absensi
                        </h3>

                        <div class="absensi-images">
                            <div class="absensi-img-wrapper">
                                <img src="assets/absen1.jpeg" alt="Tampilan Dashboard Absensi" />
                            </div>
                            <div class="absensi-img-wrapper">
                                <img src="assets/absen2.jpeg" alt="Laporan Kehadiran Siswa" />
                            </div>
                        </div>

                        <div class="feature-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Real-time Monitoring</h4>
                                <p>Pantau kehadiran siswa secara langsung</p>
                            </div>
                        </div>

                        <!-- Akun Demo Versi Sederhana -->
                        <div class="demo-account-simple">
                            <h4><i class="fas fa-key"></i> Akun Demo Testing</h4>
                            <div class="demo-credentials">
                                <div><strong>Username:</strong> admin</div>
                                <div><strong>Password:</strong> admin</div>
                            </div>
                            <small class="text-muted">
                                <i class="fas fa-info-circle"></i>
                                Gunakan akun ini untuk mencoba fitur admin
                            </small>
                        </div>

                        <div class="absensi-buttons">
                            <a href="https://sekolahpintar.my/missidogede/presensi/" target="_blank" class="btn-absensi">
                                <i class="fas fa-external-link-alt"></i>
                                Buka Aplikasi Absensi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- E-LEARNING PREVIEW -->
    <section id="elearning" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>E-Learning Sekolah</h2>
            </div>
            <div class="elearning-container">
                <div class="elearning-grid">
                    <!-- Gallery E-Learning dan Fitur -->
                    <div>
                        <div class="elearning-images">
                            <div class="elearning-img-wrapper">
                                <img src="assets/elearning1.jpeg" alt="Tampilan Dashboard E-Learning Siswa" />
                            </div>
                            <div class="elearning-img-wrapper">
                                <img src="assets/elearning2.jpeg" alt="Materi Pelajaran Interaktif" />
                            </div>
                        </div>
                        
                        <div class="elearning-features">
                            <div class="elearning-feature">
                                <i class="fas fa-book"></i>
                                <h4>Materi Digital</h4>
                                <p>Akses materi pelajaran online</p>
                            </div>
                            <div class="elearning-feature">
                                <i class="fas fa-tasks"></i>
                                <h4>Tugas Online</h4>
                                <p>Upload dan kumpulkan tugas</p>
                            </div>
                            <div class="elearning-feature">
                                <i class="fas fa-comments"></i>
                                <h4>Forum Diskusi</h4>
                                <p>Diskusi dengan guru dan teman</p>
                            </div>
                            <div class="elearning-feature">
                                <i class="fas fa-chart-line"></i>
                                <h4>Progress Tracking</h4>
                                <p>Pantau perkembangan belajar</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Akun Demo -->
                    <div>
                        <div class="demo-account-box">
                            <div class="demo-account-title">
                                <i class="fas fa-user-graduate"></i>
                                Akun Demo untuk Mencoba
                            </div>
                            
                            <!-- Guru Account -->
                            <div class="account-info">
                                <span class="account-role">Guru / Pengajar</span>
                                <div class="account-detail">
                                    <strong>Email:</strong> guru@sekolahpintar.my
                                </div>
                                <div class="account-detail">
                                    <strong>Password:</strong> guru
                                </div>
                            </div>
                            
                            <!-- Siswa Account -->
                            <div class="account-info">
                                <span class="account-role">Siswa</span>
                                <div class="account-detail">
                                    <strong>Email:</strong> siswa@sekolahpintar.my
                                </div>
                                <div class="account-detail">
                                    <strong>Password:</strong> siswa
                                </div>
                            </div>
                            
                            <p class="account-detail" style="font-size: 0.9rem; margin-top: 15px; color: var(--gray);">
                                <i class="fas fa-info-circle"></i>
                                Gunakan akun demo di atas untuk login dan menjelajahi fitur-fitur platform E-Learning.
                            </p>
                            <div class="absensi-buttons">
                                <a href="https://sekolahpintar.my/elearning/" target="_blank" 
                                   class="btn-elearning">
                                    <i class="fas fa-external-link-alt"></i>
                                    Buka Platform E-Learning
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BELL SEKOLAH IOT PREVIEW -->
    <section id="bell-iot" class="section bg-light reveal">
        <div class="container">
            <div class="section-title">
                <h2>Bell Sekolah Otomatis (IoT)</h2>
            </div>
            <div class="bell-container">
                <div class="bell-gallery">
                    <div class="bell-img-wrapper">
                        <img src="assets/bel1.jpeg" alt="Antarmuka Pengaturan Jadwal Bell" />
                    </div>
                    <div class="bell-img-wrapper">
                        <img src="assets/bel2.jpeg" alt="Fitur Jadwal Bell" />
                    </div>
                    <div class="bell-img-wrapper">
                        <img src="assets/bel3.jpeg" alt="Perangkat IoT Bell Sekolah" />
                    </div>
                </div>
                <p class="bell-desc">
                    Sistem bell otomatis berbasis IoT yang akurat, fleksibel, dan dapat dikendalikan dari mana saja untuk menunjang kegiatan belajar mengajar yang lebih teratur.
                </p>
                <div class="bell-features-grid">
                    <div class="bell-feature-card">
                        <div class="bell-feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Jadwal Fleksibel</h4>
                        <p>Atur jadwal bel sesuai kebutuhan pembelajaran</p>
                    </div>

                    <div class="bell-feature-card">
                        <div class="bell-feature-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h4>Kontrol Online</h4>
                        <p>Kendalikan dari smartphone atau komputer</p>
                    </div>

                    <div class="bell-feature-card">
                        <div class="bell-feature-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h4>Multiple Sound</h4>
                        <p>Berbagai pilihan suara bel</p>
                    </div>

                    <div class="bell-feature-card demo-card">
                        <div class="bell-feature-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <h4>Akun Demo Testing</h4>
                        <div class="demo-credentials">
                            <div><strong>Username:</strong> admin</div>
                            <div><strong>Password:</strong> admin</div>
                        </div>
                        <small class="text-muted">
                            <i class="fas fa-info-circle"></i>
                            Gunakan untuk mencoba fitur admin
                        </small>
                    </div>
                </div>
                <a href="https://sekolahpintar.my/bel  " target="_blank" rel="noopener" class="btn-bell">
                    Lihat Demo Bell IoT
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
    <script async src="//www.instagram.com/embed.js"></script>
</body>

</html>