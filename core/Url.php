<?php
	define("APP_NAME", "/qlthiolympic");
	define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'].APP_NAME);

	class Url {
		public static $ROOT_PATH = ROOT_PATH;

		public static function rootPath() {
			return ROOT_PATH;
		}

		public static function to($path) {
			if (isset($path)) {
				return ROOT_PATH.$path;
			} else {
				return ROOT_PATH;
			}
			
		}
	}
?>