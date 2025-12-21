# 🦁 ASSAD – Zoo Virtuel (CAN 2025 Maroc)

## 📌 Présentation du projet

À l’occasion de la **Coupe d’Afrique des Nations 2025 organisée au Maroc**, le zoo virtuel **ASSAD** a pour objectif de promouvoir **le Lion de l’Atlas** et la richesse de la faune africaine auprès des supporters, visiteurs et familles à travers un **site web dynamique et éducatif**.

Le projet permet :
- d’explorer les animaux et leurs habitats,
- de découvrir leur statut de conservation,
- de participer à des **visites guidées virtuelles interactives**.

---

## 🎯 Objectifs
- Valoriser la biodiversité africaine
- Sensibiliser à la protection des espèces
- Offrir une expérience éducative et immersive
- Mettre en avant le Lion de l’Atlas comme symbole

---

## 👥 Rôles & Fonctionnalités

### 🔐 Authentification
- Inscription et connexion sécurisées
- Choix du rôle : **Visiteur** ou **Guide**
- Mots de passe **hashés et cryptés**
- ⚠️ **Admin unique** (hardcodé en base de données)

---

### 🛠️ Administrateur
- Gestion des utilisateurs :
  - Activer / désactiver un compte
  - Approuver les comptes **Guide**
  - Page informative si rôle non approuvé
- Gestion CRUD :
  - Animaux (image, habitat lié)
  - Habitats
- Statistiques :
  - Nombre total d’utilisateurs
  - Utilisateurs par pays
  - Nombre total d’animaux
  - Animaux les plus consultés
  - Visites guidées les plus réservées

---

### 🧭 Guide
- Créer, modifier, annuler des **visites guidées virtuelles**
- Définir :
  - titre, description, date, heure, durée
  - prix, langue, capacité maximale
- Ajouter **en masse** les étapes d’une visite (parcours)
- Organiser l’ordre des étapes
- Consulter les réservations :
  - visiteurs, nombre de personnes, date

---

### 🌍 Visiteur
- Consulter la fiche spéciale :
  - **“Asaad – Lion de l’Atlas”**
- Voir tous les animaux :
  - image, nom, espèce, pays d’origine
  - filtrage par habitat et pays africain
- Rechercher une visite guidée
- Réserver une visite (si connecté)
- Laisser un commentaire et une note après une visite effectuée

---

## 🧩 User Stories – Techniques

### 📐 Conception
- Diagramme de cas d’utilisation UML
- Diagramme de classes / ERD pour la base de données

### 🗃️ Modèle de base de données (tables principales)

- **animaux**  
  `(id, nom, espèce, alimentation, image, paysorigine, descriptioncourte, id_habitat)`

- **habitats**  
  `(id, nom, typeclimat, description, zonezoo)`

- **utilisateurs**  
  `(id, nom, email, rôle, motpasse_hash)`

- **visitesguidees**  
  `(id, titre, dateheure, langue, capacite_max, statut, duree, prix)`

- **etapesvisite**  
  `(id, titreetape, descriptionetape, ordreetape, id_visite)`

- **reservations**  
  `(id, idvisite, idutilisateur, nbpersonnes, datereservation)`

- **commentaires**  
  `(id, idvisitesguides, idutilisateur, note, texte, date_commentaire)`

---

## ⚙️ Aspects techniques
- Backend avec requêtes SQL complexes (JOIN)
- Validation côté serveur
- Contrôles via **Regex** (email, mot de passe, noms…)
- Animations JavaScript pour améliorer l’expérience utilisateur *(optionnel)*

---

## 🧑‍💻 Technologies utilisées
- Frontend : HTML, CSS, JavaScript
- Backend : PHP
- Base de données : MySQL
- Sécurité : password_hash(), prepared statements

---
### 📸 Aperçu
<img src="./assets/images/Capture d&apos;écran 2025-12-21 233345.png">
