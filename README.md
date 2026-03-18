# 🥚 FurCode - WebHost | Egg Pterodactyl

![Version](https://img.shields.io/badge/Version-1.0.0-orange?style=for-the-badge)
![Logiciel](https://img.shields.io/badge/Stack-Nginx%20%7C%20PHP--FPM-blue?style=for-the-badge)
![Furry](https://img.shields.io/badge/Community-Furry%20Friendly-ff69b4?style=for-the-badge)

Bienvenue sur le dépôt officiel de **FurCode - WebHost**. Ce projet propose un "Egg" (œuf) haute performance pour le panel **Pterodactyl**, conçu spécifiquement pour l'hébergement web moderne, fluide et sécurisé. ✨

---

## 🐾 À quoi ça sert ?

L'objectif de **FurCode - WebHost** est de simplifier radicalement le déploiement de sites web sur un nœud Pterodactyl. Contrairement aux installations classiques souvent complexes, cet œuf pré-configure tout pour toi :
* **Serveur Web :** Nginx (Ultra léger et rapide).
* **Moteur Script :** PHP-FPM (Versions 7.4 à 8.3 supportées).
* **Sécurité :** Isolation des processus et gestion des permissions optimisée.
* **Interface :** Page d'accueil personnalisée **FurCode** incluse par défaut.

---

## 🚀 Guide d'Installation Rapide

### 1. Préparation
* Télécharge le fichier `egg-web-host-egg.json` présent dans ce dépôt.
* Assure-toi d'avoir un **Nest** (Nid) de type "Web Services" sur ton panel.

### 2. Importation
1.  Rends-toi sur ton **Panel Admin Pterodactyl**.
2.  Va dans la section **Nests**, puis clique sur le bouton **Import Egg**.
3.  Sélectionne le fichier JSON téléchargé.
4.  Associe-le au Nest de ton choix (ex: *WebServices*).

### 3. Création du Serveur
* Crée un nouveau serveur en choisissant l'Egg **FurCode - WebHost**.
* **Optionnel :** Tu peux lier un dépôt Git directement à la création pour que ton site se déploie automatiquement !

---

## 🛠️ Fonctionnalités Avancées

* **Auto-Installateur :** Support natif pour **WordPress** et **NamelessMC** via une simple case à cocher.
* **Gestion Git :** Déploiement automatique via branche spécifique avec support des Tokens d'accès personnels (PAT).
* **Structure de dossiers claire :**
    * `/webroot` : Tes fichiers publics (index.php, etc.).
    * `/nginx` : Configuration du serveur web (si tu veux personnaliser tes routes).
    * `/php-fpm` : Configuration du moteur PHP.
    * `/logs` : Accès direct aux erreurs pour un debug rapide.

---

## ❓ FAQ (Foire Aux Questions)

> **Q : Puis-je changer la version de PHP ?**
> **R :** Oui ! Cela dépend de l'image Docker sélectionnée dans la configuration de ton serveur. L'œuf est compatible avec la plupart des images PHP-FPM récentes.

> **Q : Comment puis-je mettre à jour mon site via GitHub ?**
> **R :** Remplis les variables `GIT_ADDRESS` et `BRANCH`. À chaque réinstallation du serveur, FurCode ira chercher la dernière version de ton code.

> **Q : Le serveur ne démarre pas (Erreur de permissions) ?**
> **R :** Assure-vous que le dossier `/home/container` appartient bien à l'utilisateur du serveur. En général, un bouton "Fix Permissions" sur le panel règle cela instantanément.

> **Q : Où sont mes bases de données ?**
> **R :** Cet Egg gère la partie Web. Pour la base de données, nous te conseillons de créer un serveur MySQL/MariaDB séparé sur ton panel et de lier les deux.

---

## 🤝 Contribution & Support

Les retours de la communauté sont le cœur de **FurCode**. 
* 🐾 **Un bug ?** Ouvre une *Issue* avec le log d'erreur.
* 💡 **Une idée ?** Propose une *Pull Request*, on adore les nouvelles fonctionnalités !
* 💬 **Besoin d'aide ?** N'hésite pas à me contacter via mon profil GitHub.

---

## 🛡️ Licence & Crédits
Ce projet est sous licence MIT. Libre à toi de le modifier et de le partager !

*Fait avec passion par **ArctosFire** 🐺🔥* *Rejoins la meute du code !*