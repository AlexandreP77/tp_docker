<?php
    include '../fonction.php';

    $test1 = create_user("username", "P@ss1");
    $test2 = create_user("username", "@MotsdePasse?");
    $test3 = create_user("username", "@MotsdePasse?@MotsdePasse?");

    if ($test1 == 2 && $test2 < 2 && $test3 < 2) {
        printf("true");
    } else {
        printf("false");
    }