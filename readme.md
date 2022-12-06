ProjetSelectionV3 ( PHP Ready ! ) 
23/11/2022

IP ( Egnom ) : https://10.0.52.85/
HTTPS à moitié ready ( certicat autosigné )

by corentin guillaume - Sept2022-Nov2022

README 1:

Le site est découpé en deux grandes pages PHP

- menu.php: Il s'agit de la page d'accueil, en fonction de la requête de la txtbox nom d'utilisateur, elle sera chargée des interfaces respectives correspondant à au type d'user qui se connecte, par exemple je tape prof, la page prof se chargera des élements liés au compte prof

- edit.php : Même principe, sauf qu'il s'agit des pages permettant aux utilisateurs d'effectuer des modif sur la future base de données

Le site est "protégé" c'est à dire qu'on ne peut pas accéder aux différentes interfaces juste en tapant /interfaces
Il faut creuser un peu en empêchant l'accès aux subdirectories par exemple en tapant le nom d'un folder, à voir, mais c'est une idée 

Les requêtes à taper dans la txtbox username sont : prof, admin, et secretaire, si on tape n'importe quoi d'autre, Erreur 404. Wow.
Il y a eu pas mal de boulot car il y a beaucoup de pages, peut être même trop, mais le PHP est un langage plutôt sympa.

TODO:

Relier les pages entre elles avec des boutons.
piste : méthodes get? récupération de la variable à la manière de menu.php?

Je réserve ça pour la V4, car le but de la V3 était juste d'intégrer le PHP, en tout cas, ça prend forme!

guillaume