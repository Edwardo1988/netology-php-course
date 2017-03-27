<?php
	function get_json_data($arg, $massive) {

	$arg = file_get_contents('phone-book.json');
	$massive = json_decode($arg, true);
	return $massive;
	}