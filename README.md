# Exercice Première page
Passer d'une page HTML à une page PHP.

## Préparation
1. Téléchargez le dossier `premierepage-depart` et mettez-le sur le disque `D:`. Il s’agit de l’application Web que vous devez faire.
1. Ouvrir le dossier dans _VSCode_.
1. Démarrer le serveur interne de PHP à l'aide de la commande suivante:
    ```cmd
    php -S localhost:8000
    ```
1. Visionner le projet dans le fureteur à l'adresse `http://localhost:8000`
1. Commencer par le fichier `page1.php` et suivre les indications ci-dessous.
1. _Note_: Après chaque étape, visionner le code source de la page.

## Fichier page1.php
1. But: Transformer une page HTML page pour qu'il n'y ait plus que du PHP.
1. Prendre le code HTML de la page `index.html` et le coller dans le fichier `page1.php`.
1. Ajouter la balise ouvrante de PHP.
1. Faire un `echo` pour chacune des lignes de la page.

## Fichier page2.php
1. Reprendre le code de la page précédente
1. But: Transformer cette page pour qu'il n'y ait plus qu'un seul `echo` à la fin.
1. Faire des concaténations successives de chacune des lignes dans une variable.
1. Faire l'affichage de la variable.

## Fichier page3.php
1. Reprendre le code de la page précédente
1. But: Faire l'affichage à l'aide d'une fonction
1. Créer la fonction `affichagePage`.
1. Placer le code de la concaténation dans la fonction et faire retourner le résultat.
1. Transformer la page pour que le `echo` affiche le résultat de la fonction `affichagePage`.

## Fichier page4.php
1. Reprendre le code de la page précédente
1. But: Rendre le contenu de la fonction dynamique
1. Modifier la fonction `affichagePage` pour lui donner les paramètres `$title`, `$body` et `$head` ayant comme valeurs par défaut respectivement `'Document sans titre'`, `''` et `''`.
1. Modifier la fonction `affichagePage` pour faire afficher les paramètres au bons endroits.
1. Modifier l'appel de la fonction `affichagePage` pour faire afficher `'Nouveau titre'` dans la barre de titre et `'Nouveau body'` dans le corps de la page.
1. Noter que le paramètre `$head` vient ajouter au contenu de la balise `head` et non le remplacer.

## Fichier page5.php
1. But: Créer une classe rudimentaire Page qui gère l'affichage d'une page.
1. Créer le fichier `Page.php`
1. Dans ce fichier, créer la class `Page`.
1. Créer la méthode **statique** `affichage` en utilisant le code de la fonction de la page précédente.
1. Dans le fichier `page5.php`, faire l'inclusion du fichier `Page.php` à l'aide de `include_once`.
1. Faire l'affichage de la page en utilisant la classe `Page` et sa méthode `affichage`.

