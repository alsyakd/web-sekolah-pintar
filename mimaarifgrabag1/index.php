<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MI Ma'arif 1 Grabag</title>
    <meta name="keywords" content="MI Ma'arif Grabag, Madrasah Ibtidaiyah, Sekolah Islam, Pendidikan Dasar Islam" />
    <link rel="icon" href="assets/img/logo-mi-maarif.png" type="image/png" />
    <meta name="description"
        content="Website resmi MI Ma'arif 1 Grabag - Membentuk Generasi Islami yang Cerdas, Berkarakter, dan Berprestasi" />
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

        html {
            scroll-behavior: smooth;
        }

        body {
            color: var(--dark);
            background: #fff;
            line-height: 1.6;
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: 1s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: transparent;
            transition: all 0.4s ease;
            z-index: 1000;
            padding: 10px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 5px 0;
        }

        nav {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        header.scrolled .logo {
            color: var(--primary);
        }

        .logo img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        nav ul {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 0.95rem;
            transition: 0.3s;
            position: relative;
            padding: 5px 0;
        }

        nav ul li a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after,
        nav ul li a.active::after {
            width: 100%;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: var(--accent) !important;
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
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 8px;
            overflow: hidden;
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
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show dropdown on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        header.scrolled nav ul li a {
            color: var(--dark);
        }

        header.scrolled nav ul li a::after {
            background-color: var(--primary);
        }

        header.scrolled nav ul li a:hover,
        header.scrolled nav ul li a.active {
            color: var(--primary) !important;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .menu-toggle span {
            width: 28px;
            height: 3px;
            background: white;
            border-radius: 5px;
            transition: 0.4s;
        }

        header.scrolled .menu-toggle span {
            background: var(--primary);
        }

        @media (max-width: 900px) {
            nav ul {
                gap: 15px;
            }

            nav ul li a {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            nav ul {
                gap: 25px;
            }

            nav ul li a {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: white;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1);
                transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            }

            nav ul.active {
                right: 0;
            }

            nav ul li a {
                color: var(--dark);
                font-size: 1.2rem;
            }

            .menu-toggle {
                display: flex;
                z-index: 1001;
            }
        }

        #home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(30, 132, 73, 0.7), rgba(22, 160, 133, 0.6)),
                url("assets/bg_header.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            text-align: center;
        }

        #home h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            line-height: 1.2;
            margin-bottom: 20px;
            font-weight: 800;
        }

        #home p {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }

        .btn {
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin: 8px;
            display: inline-block;
            transition: 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: 2px solid var(--primary);
        }

        .btn-outline {
            border: 2px solid white;
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px);
        }

        section {
            padding: 100px 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            font-size: 2.2rem;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 15px;
        }

        h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        #about .grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            align-items: center;
        }

        .about-img-wrapper {
            position: relative;
        }

        #about img {
            width: 100%;
            border-radius: 12px;
        }

        #about p {
            color: var(--gray);
            font-size: 1.05rem;
            margin-bottom: 15px;
            text-align: justify;
        }

        #visi-misi {
            background: var(--light);
        }

        .vm-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .vm-card {
            background: white;
            padding: 40px 35px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: 0.4s;
            border-left: 5px solid var(--primary);
        }

        .vm-card h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .vm-card h3 i {
            font-size: 1.8rem;
        }

        .vm-card ul {
            list-style: none;
            padding-left: 0;
        }

        .vm-card li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: var(--gray);
            line-height: 1.7;
        }

        .vm-card li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
            font-size: 1.2rem;
        }

        .vm-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .card {
            background: white;
            padding: 40px 30px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: 0.4s;
            text-align: center;
            border-bottom: 4px solid transparent;
        }

        .card i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
            display: block;
        }

        .card h3 {
            margin-bottom: 15px;
            color: var(--secondary);
        }

        .card p {
            color: var(--gray);
            line-height: 1.7;
        }

        .card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-bottom: 4px solid var(--primary);
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .gallery-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: 0.4s;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: 0.4s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 30px 20px 15px;
            font-weight: 600;
            transform: translateY(100%);
            transition: 0.3s;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
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
            align-items: center;
        }

        .instagram-embed-container {
            position: relative;
            width: 100%;
            padding-bottom: 125%;
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
            gap: 8px;
        }

        .feature-item {
            display: flex;
            align-items: center;
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
            background: var(--primary);
            color: white;
            font-weight: 600;
            padding: 14px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 132, 73, 0.4);
            display: inline-flex;
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
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .bell-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            width: 100%;
        }

        .bell-img-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .bell-img-wrapper:hover {
            transform: translateY(-5px);
        }

        .bell-img-wrapper img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
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
            background: var(--primary);
            color: white;
            font-weight: 600;
            padding: 16px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(var(--primary-rgb), 0.4);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-bell:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(var(--primary-rgb), 0.6);
        }

        #contact {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("assets/bg_header.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            position: relative;
        }

        #contact h2::after {
            background: var(--accent);
        }

        form {
            display: grid;
            gap: 20px;
            max-width: 700px;
        }

        input,
        textarea {
            padding: 16px;
            border-radius: 12px;
            border: none;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        input:focus,
        textarea:focus {
            box-shadow: 0 0 0 4px rgba(39, 174, 96, 0.5);
        }

        form .btn {
            cursor: pointer;
            border: none;
            width: fit-content;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
            justify-content: center;
        }

        .contact-info p {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.05rem;
        }

        .contact-info i {
            font-size: 1.5rem;
            color: var(--accent);
        }

        footer {
            text-align: center;
            padding: 40px 20px;
            background: var(--dark);
            color: white;
            opacity: 0.9;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            #about .grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .vm-grid {
                grid-template-columns: 1fr;
            }

            .absensi-grid,
            .elearning-grid {
                grid-template-columns: 1fr;
            }

            .absensi-images,
            .elearning-images,
            .bell-images {
                grid-template-columns: 1fr;
            }

            h2 {
                text-align: center;
            }

            h2::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .absensi-buttons,
            .bell-features {
                flex-direction: column;
                align-items: center;
            }

            .btn-absensi,
            .btn-elearning,
            .btn-bell {
                width: 100%;
                text-align: center;
                justify-content: center;
            }
        }

        /* Section Title Styling */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            display: inline-block;
            margin-bottom: 15px;
        }

        .section-title h2::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title p {
            color: var(--gray);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
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
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="container">
            <h1>Membentuk Generasi Islami<br />Cerdas & Berkarakter</h1>
            <p>Pendidikan dasar Islam yang mengintegrasikan nilai-nilai keislaman dengan pembelajaran berkualitas untuk
                membentuk generasi yang berakhlak mulia dan berprestasi</p>
            <div class="hero-btns">
                <a href="#contact" class="btn btn-primary">Daftar Sekarang</a>
                <a href="#about" class="btn btn-outline">Selengkapnya</a>
            </div>
        </div>
    </section>

    <section id="about" class="reveal">
        <div class="container grid">
            <div class="about-img-wrapper">
                <img src="assets/logomi.png" alt="Logo MI Ma'arif 1 Grabag" />
            </div>
            <div>
                <h2>Tentang MI Ma'arif 1 Grabag</h2>
                <p>Madrasah Ibtidaiyah Ma'arif 1 Grabag adalah lembaga pendidikan tingkat dasar yang bernaung di bawah
                    Kementerian Agama RI. Kami berkomitmen memberikan pendidikan berkualitas yang mengintegrasikan ilmu
                    pengetahuan umum dengan nilai-nilai keislaman.</p>
                <p>Dengan tenaga pendidik yang berpengalaman dan berdedikasi tinggi, serta fasilitas pembelajaran yang
                    memadai, kami menciptakan lingkungan belajar yang kondusif untuk mengembangkan potensi peserta didik
                    secara optimal.</p>
                <p>Kami percaya bahwa setiap anak memiliki potensi unik yang perlu dikembangkan melalui pendidikan
                    holistik yang mencakup aspek spiritual, intelektual, emosional, dan sosial.</p>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="reveal">
        <div class="container">
            <h2>Visi & Misi</h2>
            <div class="vm-grid">
                <div class="vm-card">
                    <h3><i class="fas fa-eye"></i> Visi</h3>
                    <p style="color: var(--gray); line-height: 1.8; font-size: 1.05rem;">
                        Menjadikan MI Ma'arif 1 Grabag sebagai lembaga pendidikan Islam yang unggul dalam prestasi
                        akademik dan non-akademik, berakhlakul karimah, serta berbudaya lingkungan.
                    </p>
                </div>
                <div class="vm-card">
                    <h3><i class="fas fa-bullseye"></i> Misi</h3>
                    <ul>
                        <li>Menyelenggarakan pendidikan berkualitas dan berorientasi prestasi</li>
                        <li>Menanamkan nilai-nilai keislaman dalam kehidupan sehari-hari</li>
                        <li>Mengembangkan potensi peserta didik secara optimal</li>
                        <li>Menciptakan lingkungan belajar kondusif dan menyenangkan</li>
                        <li>Membangun kerjasama dengan orang tua dan masyarakat</li>
                        <li>Menumbuhkan kesadaran menjaga lingkungan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="reveal">
        <div class="container">
            <h2>Keunggulan Kami</h2>
            <div class="cards">
                <div class="card">
                    <i class="fas fa-quran"></i>
                    <h3>Pendidikan Islami</h3>
                    <p>Pembelajaran Al-Qur'an, hadits, dan akhlak mulia terintegrasi dalam setiap kegiatan pembelajaran
                        sehari-hari</p>
                </div>
                <div class="card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Guru Berkualitas</h3>
                    <p>Tenaga pendidik profesional, bersertifikat, dan berpengalaman dalam mendidik anak usia sekolah
                        dasar</p>
                </div>
                <div class="card">
                    <i class="fas fa-trophy"></i>
                    <h3>Prestasi Unggul</h3>
                    <p>Siswa-siswi kami konsisten meraih prestasi di berbagai kompetisi akademik dan non-akademik
                        tingkat daerah</p>
                </div>
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h3>Ekstrakurikuler</h3>
                    <p>Program pengembangan bakat melalui pramuka, seni, olahraga, dan kegiatan keagamaan yang beragam
                    </p>
                </div>
                <div class="card">
                    <i class="fas fa-building"></i>
                    <h3>Fasilitas Lengkap</h3>
                    <p>Ruang kelas nyaman, perpustakaan, laboratorium komputer, dan area bermain yang aman untuk
                        anak-anak</p>
                </div>
                <div class="card">
                    <i class="fas fa-heart"></i>
                    <h3>Lingkungan Kondusif</h3>
                    <p>Suasana sekolah yang Islami, ramah anak, dan mendukung tumbuh kembang optimal peserta didik</p>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="reveal">
        <div class="container">
            <h2>Galeri Kegiatan</h2>
            <div class="gallery">
                <!-- Foto dummy untuk galeri -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Siswa belajar di kelas" />
                    <div class="gallery-caption">Pembelajaran di Kelas</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Kegiatan olahraga" />
                    <div class="gallery-caption">Kegiatan Olahraga</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Kegiatan keagamaan" />
                    <div class="gallery-caption">Kegiatan Keagamaan</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Ekstrakurikuler" />
                    <div class="gallery-caption">Ekstrakurikuler Pramuka</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABSENSI DIGITAL -->
    <section id="absensi" class="section reveal">
        <div class="container">
            <div class="section-title">
                <h2>Absensi Digital</h2>
                <p>Sistem presensi online terintegrasi untuk memantau kehadiran siswa secara real-time</p>
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
                            <a href="https://sekolahpintar.my/mimaarifgrabag1/presensi/" target="_blank" class="btn-absensi">
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
                <p>Platform pembelajaran online terintegrasi untuk akses materi dan tugas kapan saja</p>
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
    <section id="bell-iot" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>Bell Sekolah Otomatis (IoT)</h2>
                <p>Sistem bell berbasis IoT yang akurat dan dapat dikendalikan dari mana saja</p>
            </div>
            <div class="bell-container">
                <div class="bell-images">
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
                
                <!-- Fitur-fitur dalam grid 4 kolom -->
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
                
                <a href="https://sekolahpintar.my/bel" target="_blank" class="btn-bell">
                    <i class="fas fa-play-circle"></i>
                    Lihat Demo Bell IoT
                </a>
            </div>
        </div>
    </section>

    <section id="contact" class="reveal">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <form>
                    <input type="text" placeholder="Nama Lengkap" required />
                    <input type="email" placeholder="Email / No HP" required />
                    <textarea rows="4" placeholder="Apa yang ingin Anda tanyakan?" required></textarea>
                    <button type="submit" class="btn btn-primary"
                        style="background: var(--accent); color: var(--dark); border: none;">
                        Kirim Pesan <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Grabag, Kabupaten Magelang, Jawa Tengah</p>
                    <p><i class="fas fa-phone"></i> (0293) XXX-XXXX</p>
                    <p><i class="fas fa-envelope"></i> info@mimaarifgrabag.sch.id</p>
                    <p><i class="fas fa-clock"></i> Senin - Jumat | 07:00 - 14:00 WIB</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 MI Ma'arif 1 Grabag. All Rights Reserved.</p>
        <p>Membentuk Generasi Islami yang Cerdas dan Berkarakter</p>
    </footer>

    <script>
        const reveals = document.querySelectorAll(".reveal");
        const revealOnScroll = () => {
            reveals.forEach((el) => {
                const top = el.getBoundingClientRect().top;
                if (top < window.innerHeight - 100) {
                    el.classList.add("active");
                }
            });
        };
        window.addEventListener("scroll", revealOnScroll);
        window.addEventListener("load", revealOnScroll);

        const header = document.getElementById("navbar");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });

        const menuToggle = document.getElementById("menuToggle");
        const navMenu = document.getElementById("navMenu");
        menuToggle.addEventListener("click", () => {
            navMenu.classList.toggle("active");
            const spans = menuToggle.querySelectorAll("span");
            spans[0].style.transform = navMenu.classList.contains("active")
                ? "rotate(45deg) translate(5px, 6px)"
                : "none";
            spans[1].style.opacity = navMenu.classList.contains("active") ? "0" : "1";
            spans[2].style.transform = navMenu.classList.contains("active")
                ? "rotate(-45deg) translate(5px, -6px)"
                : "none";
        });

        document.querySelectorAll("nav ul li a").forEach((link) => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("active");
            });
        });

        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll("nav ul li a");
        window.addEventListener("scroll", () => {
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute("id");
                }
            });
            navLinks.forEach((a) => {
                a.classList.remove("active");
                if (a.getAttribute("href").includes(current)) {
                    a.classList.add("active");
                }
            });
        });
    </script>

    <script async src="//www.instagram.com/embed.js"></script>

</body>

</html>