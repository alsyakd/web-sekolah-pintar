<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MIS Sidogede Grabag</title>
  <meta name="keywords" content="MIS Sidogede, Madrasah Ibtidaiyah, Sekolah Islam Grabag, Pendidikan Dasar Islam" />
  <meta name="description" content="MIS Sidogede Grabag: Menanamkan nilai Al-Qur'an sejak dini, membentuk generasi sholeh, cerdas, dan berkontribusi untuk bangsa." />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    /* ===== RESET & VARIABEL ===== */
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
    section {
      padding: 90px 0;
    }

    /* ===== TYPOGRAPHY ===== */
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
    .section-title {
      text-align: center;
      margin-bottom: 50px;
    }
    .section-title h2::after {
      left: 50%;
      transform: translateX(-50%);
    }

    /* ===== HEADER & NAVBAR ===== */
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
      background: transparent;
    }
    
    /* DESKTOP MENU */
    nav ul {
      display: flex;
      list-style: none;
      gap: 28px;
      margin: 0;
      padding: 0;
    }
    nav ul li {
      position: relative;
    }
    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      position: relative;
      padding: 5px 0;
      display: block;
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

    /* DROPDOWN - DESKTOP */
    .dropdown {
      position: relative;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background: white;
      min-width: 200px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
      z-index: 1000;
      list-style: none;
      padding: 0;
    }
    .dropdown-content li {
      width: 100%;
    }
    .dropdown-content li a {
      color: var(--dark) !important;
      padding: 12px 16px;
      font-size: 0.9rem;
      transition: background 0.3s;
    }
    .dropdown-content li a:hover {
      background: var(--light-gray);
    }
    .dropdown-content li a::after {
      display: none;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* MENU TOGGLE (MOBILE) */
    .menu-toggle {
      display: none;
      flex-direction: column;
      gap: 6px;
      cursor: pointer;
      z-index: 1001;
      padding: 5px;
    }
    .menu-toggle span {
      width: 28px;
      height: 3px;
      background: white;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    header.scrolled .menu-toggle span {
      background: var(--primary);
    }

    /* ===== HERO ===== */
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

    /* ===== BUTTONS ===== */
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
    .btn-secondary {
      background: var(--light);
      color: var(--primary);
      border: 2px solid var(--primary);
    }
    .btn-demo {
      background: var(--primary);
      color: white;
      font-weight: 600;
      padding: 12px 25px;
      border-radius: 50px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(30,132,73,0.3);
    }
    .btn-demo:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(30,132,73,0.5);
    }
    .btn-elearning {
      background: var(--secondary);
      color: white;
      font-weight: 600;
      padding: 16px 40px;
      border-radius: 50px;
      text-decoration: none;
      font-size: 1.1rem;
      transition: 0.3s;
      box-shadow: 0 4px 15px rgba(22,160,133,0.4);
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
    }
    .btn-elearning:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(22,160,133,0.6);
    }

    /* ===== CARD & BOX UMUM ===== */
    .card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    .badge {
      background: #dcfce7;
      color: #166534;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 0.9rem;
      font-weight: 500;
      display: inline-block;
      margin-bottom: 10px;
    }
    .account-badge {
      background: white;
      border-radius: 12px;
      padding: 15px;
      margin: 15px 0;
      border-left: 4px solid var(--primary);
    }
    .account-badge.accent {
      border-left-color: var(--accent);
    }

    /* ===== ABOUT SECTION ===== */
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

    /* ===== VISI MISI ===== */
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
    .vm-card p, .vm-card ul {
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

    /* ===== KEUNGGULAN (FEATURES) ===== */
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

    /* ===== GALERI ===== */
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

    /* ===== KOMPONEN DIGITAL (PRESENSI, E-LEARNING, BELL) ===== */
    .demo-section-wrapper {
      max-width: 1200px;
      margin: 0 auto;
      background: white;
      padding: 40px;
      border-radius: 24px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }
    .demo-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: start;
    }
    .demo-col {
      background: var(--light);
      border-radius: 20px;
      padding: 25px;
      transition: 0.3s;
    }
    .demo-col:hover {
      box-shadow: 0 20px 30px rgba(0,0,0,0.1);
    }
    .media-wrapper {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%; /* 16:9 */
      height: 0;
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      margin-bottom: 20px;
    }
    .media-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    .image-pair {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      margin: 20px 0;
    }
    .image-pair img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: 0.3s;
    }
    .image-pair img:hover {
      transform: scale(1.03);
    }
    .demo-account-box {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
      border: 2px dashed #cbd5e1;
      border-radius: 16px;
      padding: 25px;
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
    .bell-images {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
      width: 100%;
    }
    .bell-img-wrapper img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
    }

    /* ===== KONTAK ===== */
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

    /* ===== FOOTER ===== */
    footer {
      background: var(--dark);
      color: white;
      text-align: center;
      padding: 30px 0;
      font-size: 0.95rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .about-grid,
      .contact-grid,
      .demo-grid {
        grid-template-columns: 1fr;
      }
      .about-img {
        order: -1;
      }
    }

    /* ===== MOBILE NAVBAR - VERSI BARU ===== */
    @media (max-width: 768px) {
      /* Menu Toggle */
      .menu-toggle {
        display: flex;
      }

      /* Mobile Menu Container */
      nav ul {
        position: fixed;
        top: 0;
        right: -100%;
        width: 85%;
        max-width: 340px;
        height: 100vh;
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        padding: 90px 20px 30px;
        gap: 5px;
        transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1000;
        box-shadow: -5px 0 30px rgba(0,0,0,0.15);
        overflow-y: auto;
      }

      nav ul.active {
        right: 0;
      }

      /* Menu Items */
      nav ul li {
        width: 100%;
        margin: 0;
        opacity: 0;
        transform: translateX(20px);
        transition: all 0.3s ease;
      }

      nav ul.active li {
        opacity: 1;
        transform: translateX(0);
      }

      /* Stagger animation for menu items */
      nav ul.active li:nth-child(1) { transition-delay: 0.1s; }
      nav ul.active li:nth-child(2) { transition-delay: 0.15s; }
      nav ul.active li:nth-child(3) { transition-delay: 0.2s; }
      nav ul.active li:nth-child(4) { transition-delay: 0.25s; }
      nav ul.active li:nth-child(5) { transition-delay: 0.3s; }
      nav ul.active li:nth-child(6) { transition-delay: 0.35s; }
      nav ul.active li:nth-child(7) { transition-delay: 0.4s; }

      /* Menu Links */
      nav ul li a {
        color: var(--dark) !important;
        font-size: 1.1rem;
        padding: 15px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        border: none;
      }

      nav ul li a:hover {
        background: rgba(30, 132, 73, 0.1);
        color: var(--primary) !important;
        padding-left: 25px;
      }

      nav ul li a::after {
        display: none;
      }

      /* Dropdown Mobile */
      .dropdown {
        width: 100%;
      }

      .dropdown .dropbtn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 15px 20px;
        margin: 0;
        border-radius: 10px;
      }

      .dropdown .dropbtn::after {
        content: '\f107';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        margin-left: 8px;
        transition: transform 0.3s ease;
        color: var(--primary);
      }

      .dropdown.active .dropbtn {
        background: rgba(30, 132, 73, 0.1);
        color: var(--primary) !important;
      }

      .dropdown.active .dropbtn::after {
        transform: rotate(180deg);
      }

      /* Dropdown Content Mobile */
      .dropdown-content {
        position: static;
        display: none;
        width: 100%;
        background: transparent;
        box-shadow: none;
        margin: 5px 0 10px 0;
        padding-left: 20px;
        border-radius: 0;
      }

      .dropdown.active .dropdown-content {
        display: block;
      }

      .dropdown-content li {
        width: 100%;
      }

      .dropdown-content li a {
        padding: 12px 20px !important;
        font-size: 1rem;
        color: var(--gray) !important;
        border-left: 3px solid transparent;
      }

      .dropdown-content li a:hover {
        background: rgba(30, 132, 73, 0.05);
        color: var(--primary) !important;
        border-left-color: var(--primary);
        padding-left: 25px;
      }

      /* Close button overlay */
      .menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
      }

      .menu-overlay.active {
        opacity: 1;
        visibility: visible;
      }

      /* Menu Toggle Animation */
      .menu-toggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
      }

      .menu-toggle.active span:nth-child(2) {
        opacity: 0;
        transform: scale(0);
      }

      .menu-toggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
      }

      /* Header adjustments for mobile */
      header.scrolled {
        background: rgba(255, 255, 255, 0.98);
      }

      /* Typography adjustments */
      h2 {
        font-size: 1.8rem;
      }

      .bell-images {
        grid-template-columns: 1fr;
      }
    }

    /* Small mobile devices */
    @media (max-width: 480px) {
      nav ul {
        width: 90%;
        padding: 80px 15px 20px;
      }

      .logo span {
        font-size: 1rem;
      }

      .logo img {
        width: 40px;
        height: 40px;
      }

      nav ul li a {
        font-size: 1rem;
        padding: 12px 15px;
      }
    }

    /* Placeholder gambar jika tidak ditemukan */
    img {
      background: #f0f0f0;
    }
  </style>
</head>
<body>
  <!-- Overlay for mobile menu -->
  <div class="menu-overlay"></div>

  <!-- Header -->
  <header id="navbar">
    <div class="container">
      <nav>
        <a href="#home" class="logo">
          <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpolygon points='50,10 90,35 90,75 50,95 10,75 10,35' fill='%231e8449' stroke='%23fff' stroke-width='2'/%3E%3Ctext x='50' y='60' font-family='Arial' font-size='40' font-weight='bold' text-anchor='middle' fill='%23fff'%3EMIS%3C/text%3E%3C/svg%3E" alt="Logo MIS Sidogede Grabag" />
          <span>MIS SIDOGEDE</span>
        </a>
        <ul>
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#visi-misi">Visi & Misi</a></li>
          <li><a href="#keunggulan">Keunggulan</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Digitalisasi</a>
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
        <p>MIS Sidogede Grabag hadir sebagai wadah pendidikan dasar yang menggabungkan kecerdasan intelektual, spiritual, dan karakter islami sejak usia dini.</p>
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
          <p>Berdiri sejak tahun 2005, MIS Sidogede Grabag telah menjadi pilihan utama orang tua di wilayah Magelang bagian utara yang menginginkan pendidikan dasar berbasis nilai-nilai Islam.</p>
          <p>Kami percaya bahwa fondasi pendidikan yang kuat dimulai dari lingkungan yang penuh kasih, disiplin, dan keteladanan. Di sini, setiap anak didik tidak hanya belajar membaca dan berhitung, tetapi juga belajar menjadi pribadi yang jujur, tanggung jawab, dan peduli.</p>
          <p>Dengan kurikulum Kemenag yang diperkaya oleh program tahfidz, akhlak harian, dan pembiasaan ibadah, kami siap menyiapkan generasi masa depan yang unggul di dunia dan akhirat.</p>
        </div>
        <div class="about-img">
          <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80" alt="Kampus MIS Sidogede Grabag" />
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
          <p>Menjadi madrasah unggulan yang melahirkan generasi Qur’ani, berprestasi, berakhlak mulia, dan berwawasan global.</p>
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
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Belajar Bersama" />
          <div class="card-caption">Belajar Bersama</div>
        </div>
        <div class="gallery-card">
          <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=600&q=80" alt="MTQ Anak-Anak" />
          <div class="card-caption">MTQ Anak-Anak</div>
        </div>
        <div class="gallery-card">
          <img src="https://images.pexels.com/photos/3875190/pexels-photo-3875190.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Pramuka" />
          <div class="card-caption">Pramuka</div>
        </div>
        <div class="gallery-card">
          <img src="https://images.pexels.com/photos/6984310/pexels-photo-6984310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Lomba Kaligrafi" />
          <div class="card-caption">Lomba Kaligrafi</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABSENSI DIGITAL -->
  <section id="absensi" class="reveal">
    <div class="container">
      <div class="section-title">
        <h2>Absensi Digital</h2>
        <p>Sistem presensi online untuk siswa dan guru (terintegrasi)</p>
      </div>
      <div class="demo-section-wrapper">
        <div class="demo-grid">
          <!-- Kolom Siswa -->
          <div class="demo-col">
            <h3 style="color: var(--primary); margin-bottom: 15px;"><i class="fas fa-user-graduate"></i> Presensi Siswa</h3>
            <div class="media-wrapper">
              <iframe src="https://drive.google.com/file/d/1VKsXNTbwuXER6rPFsSoDlGl4jK0vHlPg/preview" allow="autoplay"></iframe>
            </div>
            <div class="image-pair">
              <img src="assets/absen1.jpeg" alt="Absen Siswa 1">
              <img src="assets/absen2.jpeg" alt="Absen Siswa 2">
            </div>
            <div class="account-badge">
              <strong><i class="fas fa-key"></i> Akun Demo Siswa</strong><br>
              <span>Username: admin | Password: admin</span>
            </div>
            <a href="https://sekolahpintar.my/mimaarifgrabag1/presensi/" target="_blank" class="btn-demo"><i class="fas fa-external-link-alt"></i> Buka Presensi Siswa</a>
          </div>
          <!-- Kolom Guru -->
          <div class="demo-col">
            <h3 style="color: var(--primary); margin-bottom: 15px;"><i class="fas fa-chalkboard-teacher"></i> Presensi Guru</h3>
            <div class="media-wrapper">
              <iframe src="https://drive.google.com/file/d/1U_LMerwCj8VZNZjxELfi1Lxi17DuMxoL/preview" allow="autoplay"></iframe>
            </div>
            <div class="image-pair">
              <img src="assets/absen_guru1.png" alt="Presensi Guru 1">
              <img src="assets/absen_guru2.png" alt="Presensi Guru 2">
            </div>
            <div class="account-badge accent">
              <strong><i class="fas fa-key"></i> Akun Demo Guru</strong><br>
              <span>Username: <strong>admin</strong> | Password: <strong>admin123</strong></span>
            </div>
            <a href="https://sekolahpintar.my/mimaarifgrabag1/presensi/" target="_blank" class="btn-demo"><i class="fas fa-external-link-alt"></i> Buka Presensi Guru</a>
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
        <p>Akses materi dan tugas online, serta tutorial penggunaan platform</p>
      </div>
      <div class="demo-section-wrapper">
        <div class="demo-grid">
          <!-- Kiri: video + foto -->
          <div class="demo-col">
            <div class="media-wrapper">
              <iframe src="https://drive.google.com/file/d/1WxZDJDQcV-dOSYtCCAB9I_26h5kTNRYt/preview" allow="autoplay"></iframe>
            </div>
            <div class="image-pair">
              <img src="assets/elearning1.jpeg" alt="Elearning 1">
              <img src="assets/elearning2.jpeg" alt="Elearning 2">
            </div>
            <p style="margin-top: 15px; color: var(--gray);"><i class="fas fa-info-circle"></i> Tutorial penggunaan e-learning untuk guru dan siswa.</p>
          </div>
          <!-- Kanan: akun demo dan fitur -->
          <div class="demo-col">
            <div class="demo-account-box">
              <div class="demo-account-title"><i class="fas fa-user-graduate"></i> Akun Demo E-Learning</div>
              <div class="account-info">
                <span class="badge">Guru</span>
                <div class="account-detail"><strong>Email:</strong> guru@sekolahpintar.my</div>
                <div class="account-detail"><strong>Password:</strong> guru</div>
              </div>
              <div class="account-info">
                <span class="badge">Siswa</span>
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

  <!-- BELL SEKOLAH IOT PREVIEW -->
  <section id="bell-iot" class="reveal">
    <div class="container">
      <div class="section-title">
        <h2>Bell Sekolah Otomatis (IoT)</h2>
        <p>Sistem bell berbasis IoT akurat</p>
      </div>
      <div class="demo-section-wrapper" style="text-align: center;">
        <div class="bell-images">
          <div class="bell-img-wrapper"><img src="assets/bel1.jpeg" alt="bel1"></div>
          <div class="bell-img-wrapper"><img src="assets/bel2.jpeg" alt="bel2"></div>
          <div class="bell-img-wrapper"><img src="assets/bel3.jpeg" alt="bel3"></div>
        </div>
        <a href="https://sekolahpintar.my/bel" target="_blank" class="btn-demo" style="margin-top: 30px;"><i class="fas fa-play-circle"></i> Lihat Demo Bell IoT</a>
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
          <p><i class="fas fa-map-marker-alt"></i> Dusun Sidogede, Desa Grabag, Kec. Grabag, Kab. Magelang, Jawa Tengah</p>
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
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });

    // Mobile Menu Elements
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('nav ul');
    const menuOverlay = document.querySelector('.menu-overlay');

    // Toggle Menu Function
    function toggleMenu() {
      navMenu.classList.toggle('active');
      menuToggle.classList.toggle('active');
      menuOverlay.classList.toggle('active');
      document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    }

    // Menu Toggle Click
    menuToggle.addEventListener('click', toggleMenu);

    // Overlay Click
    menuOverlay.addEventListener('click', toggleMenu);

    // Close menu when clicking on a link (mobile)
    document.querySelectorAll('nav ul li a').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
          navMenu.classList.remove('active');
          menuToggle.classList.remove('active');
          menuOverlay.classList.remove('active');
          document.body.style.overflow = '';
        }
      });
    });

    // Dropdown mobile toggle
    if (window.innerWidth <= 768) {
      const dropdowns = document.querySelectorAll('.dropdown');
      dropdowns.forEach(dropdown => {
        const dropbtn = dropdown.querySelector('.dropbtn');
        dropbtn.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          dropdown.classList.toggle('active');
        });
      });
    }

    // Handle window resize
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        navMenu.classList.remove('active');
        menuToggle.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
        
        // Reset dropdown active state
        document.querySelectorAll('.dropdown.active').forEach(dropdown => {
          dropdown.classList.remove('active');
        });
      }
    });

    // Active link on scroll
    window.addEventListener('scroll', () => {
      const sections = document.querySelectorAll('section');
      const navLinks = document.querySelectorAll('nav ul li a');

      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= (sectionTop - 100)) {
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