<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SmartStore</title>
    <!-- Google Fonts untuk tipografi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Link CSS Moderen dengan Navbar dan Tabel -->
    <link rel="stylesheet" href="../assets/navbar.css">
    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }
        .contact-form {
            background: white;
            padding: 3.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.02);
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            display: block;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
            font-weight: 600;
            font-size: 0.95rem;
        }
        .form-control {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s;
            box-sizing: border-box;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
            justify-content: center;
        }
        .info-card {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            background: white;
            padding: 1.5rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
            transition: transform 0.3s ease;
        }
        .info-card:hover {
            transform: translateX(10px);
        }
        .info-icon {
            font-size: 2rem;
            background: #f8fafc;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: var(--accent-color);
        }
        .info-text h4 {
            margin: 0 0 0.5rem 0;
            font-size: 1.2rem;
            color: var(--text-primary);
        }
        .info-text p {
            margin: 0;
            color: var(--text-secondary);
            font-size: 1.05rem;
        }
        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
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
            <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link active">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="header-section">
            <h1>Hubungi Kami</h1>
            <p>Punya pertanyaan atau butuh bantuan lebih lanjut? Jangan ragu untuk mengirim pesan kepada tim kami kapan saja.</p>
        </div>
        
        <div class="contact-grid">
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Alamat</h4>
                        <p>Jl. Syekh Qodbuddin</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h4>Telepon </h4>
                        <p>+62 813-1479-4762</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-icon">✉️</div>
                    <div class="info-text">
                        <h4>Email Bantuan</h4>
                        <p>farhanakmal500@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan Anda berhasil dikirim! Terima kasih telah menghubungi kami.');">
                    <div class="form-group">
                        <label class="form-label" for="name">Nama Lengkap</label>
                        <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Alamat Email</label>
                        <input type="email" id="email" class="form-control" placeholder="nama@email.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Pesan Anda</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Tuliskan keluhan atau pertanyaan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; border:none; padding: 1rem; font-size: 1.1rem; border-radius:12px;">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
