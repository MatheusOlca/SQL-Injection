<?php

$name = $_GET['name'];
$password = $_GET['password'];

$sql = 'SELECT * FROM profiles WHERE profiles.name = \''.$name.'\' AND profiles.password = \''.$password.'\'';

echo 'Nome: '.$name.
'</br> Password: '.$password.
'</br> SQL: '.$sql.
'</br><button onClick="document.location = \'/cola a cola com o Collado\';">Voltar</button>';