<?php 
include('db.php'); 
$msg = "";
if(isset($_POST['submit'])) {
    $emri = $conn->real_escape_string($_POST['emri']);
    $email = $conn->real_escape_string($_POST['email']);
    $mesazhi = $conn->real_escape_string($_POST['mesazhi']);
    $sql = "INSERT INTO porosit (emri, email, mesazhi) VALUES ('$emri', '$email', '$mesazhi')";
    if($conn->query($sql)) { 
        $msg = "Kërkesa u dërgua në laborator! Do t'ju kontaktojmë së shpejti."; 
    }
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterTech Lab | Servis, Garanci & Siguri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root { --bg: #0f0f0f; --accent: #007BFF; --gradient: linear-gradient(135deg, #007BFF 0%, #8A2BE2 100%); --card: #1a1a1a; --text: #ffffff; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        body { background: var(--bg); color: var(--text); line-height: 1.6; }
        .navbar { position: fixed; width: 100%; top: 0; z-index: 1000; background: rgba(15,15,15,0.95); backdrop-filter: blur(10px); border-bottom: 1px solid #333; padding: 15px 0; }
        .container { width: 90%; max-width: 1200px; margin: auto; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.5rem; font-weight: 800; color: var(--accent); text-decoration: none; letter-spacing: 1px; }
        .nav-links a { color: white; text-decoration: none; margin-left: 25px; font-weight: 500; font-size: 0.9rem; transition: 0.3s; }
        .nav-links a:hover { color: var(--accent); }
        
        .hero { height: 100vh; display: flex; align-items: center; text-align: center; background: radial-gradient(circle at 50% 50%, #1a1a1a 0%, #0f0f0f 100%); padding-top: 80px; }
        .hero-content h1 { font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; }
        .hero-content span { background: var(--gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero-content p { color: #aaa; font-size: 1.2rem; max-width: 750px; margin: 0 auto 30px; }
        
        .section { padding: 100px 0; }
        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; }
        .card { background: var(--card); padding: 35px; border-radius: 20px; border: 1px solid #222; transition: 0.4s; position: relative; }
        .card:hover { border-color: var(--accent); transform: translateY(-10px); box-shadow: 0 10px 30px rgba(0,123,255,0.15); }
        .card i { font-size: 2.5rem; color: var(--accent); margin-bottom: 20px; display: block; }
        .price { font-weight: 800; color: var(--accent); display: block; margin-top: 15px; font-size: 1.1rem; }
        
        .trust-banner { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-top: 50px; }
        .trust-item { display: flex; align-items: center; gap: 10px; color: #00FF88; font-weight: 600; font-size: 0.9rem; background: rgba(0,255,136,0.05); padding: 10px 20px; border-radius: 50px; border: 1px solid rgba(0,255,136,0.2); }

        .contact-flex { display: grid; grid-template-columns: 1fr 1.5fr; gap: 50px; }
        .contact-box { background: var(--card); padding: 30px; border-radius: 20px; margin-bottom: 20px; display: flex; align-items: center; gap: 20px; text-decoration: none; color: white; border: 1px solid #333; }
        form input, form textarea { width: 100%; padding: 15px; margin-bottom: 15px; background: #0a0a0a; border: 1px solid #333; color: white; border-radius: 10px; outline: none; }
        .btn-submit { background: var(--gradient); border: none; padding: 15px; width: 100%; color: white; font-weight: 700; border-radius: 10px; cursor: pointer; transition: 0.3s; }
        
        .badge { background: rgba(0,123,255,0.1); color: var(--accent); padding: 6px 18px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; margin-bottom: 20px; display: inline-block; border: 1px solid rgba(0,123,255,0.3); }
        footer { background: #050505; padding: 40px 0; text-align: center; border-top: 1px solid #222; color: #666; }
        @media (max-width: 768px) { .contact-flex { grid-template-columns: 1fr; } }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container nav-flex">
            <a href="#" class="logo">MASTERTECH LAB</a>
            <div class="nav-links">
                <a href="#">Ballina</a>
                <a href="#services">Shërbimet</a>
                <a href="#contact">Kontakti</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container hero-content">
            <div class="badge"><i class="fas fa-shield-alt"></i> Garanci & Siguri e Plotë</div>
            <h1>Laboratori Teknik në <span>Shtëpinë Tonë</span></h1>
            <p>Sillni pajisjen tuaj për servisim profesional. Ne garantojmë sigurinë e të dhënave tuaja dhe ofrojmë garanci për çdo ndërrim të pjesëve apo pastrim të thellë.</p>
            
            <div class="trust-banner">
                <div class="trust-item"><i class="fas fa-check-double"></i> Garanci për çdo Shërbim</div>
                <div class="trust-item" style="color:#00D1FF; border-color:rgba(0,209,255,0.2); background:rgba(0,209,255,0.05);"><i class="fas fa-user-lock"></i> 100% Siguri e të Dhënave</div>
            </div>

            <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin-top: 40px;">
                <a href="#services" class="btn-submit" style="text-decoration:none; width:auto; padding: 15px 40px;">Shiko Shërbimet</a>
                <a href="#contact" class="btn-submit" style="text-decoration:none; background: #1a1a1a; width:auto; padding: 15px 40px; border: 1px solid #333;">Rezervo Termin</a>
            </div>
        </div>
    </header>

    <section id="services" class="section" style="background: #0a0a0a;">
        <div class="container">
            <h2 style="text-align:center; margin-bottom:60px; font-size: 2.5rem;">Shërbimet dhe Siguria</h2>
            <div class="services-grid">
                
                <div class="card">
                    <i class="fas fa-wind"></i>
                    <h3>Pastrim i Thellë</h3>
                    <p>Hapje e plotë, pastrim i detajuar dhe pastë Arctic MX-4. <b>Me garanci në temperaturë.</b></p>
                    <span class="price">10€</span>
                </div>

                <div class="card">
                    <i class="fab fa-linux"></i>
                    <h3>Sisteme & Formatizim</h3>
                    <p>Windows 10/11 ose Linux. Instalimi bëhet duke ruajtur çdo të dhënë tuajën me <b>siguri maksimale</b>.</p>
                    <span class="price">10€</span>
                </div>

                <div class="card" style="border-top: 2px solid #8A2BE2;">
                    <i class="fas fa-user-shield"></i>
                    <h3>Web Testing (Linux)</h3>
                    <p>Testojmë sigurinë e uebfaqes suaj kundër sulmeve, duke përdorur mjetet më të fundit Linux.</p>
                    <span class="price">Sipas projektit</span>
                </div>

                <div class="card">
                    <i class="fas fa-memory"></i>
                    <h3>Upgrade Hardware</h3>
                    <p>Montim i SSD dhe RAM. Të gjitha pjesët e reja vijnë me <b>garancinë e prodhuesit</b>.</p>
                    <span class="price">10€ + pjesa</span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <div class="contact-flex">
                <div>
                    <h2 style="margin-bottom:20px;">Lini pajisjen në duar të sigurta</h2>
                    <p style="color: #aaa; margin-bottom:30px;">Laboratori ynë në shtëpi ofron një ambient të sigurt dhe profesional për pajisjen tuaj.</p>
                    
                    <a href="https://wa.me/38348889518" class="contact-box">
                        <i class="fab fa-whatsapp" style="font-size: 2rem; color: #25D366;"></i>
                        <div><h4>WhatsApp Direct</h4><p>+383 48 889 518</p></div>
                    </a>
                    
                    <div class="contact-box">
                        <i class="fas fa-shield-virus" style="font-size: 2rem; color: #00FF88;"></i>
                        <div><h4>Garancia MasterTech</h4><p>Besim dhe Cilësi në çdo vidë.</p></div>
                    </div>
                </div>
                <div style="background: var(--card); padding: 40px; border-radius: 20px; border: 1px solid #222;">
                    <h3 style="margin-bottom: 20px;">Rezervo Shërbimin</h3>
                    <?php if($msg) echo "<p style='background:rgba(0,123,255,0.2); color:var(--accent); padding:10px; border-radius:5px; margin-bottom:15px; font-size:0.9rem;'>$msg</p>"; ?>
                    <form method="POST">
                        <input type="text" name="emri" placeholder="Emri juaj" required>
                        <input type="email" name="email" placeholder="Email (Opsionale)">
                        <textarea name="mesazhi" rows="5" placeholder="Përshkruani pajisjen dhe shërbimin që ju duhet..." required></textarea>
                        <button type="submit" name="submit" class="btn-submit">Dërgo në Laborator</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 MasterTech Lab - Suharekë. Të gjitha të drejtat e rezervuara.</p>
        </div>
    </footer>

</body>
</html>