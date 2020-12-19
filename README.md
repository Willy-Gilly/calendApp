## Instalation : 
Dans un terminal : ``git clone https://github.com/Willy-Gilly/calendApp.git``


Puis dans le fichier de la solution : ``composer update``

(Téléchargez  ici : https://getcomposer.org/download/)

Copiez le fichier ".env.example" en ".env" au même endroit et remplissez les informations lié à la base de données que vous avez créé au préalable

Ensuite, dans un terminal, entrez ``php artisan key:generate``

L'application sera partiellement fonctionnelle.

Il faudra un ``php artisan migrate:fresh`` dans un terminal pour initialiser la base de données liée à l'application.

