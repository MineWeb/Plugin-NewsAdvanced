# Plugin Mineweb | NewsAdvanced

## Description
Ce plugin vous permet d'afficher des miniatures aux news

## Installation | FTP
1. Cliquez sur "Clone or download" sur la page "https://github.com/MineWeb/Plugin-NewsAdvanced".
2. Téléchargez et enregistrez le ZIP, puis extrayez le.
3. Renommez le fichier "Plugin-NewsAdvanced-master" par "NewsAdvanced".
4. Déplacez le fichier dans votre FTP à l'adresse "/app/Plugin".
5. Supprimez tous les fichiers dans le "/app/tmp/cache" de votre FTP.
6. Installation effectuée.

## Installation | Site
1. Rendez-vous à l'adresse "VotreSite/admin/plugin".
2. Cherchez le plugin "NewsAdvanced" dans le tableau "Plugins gratuits et achetés disponibles".
3. Cliquez sur "Installer" pour installer le plugin sur votre site.
4. Supprimez tous les fichiers dans le "/app/tmp/cache" de votre FTP.
5. Installation effectuée.


Ce plugin vous permet d'afficher des miniatures aux news

## Utilisation

**Afficher la miniature :**

```PHP
<?= $v['News']['img'] ?>
```

Cela va renvoyer l'URL de la miniature que vous avez entrez lors de la création de la news. (Pensez à changer la variable `$v` avec celle que vous utilisez pour vos appels.)

**Vérifier si le plugin est installé :**


```PHP
<?php if($EyPlugin->isInstalled('empiredev.newsadvanced')){ ?>
<?php } ?>

```

Permet de vérifier si le plugin est installé (pour éviter une erreur si la colonne `img` n'existe pas). Vous devez utiliser les fonctionnalités du plugin à l'intérieur de cette condition..