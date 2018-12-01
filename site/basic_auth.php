<?php

$loginSuccessful = false;

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){

	$username = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];

	if ($username == $credentials['username'] && $password == $credentials['password']){
		$loginSuccessful = true;
	}
}

if (!$loginSuccessful) {
	header('WWW-Authenticate: Basic realm="default"');
	header('HTTP/1.0 401 Unauthorized');

	echo '<div style="font-family:arial;font-size:14px;">401 - Unauthorized.</div>';
	exit;
}

?>