<?php
// DISPATCHER 


// 1.Charger l'initialisation
require_once '../core/init.php';
// var_dump($connexion);uniquement pour tester si la connexion PDO

// 2.Charger le router
require_once '../app/routers/index.php';

// 3.Charger le template
require_once '../app/views/templates/default.php';