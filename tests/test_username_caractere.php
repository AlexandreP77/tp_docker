<?php
    include '../fonction.php';
    $test1 = create_user("username", "M@zzzzzz!");
    $test2 = create_user("usern@me", "M@zzzzzz!");
    $test3 = create_user("user_name", "M@zzzzzz!");
    $test4 = create_user("user123", "M@zzzzzz!");

    if ($test1 < 2 && $test2 == 3 && $test3 == 3 && $test4 < 2) {
        printf("true");
    } else {
        printf("false");
    }