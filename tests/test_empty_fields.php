<?php
    include '../fonction.php';

    $test1 = create_user("", "@MotsdePasse?");
    $test2 = create_user("username", "");
    $test3 = create_user("", "");

    if ($test1 == 4 && $test2 == 4 && $test3 == 4) {
        printf("true");
    } else {
        printf("false");
    }