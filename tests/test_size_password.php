<?php
    include '../fonction.php';

// Test 1: création d'un utilisateur avec un mot de passe valide
$test1 = create_user("username", "P@ss1");
if ($test1 === true) {
    echo "Test 1: succès\n";
} else {
    echo "Test 1: échec\n";
}

// Test 2: création d'un utilisateur avec un mot de passe invalide
$test2 = create_user("username", "@MotsdePasse?");
if ($test2 === false) {
    echo "Test 2: succès\n";
} else {
    echo "Test 2: échec\n";
}

// Test 3: création d'un utilisateur avec un mot de passe trop long
$test3 = create_user("username", "@MotsdePasse?@MotsdePasse?");
if ($test3 === false) {
    echo "Test 3: succès\n";
} else {
    echo "Test 3: échec\n";
}