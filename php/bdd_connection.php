<?php

	$pdo = new PDO
	(
		'mysql:host=sql189.main-hosting.eu;dbname=u252202033_main;charset=UTF8',
		'u252202033_my',
		'mynguyen231',
	    [
	    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	    ]
    );