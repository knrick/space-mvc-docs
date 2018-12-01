<?php

$credentials = array(
	'username' => '{{ config.extra.username }}',
	'password' => '{{ config.extra.password }}'
);

require_once('{{ base_url }}/basic_auth.php');
?>
