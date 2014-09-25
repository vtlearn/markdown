<?php
class rex_markdown {
	public static function getHtml($md) {
		return Parsedown::instance()->text($md);
	}

	public static function getHtmlLine($md) {
		return Parsedown::instance()->text($md);
	}

	public static function getString($key) {
		$md = rex_getString($key);

		return Parsedown::instance()->text($md);
	}

	public static function getStringLine($key) {
		$md = rex_getString($key);

		return Parsedown::instance()->line($md);
	}
}

