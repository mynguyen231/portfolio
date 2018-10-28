<?php
include 'bdd_connection.php';
$query = 
'
	INSERT INTO 
	Message
	(Name, Email, Content)
	VALUES 
	(?,?,?)
';
 $resultSet = $pdo->prepare($query);
 $resultSet->execute([$_POST['name'], $_POST['email'], $_POST['message']]);
 include 'index.html';