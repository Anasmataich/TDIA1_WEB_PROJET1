<?php

$bd = "id22241498_projet_web2";
$dr = "mysql:host=localhost;dbname=$bd";
$root = "id22241498_root";
$paswrd = "Anasmataich123/";

try {
    $conn = new PDO($dr, $root, $paswrd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>