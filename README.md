# SYMFONY-CRUD
CRUD d'une entité au choix. **Entité choisie : Livre**
CRUD fait avec le Framework **SYMFONY**
Documentation officielle du Framework disponible sur : *https://symfony.com/docs*
**Version PHP : 8**
**Version SYMFONY : 6**

Pour lancer ce code sur votre machine, vous devez :
1. Installer wampserver téléchargeable sur ce lien : *https://www.wampserver.com/en/download-wampserver-64bits/*
2. Installer composer téléchargeable sur ce lien : *https://getcomposer.org/Composer-Setup.exe*
3. Installer en dezippant le dossier zippé de **symfony cli** disponible sur le lien : *https://github.com/symfony-cli/symfony-cli/releases/download/v5.5.0/symfony-cli_windows_amd64.zip*, ensuite ajouter le lien vers le repertoire dans votre variable d'environnement
4. Ensuite, pour continuer vous devez aussi installer **gitbash** téléchargeable sur ce lien : *https://git-scm.com/download/win*
5. Clonez le projet une fois l'installation terminé en exécutant la commande : 
*git clone https://github.com/MaFlore/SYMFONY-CRUD.git* ![1](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/git-clone.png)
6. Une fois le clone terminé, mettez vous dans le repertoire du projet ![2](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/repertoire-symfony-crud.png) en :
7. Installant les dépendances du projet avec la commande : ***composer install** ou **composer update** ![3](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/composer-install.png)
8. Mettez vous dans le fichier .env du projet pour configurer la connexion à la base de donnée comme suit : ![4](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/env.png)
9. Après la configuration de la connexion à la base de donnée, on va :
10. créer la base de données avec la commande : **symfony console doctrine:database:create** ![5](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/generate-database.png)
11. créer la schéma/ou les tables de notre base de données avec la commande : **symfony console doctrine:schema:create** ![6](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/generate-table.png)
12. Lancez ensuite le serveur de notre projet avec la commande : **symfony server:start** ![7](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/launch-server.png)
13. Les routes disponibles dans notre projet : 
    */* -> route de tous les livres
    */ajouter* -> route d'ajout d'un livre
    */modifier/{id<\d+>}* -> route de modification d'un livre
    */supprimer/{id<\d+>}* -> route de suppression d'un livre

# MANUEL D'UTILISATION

Une fois le serveur lancé avec la commande *symfony server:start*, dirigé vous sur l'adresse donnée dans votre invite de commande.
Adresse dans notre cas ici : *https://127.0.0.1:8000*
1. Entrons cette adresse dans notre navigation, on aura la liste de tous les livres disponibles dans notre base de données
![8](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/livres.png)
2. Maintenant cliquons sur le bouton *Ajouter*, nous aurons un formulaire d'ajout d'un livre
![9](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/ajouter.png)
3. Remplissons ensuite les données dans notre formulaire d'ajout
![10](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/donnees-ajoutees.png)
Validons l'ajout de ces données dans la base de données en cliquant sur le bouton *Ajouter*
4. Après cette validation, nous serons redirigés sur la liste des livres avec les données bien ajoutées dans la base de données
![11](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/livres-2.png)
5. Pour continuer, nous allons modifier la donnée qu'on vient d'ajouter en cliquant sur le bouton *Modifier*,
On fera le constat que les données qu'on veut modifier ont etes remplies dans le formulaire de modification une fois cliquez sur le bouton de *modification*
![12](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/modifier-livre.png)
Ainsi modifions ces données avec des nouvelles valeures
![13](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/modification.png)
Validons la modification de ces données dans la base de données en cliquant sur le bouton *Modifier*
6. Après cette validation, nous serons redirigés sur la liste des livres avec les données bien modifiées dans la base de données
![14](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/livres-3.png)
7. Maintenant supprimons une donnée en cliquant sur le bouton *Supprimer*
![15](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/suppression.png)
Validons cette suppression en cliquant sur le bouton *Confirmez* du message de confirmation
![16](https://github.com/MaFlore/SYMFONY-CRUD/blob/main/suppression-1.png)
Le constat fait est que la donnée est bien supprimée.

# MERCI !👊
