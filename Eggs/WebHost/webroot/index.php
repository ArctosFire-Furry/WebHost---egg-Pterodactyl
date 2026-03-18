<?php
// 1. Récupération de l'IP Publique du serveur
$context = stream_context_create(['http' => ['timeout' => 2]]);
$serverIp = @file_get_contents('https://api.ipify.org', false, $context);

if (!$serverIp) {
    $serverIp = $_SERVER['SERVER_ADDR'] ?? "IP non détectée";
}

// 2. Récupération du PORT du serveur
$serverPort = $_SERVER['SERVER_PORT'] ?? "80";

$phpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurCode - WebHost | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #f39c12;
            --primary-glow: rgba(243, 156, 18, 0.5);
            --dark: #0a0a0f;
            --card-bg: rgba(255, 255, 255, 0.03);
            --border: rgba(255, 255, 255, 0.08);
            --success: #00ff88;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Plus+Jakarta+Sans', sans-serif;
            background-color: var(--dark);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .bg-animate {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            background: radial-gradient(circle at 50% 50%, #1a1a2e 0%, #0a0a0f 100%);
        }

        .orb {
            position: absolute;
            width: 400px; height: 400px;
            background: var(--primary);
            filter: blur(120px);
            border-radius: 50%;
            opacity: 0.15;
            animation: float 20s infinite alternate;
        }

        @keyframes float {
            0% { transform: translate(-10%, -10%) scale(1); }
            100% { transform: translate(20%, 20%) scale(1.2); }
        }

        .container {
            position: relative;
            background: var(--card-bg);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid var(--border);
            border-radius: 32px;
            padding: 60px 40px;
            text-align: center;
            max-width: 600px;
            width: 90%;
            box-shadow: 0 40px 100px rgba(0,0,0,0.5);
            animation: slideUp 1s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .logo {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 5px;
            text-shadow: 0 0 30px var(--primary-glow);
        }
        .logo span { color: #fff; }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0, 255, 136, 0.1);
            color: var(--success);
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 30px;
            border: 1px solid rgba(0, 255, 136, 0.2);
        }
        .dot { width: 8px; height: 8px; background: var(--success); border-radius: 50%; box-shadow: 0 0 10px var(--success); }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 35px;
        }

        .card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border);
            padding: 20px 10px;
            border-radius: 20px;
        }
        .card-label { font-size: 0.7rem; color: #888; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .card-value { font-size: 1.1rem; font-weight: 700; color: #eee; }

        .ip-box {
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            padding: 18px;
            border-radius: 18px;
            font-weight: 700;
            margin-bottom: 30px;
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .footer { font-size: 0.85rem; color: #666; }
        .footer b { color: var(--primary); }
    </style>
</head>
<body>

<div class="bg-animate">
    <div class="orb" style="top: -10%; left: -10%;"></div>
    <div class="orb" style="bottom: -10%; right: -10%; animation-delay: -5s; opacity: 0.1;"></div>
</div>

<div class="container">
    <div class="logo">Fur<span>Code</span></div>
    <div class="badge"><span class="dot"></span> Instance Active</div>
    
    <div class="grid">
        <div class="card">
            <div class="card-label">PHP Engine</div>
            <div class="card-value"><?php echo $phpVersion; ?></div>
        </div>
        <div class="card">
            <div class="card-label">Stack</div>
            <div class="card-value">LEMP</div>
        </div>
        <div class="card">
            <div class="card-label">Uptime</div>
            <div class="card-value">En ligne</div>
        </div>
    </div>

    <div class="ip-box">
        <span style="font-size: 0.65rem; color: #888; text-transform: uppercase; letter-spacing: 1px;">Point de Terminaison Réseau</span>
        <span style="font-size: 1.3rem; letter-spacing: 1px; color: var(--primary);">
            <?php echo $serverIp; ?><span style="color: #666;">:</span><?php echo $serverPort; ?>
        </span>
    </div>

    <div class="footer">
        Design & Backend par <b>ArctosFire</b> • <span id="clock">00:00:00</span>
    </div>
</div>

<script>
    function updateClock() {
        const now = new Date();
        document.getElementById('clock').innerText = now.toLocaleTimeString('fr-FR');
    }
    setInterval(updateClock, 1000);
    updateClock();
</script>

</body>
</html>