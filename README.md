# php-workshop
## Installation de PHP
1. Télécharger la dérnière version stable de php (`PHP 7.4`) sous format ZIP
2. Extrayer le contenu du fichier ZIP dans `C:\PHP7`.
3. Créer une copie du fichier C:\PHP7\php.ini-development et renommez la en C:\PHP7\php.ini.
4. Ouvrer le fichier C:\PHP7\php.ini nouvellement copié dans un éditeur de texte, tel que Visual Studio Code.
5. Modifier `memory_limit` de 128M à 1G (pour tenir compte des besoins en mémoire de `Composer` lorsqu'on aura besoin).
6. Rechercher `extension_dir` et décommenter la ligne (supprimez le point-virgule de tête, pour que la ligne ressemble à `extension_dir = "ext"`).
7. Pour ajouter C:\PHP7 à la variable d'environnement du chemin système de Windows 10
8. Dans une invite de commande (PowerShell ou un autre terminal), vérifiez que l'installation est réussie en tapant `php -v`

## Enoncé 1 

pour démarrer le fichier movies.php Exécutez la commande suivante sur le terminale pour faire fonctionner le serveur web intégré de PHP : `php -S localhost:8085/Enoncé1/movies.php`. pour démarrer le serveur, et voir le resultat sur le lien "localhost:8085/Enoncé1/movies.php" au navigateur.<< vous pouvez écrire dans les inputs ou modifier la chaîne de requête.>>

Ou vous pouvez simplement Exécutez la commande `php movies.php` sur le dossier Enoncé1.


## Enoncé 2

pour démarrer le fichier tracker.php Exécutez la commande suivante sur le terminale pour faire fonctionner le serveur web intégré de PHP : `php -S localhost:8085/Enoncé2/tracker.php`. pour démarrer le serveur, et voir le resultat sur le lien "localhost:8085/Enoncé2/tracker.php" au navigateur
Ou vous pouvez simplement Exécutez la commande `php tracker.php` sur le dossier Enoncé2

## Enoncé 2
Dans cette activité, nous pratiquerons le looping imbriqué et appliquerons des conditions pour limiter les itérations des boucles intérieures et extérieures. Nous disposerons d'un tableau associatif multidimensionnel dans lequel le nom du réalisateur sert de clé pour contenir un tableau de noms de films. Ainsi, chaque élément du tableau associatif contient un nom de réalisateur comme clé et le tableau des noms de films comme valeur. Nous allons introduire une boucle extérieure pour faire une boucle à travers les éléments du tableau associatif et imprimer le nom du réalisateur, utilisé comme clé. Une autre boucle interne doit boucler le tableau des noms de films de ce réalisateur - c'est la clé. Les arguments agissent comme des étapes d'itération de boucle pour maintenir où le premier argument définit combien de fois le nom d'un réalisateur doit être imprimé et le second argument définit combien de noms de films doivent être imprimés à partir du réalisateur donné.
- Le tableau multidimensionnel contient cinq réalisateurs.
- Les étapes à effectuer sont les suivantes :
1. Créer le fichier script `activity-movies.php`, qui prend deux arguments, tous deux numériques : le premier argument sera utilisé pour le nombre de réalisateurs, et le second sera utilisé pour le nombre de films.
2. Ajouter `un tableau imbriqué` contenant une `liste` de cinq réalisateurs, chaque entrée contenant une liste de cinq titres de films.
3. En exécutant le script, imprimez la liste des réalisateurs et des titres de films, comme l'exigent les arguments d'entrée.
4. Si les arguments d'entrée ne sont pas passés, considérez alors la valeur par défaut de 5 pour les deux.
- Voici quelques exemples de résultats obtenus en exécutant le script php activity-movies.php:

Les films de Steven Spielberg :

> The Post

> Le pont des espions

Les films de Christopher Nolan :

> Dunkerque

> Quai

Les films de Martin Scorsese :

> Le Loup de Wall Street

> Hugo

