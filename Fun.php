Voici le code PHP adapté avec des fun facts informatiques et scientifiques :
php

<!DOCTYPE html>
<html lang="fr">
<?php header('Content-type: text/html; charset=utf-8'); ?>
<head>
<meta charset="utf-8">
</head>
<?php
        $citations = array(
    "<i>Un octet contient 8 bits. Le mot « octet » vient du latin <em>octo</em>, signifiant huit.</i><br><b>(Informatique)</b>",
    "<i>Le premier bug informatique était un vrai insecte : une mite trouvée dans un relais du Harvard Mark II en 1947.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>L'ADN humain contient environ 3 milliards de paires de bases, soit l'équivalent de 750 mégaoctets de données.</i><br><b>(Biologie)</b>",
    "<i>Si un ordinateur effectuait une opération par nanoseconde, il lui faudrait 31,7 ans pour effectuer un milliard de milliards d'opérations.</i><br><b>(Informatique)</b>",
    "<i>La lumière parcourt environ 30 cm en une nanoseconde, ce qui limite physiquement la vitesse des processeurs.</i><br><b>(Physique)</b>",
    "<i>Le mot « algorithm » vient du nom du mathématicien perse Al-Khwarizmi, père de l'algèbre.</i><br><b>(Histoire des sciences)</b>",
    "<i>Il y a plus de configurations possibles dans un jeu d'échecs qu'il n'y a d'atomes dans l'univers observable.</i><br><b>(Mathématiques)</b>",
    "<i>Le premier langage de programmation de haut niveau, Fortran, date de 1957.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>La loi de Moore, qui prédit le doublement du nombre de transistors tous les deux ans, a tenu pendant plus de 50 ans.</i><br><b>(Informatique)</b>",
    "<i>Une cuillère à café de matière d'étoile à neutrons pèserait environ un milliard de tonnes.</i><br><b>(Astrophysique)</b>",
    "<i>Le cerveau humain contient environ 86 milliards de neurones, chacun connecté à des milliers d'autres.</i><br><b>(Neurosciences)</b>",
    "<i>L'internet a été inventé par ARPANET en 1969, mais le World Wide Web n'a été créé par Tim Berners-Lee qu'en 1991.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>Unix, créé en 1969, a directement ou indirectement inspiré macOS, Linux, Android et iOS.</i><br><b>(Systèmes d'exploitation)</b>",
    "<i>Il y a environ 10 puissance 80 atomes dans l'univers observable, mais il existe environ 10 puissance 120 parties d'échecs possibles.</i><br><b>(Mathématiques)</b>",
    "<i>Un smartphone moderne est des millions de fois plus puissant que les ordinateurs qui ont guidé Apollo 11 vers la Lune.</i><br><b>(Informatique)</b>",
    "<i>Python a été nommé d'après le groupe comique britannique Monty Python, et non d'après le serpent.</i><br><b>(Langages de programmation)</b>",
    "<i>Le premier email a été envoyé en 1971 par Ray Tomlinson, qui a également introduit le symbole @ dans les adresses mail.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>En informatique quantique, un qubit peut représenter 0 et 1 simultanément grâce à la superposition quantique.</i><br><b>(Informatique quantique)</b>",
    "<i>Environ 90 % de toutes les données mondiales ont été créées au cours des deux dernières années.</i><br><b>(Big Data)</b>",
    "<i>Le son se déplace environ 340 m/s dans l'air, mais 5 900 m/s dans l'acier — 17 fois plus vite.</i><br><b>(Physique)</b>",
    "<i>Linux, qui fait tourner la majorité des serveurs web du monde, a commencé comme le projet hobby d'un étudiant finlandais de 21 ans.</i><br><b>(Systèmes d'exploitation)</b>",
    "<i>Le protocole IPv4 permet environ 4,3 milliards d'adresses IP. IPv6 en permet 340 undécillions.</i><br><b>(Réseaux)</b>",
    "<i>Le terme « hacker » désignait à l'origine quelqu'un de créatif et doué en programmation, sans connotation négative.</i><br><b>(Culture informatique)</b>",
    "<i>Le gène FOXP2, associé au langage chez l'humain, est aussi présent chez les oiseaux chanteurs — pour le même usage.</i><br><b>(Génétique)</b>",
    "<i>Le zéro absolu (-273,15 °C) est la température à laquelle les molécules cessent théoriquement tout mouvement.</i><br><b>(Thermodynamique)</b>",
    "<i>Le premier disque dur, créé par IBM en 1956, pesait une tonne et ne stockait que 5 mégaoctets.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>Un photon met environ 100 000 ans pour aller du cœur du Soleil à sa surface, mais seulement 8 minutes pour atteindre la Terre.</i><br><b>(Astrophysique)</b>",
    "<i>Le mot « robot » vient du tchèque <em>robota</em>, signifiant travail forcé. Il a été inventé par Karel Čapek en 1920.</i><br><b>(Histoire)</b>",
    "<i>Les nombres premiers ont plus de 2 000 ans d'histoire mathématique, mais restent au cœur de toute la cryptographie moderne.</i><br><b>(Mathématiques)</b>",
    "<i>Il n'existe pas de nombre pair premier supérieur à 2. Tous les autres nombres premiers sont impairs.</i><br><b>(Mathématiques)</b>",
    "<i>Le théorème de Gödel démontre qu'aucun système logique suffisamment puissant ne peut prouver toutes les vérités qu'il contient.</i><br><b>(Logique mathématique)</b>",
    "<i>La majorité des humains sur Terre accède à internet via un smartphone, non un ordinateur.</i><br><b>(Usages numériques)</b>",
    "<i>Le processus de compilation transforme du code lisible par l'humain en instructions binaires comprises par le processeur.</i><br><b>(Informatique)</b>",
    "<i>Le nombre pi contient, quelque part en lui, n'importe quelle suite de chiffres imaginable — votre date de naissance incluse.</i><br><b>(Mathématiques)</b>",
    "<i>L'effet tunnel quantique permet aux électrons de traverser des barrières physiquement infranchissables : c'est ce qui permet aux processeurs modernes de fonctionner.</i><br><b>(Physique quantique)</b>",
    "<i>Le signe égal (=) a été inventé en 1557 par le mathématicien gallois Robert Recorde, pour éviter d'écrire « est égal à » sans cesse.</i><br><b>(Histoire des mathématiques)</b>",
    "<i>Les cables de fibre optique transmettent des données sous forme de lumière à près de 200 000 km/s.</i><br><b>(Réseaux)</b>",
    "<i>Le génome humain contient environ 20 000 gènes — soit moins que celui du maïs (32 000).</i><br><b>(Génomique)</b>",
    "<i>La première image numérique de l'histoire, numérisée en 1957, était une photo d'un bébé.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>Le paradoxe de Fermi pose la question : si l'univers regorge de planètes habitables, pourquoi n'avons-nous jamais détecté de signe de vie extraterrestre ?</i><br><b>(Astrophysique)</b>",
    "<i>Ada Lovelace, fille du poète Byron, est considérée comme la première programmeuse de l'histoire — au XIXe siècle.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>Le hasard ne peut être parfaitement simulé par un algorithme ; les ordinateurs génèrent du « pseudo-aléatoire ».</i><br><b>(Informatique)</b>",
    "<i>En cryptographie, la clé de chiffrement RSA standard est de 2048 bits — casser cette clé prendrait des millions d'années aux ordinateurs actuels.</i><br><b>(Cryptographie)</b>",
    "<i>La Terre a parcouru environ 940 millions de kilomètres autour du Soleil depuis votre naissance, si vous avez 30 ans.</i><br><b>(Astronomie)</b>",
    "<i>Le compilateur GCC, utilisé pour compiler Linux et des millions d'autres logiciels, est lui-même écrit en C.</i><br><b>(Informatique)</b>",
    "<i>Un ordinateur capable de casser une clé RSA-2048 en un jour n'existe pas encore — mais un ordinateur quantique suffisamment puissant le pourrait en quelques heures.</i><br><b>(Informatique quantique)</b>",
    "<i>L'espace entre le noyau d'un atome et ses électrons est proportionnellement aussi vide que l'espace entre le Soleil et ses planètes.</i><br><b>(Physique atomique)</b>",
    "<i>Le langage SQL, inventé en 1974, reste l'un des langages informatiques les plus utilisés au monde.</i><br><b>(Bases de données)</b>",
    "<i>Il existe plus de façons de mélanger un jeu de 52 cartes qu'il n'y a eu de secondes depuis le Big Bang.</i><br><b>(Mathématiques)</b>",
    "<i>Le premier ordinateur personnel à usage grand public, l'Apple II, est sorti en 1977.</i><br><b>(Histoire de l'informatique)</b>",
    "<i>Un gramme d'ADN peut théoriquement stocker 215 pétaoctets de données, soit l'équivalent de 215 millions de gigaoctets.</i><br><b>(Bioinformatique)</b>",
);

        $total = count($citations);
        $i = rand(0,$total-1);
echo $citations[$i];
?>
</html>
