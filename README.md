# 🦊 FurCode — Collection d'Eggs Pterodactyl 🚀

<p align="center">
  <img src="https://img.shields.io/badge/Version-1.1.0-FF9800?style=for-the-badge&logo=github" alt="Version">
  <img src="https://img.shields.io/badge/Community-Furry_Driven-white?style=for-the-badge&logo=pawprint&logoColor=orange" alt="Furry">
  <img src="https://img.shields.io/badge/Mainteneur-ArctosFire-4F5B93?style=for-the-badge&logo=github" alt="ArctosFire">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

---

## 🌟 L'Essence du Projet

Bienvenue dans l'antre de **FurCode** ! Ce dépôt évolue pour devenir une véritable bibliothèque d'environnements **clé en main** pour Pterodactyl. 

Que tu sois un développeur chevronné ou un louveteau qui débute, ces Eggs sont pensés pour offrir une structure de dossiers intelligente, des logs clairs et une performance optimale, le tout avec une petite touche de style unique. 🐾

---

## 🛠️ La Meute des Eggs disponibles

Voici les différents environnements que tu peux déployer actuellement :

| Nom de l'Egg | Description | Stack Technique | État |
| :--- | :--- | :--- | :--- |
| **[🌐 WebHost Elite](./Eggs/WebHost/)** | Hébergement web complet avec page d'accueil dynamique. | Nginx + PHP 8.x | ✅ Stable |
| **[📦 Node.js App](./Eggs/NodeJS/)** | *Prochainement : Pour tes applications JS modernes.* | Node.js | 🏗️ En dev |

> [!TIP]
> **Le savais-tu ?** Tous nos Eggs intègrent le **Git-Sync** pour déployer ton code automatiquement depuis GitHub/GitLab à chaque démarrage !

---

## 🚀 Installation Express

### 1️⃣ Choisir son Graal
Clique sur le nom de l'Egg dans le tableau ci-dessus, puis télécharge le fichier `.json` correspondant dans son dossier.

### 2️⃣ Importation
* Direction ton **Admin Panel Pterodactyl**.
* Section **Nests** > Choisis ton Nest (ou crée-en un nommé "FurCode").
* Clique sur **Import Egg** et sélectionne ton fichier JSON.

### 3️⃣ Déploiement
Crée ton serveur, sélectionne l'Egg choisi, et laisse la magie opérer. ✨

---

## 📂 Structure Standard du Territoire

Pour garder une cohérence entre tous nos Eggs, nous utilisons cette structure :
* `📂 /webroot` ou `📂 /app` — Le cœur de tes fichiers.
* `📂 /config` — Configurations personnalisables (Nginx, PHP, etc.).
* `📂 /logs` — Pour surveiller tout ce qui se passe sous le capot.

---

## ❓ Foire Aux Questions (FAQ)

<details>
<summary><b>🐺 Comment mettre à jour mon code via GitHub ?</b></summary>
Configure simplement les variables `GIT_ADDRESS` et `BRANCH` dans l'onglet "Startup". À chaque "Reinstall", FurCode ira chercher tes dernières modifications !
</details>

<details>
<summary><b>🔥 Est-ce que les Eggs supportent les bases de données ?</b></summary>
Absolument ! Nos Eggs sont conçus pour communiquer parfaitement avec tes instances MySQL, MariaDB ou MongoDB sur Pterodactyl.
</details>

<details>
<summary><b>🦴 Un souci technique ?</b></summary>
Si une erreur survient, jette un œil dans le dossier `/logs`. Si tu es bloqué, n'hésite pas à ouvrir une Issue, la meute est là pour s'entraider.
</details>

---

## 🤝 Rejoindre la Meute

Un bug ? Une idée géniale pour un nouvel Egg ?
* 🐾 **Ouvre une Issue** pour discuter technique.
* ✨ **Propose une Pull Request** pour enrichir la collection.

---

<p align="center">
  <i>Fait avec passion et quelques coups de griffes par <b>ArctosFire</b> 🐺🔥</i>
</p>