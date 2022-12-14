
# **Projet BLOG-MVC**

## 1- Description du projet :

Ce projet consiste à créer un blog grâce à la méthode MVC (motif d'architecture logiciel):
- **Manager** : Contient les données à afficher
- **View** : Contient la présentation de l'interface graphique.
- **Controller** : Contient la logique des actions effectuées par l'utilisateur.

## 2- Technologies utilisées :

### Plateforme d'**éxécution du code** :
- Docker

### En **base de donnée** :
- MySQL

### En **back** :
- PHP

### pour le **style** :
- TailWind

### pour **partager notre code** :
- Github

## 3- Quelques commandes dans le terminal pour configurer/partager le projet le projet :

### Pour docker :
- **docker compose up** : Créer le container docker
- **docker compose down** : Supprime le container docker
- **"cd app"** puis **"composer dump-autoload"** : installer l'autoload

### Pour GitHub :
- **git status** : voir où l'on se trouve (sur main / sur une branche) et les modifications
- **git add . + git commit -m "*message*"** : sauvegarder ses modifications
- **git pull** : récupérer les modifications des autres sur son code
- **git push** : ajouter ses modifications au projet
- **git branch** : voir les branches du projet
- **git branch *nom de branche*** : créer une branche
- **git switch main/*nom de branche*** : se déplacer entre main et les branches
- **git pull origin main** : récupérer les modifications... depuis main en étant sur une branche
- **git push origin *nom de branche*** : ajouter ses modifications au main depuis une branche (il faut ensuite merge la pull request directement sur HitHub)

## 4- Se connecter à la base de donnée via adminer :
- Utilisateur : **root**
- Mot de passe : **password**
- Base de donnée : **data**

## 5- Fonctionnalités :

### En tant qu'utilisateur vous pourrez :
- vous créer un compte.
- vous connecter au blog.
- contempler le fil d'actualité avec tous les posts sur le blog.
- ajouter un post.
- modififer vos posts.
- supprimer vos posts.
- commenter un post.
- répondre à un commentaire.

### En tant qu'administrateur vous pourrez :
- vous créer un compte.
- vous connecter au blog.
- contempler le fil d'actualité avec tous les posts sur le blog.
- ajouter un post.
- modifier n'importe quel post.
- supprimer n'importe quel post.
- commenter un post.
- répondre à un commentaire.
- avoir un onglet 'voir les utilisateurs'. Dans cet onglet vous pourrez supprimé un utilisateur ou modifier son rôle pour le faire devenir admin ou le faire devenir utilisateur
__________________________________________________

# Projet réalisé par :

- ### LACES Vitomir
- ### MESSAOUI Dounia
- ### OUALLET Sandie
