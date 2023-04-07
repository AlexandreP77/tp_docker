<?php
include '../fonction.php';

// création de l'utilisateur
$test1 = create_user("username1", "P@ssword1");

// tentative de connexion avec un mot de passe erroné
$test2 = connect_user('username1', 'wrong_password');

// tentative de connexion avec un mot de passe valide
$test3 = connect_user('username1', '@MotsdePasse');

// tentative de connexion avec un mot de passe valide, contenant un caractère spécial supplémentaire
$test4 = connect_user('username1', '@MotsdePasse?');

if ($test1 === 2 && $test2 === 1 && $test3 === 2 && $test4 === 2) {
    printf("true");
} else {
    printf("false");
}