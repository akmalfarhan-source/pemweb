<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SmartStore</title>
    <!-- Google Fonts untuk tipografi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Link CSS Moderen dengan Navbar dan Tabel -->
    <link rel="stylesheet" href="../assets/navbar.css">
    <style>
        .partner-section {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
            margin-bottom: 4rem;
            border: 1px solid rgba(0, 0, 0, 0.02);
        }

        .partner-section h2 {
            font-size: 2.2rem;
            color: var(--text-primary);
            margin-bottom: 2.5rem;
            font-weight: 700;
        }

        .partner-section h2 span {
            color: var(--accent-color);
        }

        .partner-grid {
            display: flex;
            gap: 1.5rem;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .partner-card {
            flex: 1;
            min-width: 140px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s ease;
            text-align: center;
        }

        .partner-card:hover {
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.15);
            border-color: var(--accent-color);
            transform: translateY(-5px);
        }

        .partner-card.active {
            border-color: var(--accent-color);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1);
        }

        .partner-logo {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .partner-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.85rem;
        }

        .partner-badge {
            background-color: #eff6ff;
            color: var(--accent-color);
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        @media (max-width: 992px) {
            .partner-grid {
                justify-content: center;
            }

            .partner-card {
                flex-basis: 40%;
            }
        }

        @media (max-width: 576px) {
            .partner-card {
                flex-basis: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar Premium -->
    <nav class="navbar">
        <a href="TGpert4.php" class="navbar-brand">Smart<span>Store</span></a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="TGpert4.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="product.php" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link active">About Us</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="header-section">
            <h1>Tentang SmartStore</h1>
            <p>Mengenal lebih dekat siapa kami dan jaringan kemitraan global kami untuk memenuhi kebutuhan teknologi
                Anda.</p>
        </div>

        <div class="partner-section">
            <h2>Brand <span>Partner</span> Resmi</h2>
            <div class="partner-grid">
                <!-- Apple -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <svg viewBox="0 0 384 512" style="height: 45px; fill: #2c2c2c;">
                            <path
                                d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z" />
                        </svg>
                    </div>
                    <div class="partner-name">Apple</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- Samsung -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div
                            style="color:#034ea2; font-weight:900; font-family: Arial, sans-serif; font-size: 1.1rem; letter-spacing: 1.5px;">
                            SAMSUNG</div>
                    </div>
                    <div class="partner-name">Samsung</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- Xiaomi -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div
                            style="background:#ff6900; color:white; width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-family: Arial, sans-serif; font-size: 1.25rem;">
                            Mi</div>
                    </div>
                    <div class="partner-name">Xiaomi</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- OPPO (Active Style like the original image) -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div
                            style="width: 45px; height: 45px; border-radius: 50%; border: 6px solid #2563eb; display: flex; align-items: center; justify-content: center; box-sizing: border-box;">
                            <div style="width: 14px; height: 14px; background: #2563eb; border-radius: 50%;"></div>
                        </div>
                    </div>
                    <div class="partner-name">OPPO</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
                <!-- Vivo -->
                <div class="partner-card">
                    <div class="partner-logo">
                        <div
                            style="background:#415fff; color:white; width: 55px; height: 35px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-family: Arial, sans-serif; font-size: 1.1rem; font-style: italic;">
                            vivo</div>
                    </div>
                    <div class="partner-name">Vivo</div>
                    <div class="partner-badge">Official Partner</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>