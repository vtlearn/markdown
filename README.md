Markdown AddOn für REDAXO 4
===========================

Ermöglicht Markdown über die Klasse [Parsedown](http://parsedown.org) für das REDAXO Frontend.

Features
--------

* Bindet die Parsedown-Klasse im Frontend und Backend ein
* String Table AddOn Unterstützung

Codebeispiele
-------------

```php
<?php
// markdown nach html
echo rex_markdown::getHtml('**bold text**');

// markdown nach html ohne <p> Tags 
echo rex_markdown::getHtmlLine('**bold text**');

// markdown aus string table addon nach html
echo rex_markdown::getString('key');

// markdown aus string table addon nach html ohne <p> Tags 
echo rex_markdown::getStringLine('key');
?>
```

Hinweise
--------

* Getestet mit REDAXO 4.5, 4.6
* AddOn-Ordner lautet: `markdown`

Changelog
---------

siehe [CHANGELOG.md](CHANGELOG.md)

Lizenz
------

siehe [LICENSE.md](LICENSE.md)

Credits
-------

* [Parsedown](http://parsedown.org/) Class by Emanuil Rusev
