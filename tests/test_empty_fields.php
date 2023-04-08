<?php
    include '../fonction.php';

    $test1 = create_user("", "M#zzzzzz?");
    $test2 = create_user("username", "");
    $test3 = create_user("", "");
    $test4 = create_user("username", "M#zzzzzz!");
    if ($test1 == 4 && $test2 == 4 && $test3 == 4 && $test4 < 2) {
        printf("true");
    } else {
        printf("false");
    }