<?php
    include '../fonction.php';
    $test1 = create_user("username", "P@ssw0rd!");
    $test2 = create_user("usern@me", "P@ssw0rd!");
    $test3 = create_user("user_name", "P@ssw0rd!");
    $test4 = create_user("user123", "P@ssw0rd!");

    if ($test1 < 2 && $test2 == 3 && $test3 == 3 && $test4 < 2) {
        printf("true");
    } else {
        printf("false");
    }