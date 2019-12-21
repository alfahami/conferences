# Gestion de conférences
Cette aplication est réalisée en HTML/CSS, JQUERY et PHP.\
L'application répond à la pluapart des demades du cahier de charge décrit ci-dessous.

## OS 
Linux, windows

## Serveur
Appache 

### Base de données
MySQL/MariaDB

## Installation
Configurer votre virtualhost et donner comme hostname : ccc.fs.uit (ou autre nom que vous voulez).\
Le fichier ccc.sql contient le script de création des tables.\
Editer le fichier config.php pour ajouter le nom de votre BD, votre username, mot de passe et votre hôte.

## Test




### Cahier de charge

<p align="justify">
Le système de gestion de conférences supporte le processus de soumission de papier, d'affectation de papier, d'évaluation de papier, de décision de papier :<br>
L'administrateur gère toutes les activités de la conférence : il doit créer la conférence et déterminer les dates importantes (date limite de soumission, la fin du processus d'évaluation et la date de la conférence). Il détermine aussi les sessions et les président correspondants. Il construit la liste des comités. Il établit les tutoriels avant la conférence. Il a le droit d'affecter les papiers aux comités, de voir les évaluations des papiers, de décider l'état de papier (accepté, rejeté, poster), il peut aussi changer la session de papier si l’auteur du papier a demander le changement. Il gère également les inscriptions à la conférence et les statistiques de la conférence.<br>
Le responsable est le président de sa session. Il a la tâche de choisir les comités pour sa session. 
Il peut affecter les papiers aux comités de sa session. Il peut évaluer et voir les évaluations des papiers de sa session. Il a le droit de décider l'état des papiers (accepté, rejeté, poster) de sa session. Le comité peut évaluer les papiers affectés.<br>
Les comités locaux sont responsables de préparer les amphis pour les tutoriels et la conférence, réserver les hôtels pour les participants et confirmer ses réservations sur le site web. L'auteur peut soumettre un(des) papier(s), supprimer les papiers soumis, s'inscrire à la conférence (obligatoire pour les auteurs de papier accepté ou poster), changer le profil.
L'utilisateur peut voir les informations de la conférence (appel à contribution, programme, ...), il peut aussi créer un  compte sur le site pour soumettre un papier ou s'inscrire à la conférence.

1- Modéliser cahier de charge à l’aide de diagramme de cas d’utilisation, diagramme de séquence, diagramme de communication, diagramme d’état, diagramme d’activité, diagramme de classe et diagrammepackage.

2- Réaliser une application correspondante au cahier de charge en PHP ou en JEE.
 </p>
