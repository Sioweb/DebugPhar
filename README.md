# DebugPhar

Als Beispiel wird [composer.phar](https://getcomposer.org/download/) in ein Verzeichnis mit `extract.php` in das Verzeichnis `/extracted/` entpackt.

Die Dateien können dann nach belieben erweitert werden und mit `pack.php` wieder in `composer_new.phar` verwandelt werden. Diese Datei kann dann wie `composer` global verfügbar gemacht werden, um die locale Installation mit `composer_new [command]` zu testen. Unter Linux bietet sich an: mv composer_new.phar /usr/bin/composer_new`.
