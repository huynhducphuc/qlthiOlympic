<?php
	require_once '../core/Url.php';
	require_once Url::$ROOT_PATH.'/core/SessionManager.php';
	SessionManager::init();

	SessionManager::destroy();

	header("location: ../login.php");
?>