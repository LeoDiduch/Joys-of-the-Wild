<?php

require_once('userfordatabase.php');

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo 'Woops, looks like something went wrong : ' . $error->getMessage();
}
