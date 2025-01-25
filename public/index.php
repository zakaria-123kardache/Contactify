<?php
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Connexion;

echo "hello";

try {
    $db = Connexion::getInstance()->getConnexion();
    echo "Connection success";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
