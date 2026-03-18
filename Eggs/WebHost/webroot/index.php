<?php
// Informations système simples
$phpVersion = phpversion();
$serverIP = $_SERVER['SERVER_ADDR'] ?? '127.0.0.1';
$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
$uptime = shell_exec("uptime -p") ?? "Système en ligne";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurCode - WebHost | Prêt à l'emploi</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #f39c12; /* Orange FurCode */
            --secondary: #e67e22;
            --dark: #1a1a2e;
            --light: #f4f7fc;
            --success: #2ecc71;
            --text: #2c3e50;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--dark);
            background-image: radial-gradient(circle at 20% 30%, #2c3e50 0%, #1a1a2e 100%);
            color: var(--light);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        /* Animation de fond */
        .blobs {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .blob {
            position: absolute;
            background: var(--primary);
            filter: blur(80px);
            border-radius: 50%;
            opacity: 0.1;
            animation: move 20s infinite alternate;
        }

        @keyframes move {
            from { transform: translate(-10%, -10%); }
            to { transform: translate(20%, 20%); }
        }

        .container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 50px;
            text-align: center;
            width: 90%;
            max-width: 700px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeIn 0.8s forwards ease-out;
        }

        @keyframes fadeIn {
            to { transform: translateY(0); opacity: 1; }
        }

        .logo {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .logo span { color: #fff; }

        h1 { font-size: 1.8rem; margin-bottom: 25px; font-weight: 400; }

        .status-badge {
            display: inline-block;
            background: rgba(46, 204, 113, 0.2);
            color: var(--success);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 30px;
            border: 1px solid var(--success);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 16px;
            transition: transform 0.3s;
        }

        .card:hover { transform: translateY(-5px); background: rgba(255, 255, 255, 0.08); }

        .card-label { font-size: 0.8rem; color: #aaa; text-transform: uppercase; margin-bottom: 10px; }
        .card-value { font-size: 1.2rem; font-weight: 600; color: var(--primary); }

        .instructions {
            background: var(--primary);
            color: var(--dark);
            padding: 20px;
            border-radius: 16px;
            font-weight: 600;
            margin-bottom: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .instructions:hover { background: #fff; }

        .footer { font-size: 0.9rem; color: #888; }
        .footer a { color: var(--primary); text-decoration: none; font-weight: 600; }

        /* Effet au clic JS */
        .copied-msg {
            position: fixed;
            bottom: 20px;
            background: var(--success);
            padding: 10px 20px;
            border-radius: 10px;
            display: none;
        }
    </style>
</head>
<body>

<div class="blobs">
    <div class="blob" style="width: 400px; height: 400px; top: -100px; left: -100px;"></div>
    <div class="blob" style="width: 300px; height: 300px; bottom: -50px; right: -50px; animation-delay: -5s;"></div>
</div>

<div class="container">
    <div class="logo">Fur<span>Code</span></div>
    <div class="status-badge">● Serveur Web Opérationnel</div>
    
    <h1>Bienvenue sur votre instance <strong>WebHost</strong></h1>

    <div class="grid">
        <div class="card">
            <div class="card-label">Version PHP</div>
            <div class="card-value"><?php echo $phpVersion; ?></div>
        </div>
        <div class="card">
            <div class="card-label">Logiciel</div>
            <div class="card-value">Nginx</div>
        </div>
        <div class="card">
            <div class="card-label">IP Serveur</div>
            <div class="card-value" id="server-ip"><?php echo $serverIP; ?></div>
        </div>
    </div>

    <div class="instructions" id="main-action">
        Prêt pour vos fichiers dans 📂 /webroot
    </div>

    <div class="footer">
        Propulsé par ArctosFire <br>
        <span id="time-display">Chargement de l'heure...</span>
    </div>
</div>

<div class="copied-msg" id="toast">Copié dans le presse-papier !</div>

<script>
    // 1. Mise à jour de l'heure en temps réel
    function updateTime() {
        const now = new Date();
        document.getElementById('time-display').innerText = now.toLocaleTimeString('fr-FR');
    }
    setInterval(updateTime, 1000);
    updateTime();

    // 2. Interactivité : Cliquer sur l'IP pour copier
    document.getElementById('server-ip').addEventListener('click', function() {
        const ip = this.innerText;
        navigator.clipboard.writeText(ip);
        
        const toast = document.getElementById('toast');
        toast.style.display = 'block';
        setTimeout(() => { toast.style.display = 'none'; }, 2000);
    });

    // 3. Petit effet visuel au survol du bouton principal
    const actionBtn = document.getElementById('main-action');
    actionBtn.addEventListener('mouseenter', () => {
        actionBtn.innerText = "À vous de jouer ! 🐾";
    });
    actionBtn.addEventListener('mouseleave', () => {
        actionBtn.innerText = "Prêt pour vos fichiers dans 📂 /webroot";
    });
</script>

</body>
</html>