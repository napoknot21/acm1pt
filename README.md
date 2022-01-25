# ACM1PT
Social Network

Pour pour que la connexion marche:

1) 	S'il s'agit d'un ordinateur personel, Suit les instruccion du ficher "base.sql' pour créer la base et la table necessaire. 
	En suite, il faut aller dans le fichier "config.php" et changer les parametres de la variable $connexion de la manière suivante:
		$connexion = mysqli_connect('localhost','root' , '' , 'Projet_IO2');
	Et c'est bon.

2) 	S'il s'agit des machines du script, on suit les instruccions du fichier "base.sql" MAIS on ignore la premier. Et on remplace la 2eme ligne par
		USE mon_login;
	En suite, il faut aller dans le fichier "config.php" et changer les parametres de la variable $connexion de la manière suivante:
		$connexion = mysqli_connect ( ' pams.script.univ-paris-diderot.fr ' , ' mon_login' , ' my_password ' , ' mon_login ' ) ;
	Et ça y est.


Pour commencer à utiliser le site:

1) 	Si vous êtes coonnecté depuis un ordinateur perosnel, il faut juste tapper: localhost/projet/index.php (Evidement, il faut placer le dossier projet dand /opt/lampp/htdocs
2)	Pour les machines du script, http://pams.script.univ-paris-diderot.fr/~cmartinavila/projet/index.php (on remplace cmartinavila pour votre login).
