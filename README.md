# 🦊 FurCode — WebHost 🚀

<p align="center">
  <img src="https://img.shields.io/badge/Version-1.0.2-FF9800?style=for-the-badge&logo=github" alt="Version">
  <img src="https://img.shields.io/badge/Stack-Nginx_%7C_PHP--FPM_8.x-4F5B93?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Furry-Community_Driven-white?style=for-the-badge&logo=pawprint&logoColor=orange" alt="Furry">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

---

## 🌟 L'Essence du Projet

**FurCode — WebHost** n'est pas qu'un simple fichier de configuration. C'est un environnement d'hébergement web **clé en main** pour Pterodactyl, pensé pour la performance et le style. 

Que tu sois un développeur chevronné ou un louveteau qui débute dans le web, cet Egg t'offre une base solide, rapide et surtout... **stylée**.

> [!IMPORTANT]
> **Pourquoi choisir FurCode ?** > Contrairement aux œufs génériques, celui-ci inclut une structure de dossiers intelligente, des logs accessibles et une page d'accueil interactive dès l'installation.

---

## 🛠️ Fonctionnalités de la Meute

* ⚡ **Vitesse Éclair :** Basé sur l'architecture **Nginx + PHP-FPM** pour un temps de réponse minimal.
* 📦 **Auto-Déploiement :** Installez **WordPress** ou **NamelessMC** en un clic via les variables du panel.
* 🧬 **Hybride FurCode :** Page de démarrage PHP/JS dynamique incluse (affiche ta version PHP et ton IP).
* 🌐 **Git-Sync :** Liez votre dépôt GitHub/GitLab (Public ou Privé avec Token) et déployez vos modifications à chaque démarrage.

---

## 🚀 Installation Express

### 1️⃣ Récupération
Télécharge le graal : [`WebHost-FurCode.json`](./WebHost-FurCode.json) depuis ce dépôt.

### 2️⃣ Importation
* Direction ton **Admin Panel Pterodactyl**.
* Section **Nests** > Bouton **Import Egg**.
* Sélectionne le fichier `WebHost-FurCode.json`.

### 3️⃣ Déploiement
Crée ton serveur, choisis l'Egg **FurCode — WebHost**, et laisse la magie opérer. 🐾

---

## 📂 Structure du Territoire

Une fois installé, ton serveur sera organisé ainsi :
* `📂 /webroot` — Le cœur de ton site (fichiers publics).
* `📂 /nginx` — Configurations Nginx personnalisables.
* `📂 /php-fpm` — Réglages de ton moteur PHP.
* `📂 /logs` — Pour surveiller tout ce qui se passe sous le capot.

---

## ❓ Foire Aux Questions (FAQ)

<details>
<summary><b>🐺 Comment mettre à jour mon code via GitHub ?</b></summary>
Configure simplement les variables `GIT_ADDRESS` et `BRANCH` dans l'onglet "Startup" de ton serveur. À chaque "Reinstall", FurCode ira chercher les nouveautés !
</details>

<details>
<summary><b>🔥 Est-ce que cet Egg supporte les bases de données ?</b></summary>
Absolument ! Bien que l'Egg gère la partie Web, il peut se connecter à n'importe quel serveur MySQL ou MariaDB (interne ou externe).
</details>

<details>
<summary><b>🦴 J'ai une erreur 502 Bad Gateway, que faire ?</b></summary>
Pas de panique ! Vérifie souvent tes logs dans `/logs/php-fpm.log`. Généralement, c'est un petit souci de permissions ou un script PHP trop gourmand.
</details>

---

## 🤝 Rejoindre la Meute

Un bug ? Une idée géniale ? Une suggestion de design ?
* 🐾 **Ouvre une Issue** pour discuter technique.
* ✨ **Propose une Pull Request** pour améliorer l'écosystème.

---

<p align="center">
  <i>Fait avec passion et quelques coups de griffes par <b>ArctosFire</b> 🐺🔥</i>
</p>