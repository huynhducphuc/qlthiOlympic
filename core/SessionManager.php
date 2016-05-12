<?php
class SessionManager {
	public static function init() {
		if (session_id() == '' && !headers_sent()) {
			session_start();
		}
	}

	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}

	public static function get($key) {
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		} 
	}

	public static function add($key, $value) {
		$_SESSION[$key][] = $value;
	}

	public static function destroy() {
		session_unset();
		session_destroy();
	}

	public static function setLoggedIn($value) {
		$_SESSION['isLoggedIn'] = $value;
	}

	public static function isLoggedIn() {
		$value = SessionManager::get('isLoggedIn');
		if (isset($value)) {
			return TRUE;
		}

		return FALSE;
	}
}
?>