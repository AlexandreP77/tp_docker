<?php
    include '../fonction.php';

    $test1 = create_user("username", "password");
    $test2 = create_user("username", "@MotsdePasse?");
    $test3 = create_user("username", "@MotsdePasse?");
    $test4 = create_user("username", "password1");
    $test5 = create_user("username", "Passw0rd");
    $test6 = create_user("username", "@MotsdePasse");

    if ($test1 == 2 && $test2 < 2 && $test3 == 2 && $test4 == 2 && $test5 == 2 && $test6 == 2) {
        printf("true");
    } else {
        printf("false");
    }