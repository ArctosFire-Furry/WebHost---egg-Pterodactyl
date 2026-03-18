# 🦊 FurCode — Collection d'Eggs Pterodactyl 🚀

<p align="center">
  <img src="https://img.shields.io/badge/Version-1.1.0-FF9800?style=for-the-badge&logo=github" alt="Version">
  <img src="https://img.shields.io/badge/Community-Furry_Driven-white?style=for-the-badge&logo=pawprint&logoColor=orange" alt="Furry">
  <img src="https://img.shields.io/badge/Mainteneur-ArctosFire-4F5B93?style=for-the-badge&logo=github" alt="ArctosFire">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

---

## 🌟 L'Essence du Projet

Bienvenue dans l'antre de **FurCode** ! Ce dépôt est une bibliothèque d'environnements **optimisés et sécurisés** pour Pterodactyl, conçus par un futur expert en Cybersécurité. 🐾

L'objectif est simple : offrir des Eggs qui ne se contentent pas de "tourner", mais qui sont configurés avec des **logs clairs (FurLogs)**, des **protections contre les vulnérabilités** communes et une gestion intelligente des ressources. Que tu déploies du Web ou de l'applicatif, la meute veille sur ton instance.

---

## 🛠️ La Meute des Eggs disponibles

Chaque Egg possède sa propre architecture interne optimisée pour sa technologie :

| Nom de l'Egg | Description | Stack Technique | État |
| :--- | :--- | :--- | :--- |
| **[🌐 WebHost](./Eggs/WebHost/)** | Hébergement complet avec logs personnalisés et sécurité durcie. | Nginx + PHP 8.x | ✅ Stable |
| **[🦴 Autre Egg]()** | *Prochainement...* | À définir | 🚧 Dév |

> [!TIP]
> **FurLogs intégré :** Nos Eggs Web utilisent une formulation de log propriétaire pour rendre la console lisible et détecter les comportements suspects d'un coup d'œil ! 🐾

---

## 🚀 Installation Express

### 1️⃣ Choisir son Egg
Navigue dans le dossier `/Eggs` et télécharge le fichier `.json` correspondant à l'environnement souhaité.

### 2️⃣ Importation dans le Panel
* Direction ton **Admin Panel Pterodactyl**.
* Section **Nests** > Choisis un Nest (ou crée-en un nommé "FurCode").
* Clique sur **Import Egg** et sélectionne ton fichier JSON.

### 3️⃣ Déploiement
Crée ton serveur, alloue les ressources, et lance le démarrage. La magie opère. ✨

---

## 📂 Philosophie du Territoire

Contrairement à d'autres collections, FurCode ne t'impose pas une structure rigide. Chaque Egg est construit sur mesure :
* **Adaptabilité :** L'arborescence est pensée pour respecter les standards de chaque langage/logiciel.
* **Transparence :** Les fichiers de configuration (Nginx, PHP-FPM, etc.) sont accessibles et optimisés pour le container.
* **Traçabilité :** Un focus particulier est mis sur la sortie console pour faciliter le debug et la surveillance.

---

## ❓ Foire Aux Questions (FAQ)

<details>
<summary><b>🐺 Comment mettre à jour mon code via GitHub ?</b></summary>
Utilise les variables `GIT_ADDRESS` et `BRANCH` dans l'onglet "Startup". À chaque "Reinstall", FurCode synchronise ton code automatiquement !
</details>

<details>
<summary><b>🔥 Est-ce sécurisé pour la production ?</b></summary>
Oui ! Les réglages PHP et Nginx sont durcis (désactivation de fonctions dangereuses, TLS 1.3, masquage de version) pour minimiser la surface d'attaque.
</details>

<details>
<summary><b>🦴 Un souci technique ?</b></summary>
Si une erreur survient, vérifie tes logs dans la console ou les fichiers `.log`. En cas de blocage, ouvre une Issue pour que la meute puisse t'aider.
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