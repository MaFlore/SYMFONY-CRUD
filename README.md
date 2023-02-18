# SYMFONY-CRUD
CRUD d'une entité au choix. Entité choisie : Livre
CRUD fait avec le Framework **symfony**
Documentation officielle du Framework disponible sur : **https://symfony.com/docs***
**Version PHP : 8**
**Version SYMFONY : 6**

Pour lancer ce code sur votre machine, vous devez :
1. Installer wampserver téléchargeable sur ce lien : **https://www.wampserver.com/en/download-wampserver-64bits/**
2. Installer composer téléchargeable sur ce lien : **https://getcomposer.org/Composer-Setup.exe**
3. Installer en dezippant le dossier zippé de **symfony cli** disponible sur le lien : **https://github.com/symfony-cli/symfony-cli/releases/download/v5.5.0/symfony-cli_windows_amd64.zip**, ensuite ajouter le lien vers le repertoire dans votre variable d'environnement
4. Ensuite, pour continuer vous devez aussi installer **gitbash** téléchargeable sur ce lien : **https://git-scm.com/download/win**
5. Clonez le projet une fois l'installation terminé en exécutant la commande : **git clone https://github.com/MaFlore/SYMFONY-CRUD.git** ![1](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/git clone .png)
6. Une fois le clone terminé, mettez vous dans le repertoire du projet ![2](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/repertoire symfony crud.png) en :
    6.1. Installant les dépendances du projet avec la commande : ***composer install** ou **composer update** ![3](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/composer install.png)
    6.2. Mettez vous dans le fichier .env du projet pour configurer la connexion à la base de donnée comme suit : ![4](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/env.png)
    6.3. Après la configuration de la connexion à la base de donnée, on va :
        6.3.1. créer la base de données avec la commande : **symfony console doctrine:database:create** ![5](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/generate database.png)
        6.3.2. créer la schéma/ou les tables de notre base de données avec la commande : **symfony console doctrine:schema:create** ![6](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/generate table.png)
    6.4. Lancez ensuite le serveur de notre projet avec la commande : **symfony server:start** ![7](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/launch server.png)