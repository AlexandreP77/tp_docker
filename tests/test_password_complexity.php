<?php
    include '../fonction.php';
    
    $test1 = create_user("username", "mzzzzzz");
    $test2 = create_user("username", "M@zzzzzz!");
    $test3 = create_user("username", "M@ZZZZZZ!");
    $test4 = create_user("username", "mzzzzzzz1");
    $test5 = create_user("username", "Mzzzz");
    $test6 = create_user("username", "M@zzzz");

    if ($test1 == 2 && $test2 < 2 && $test3 == 2 && $test4 == 2 && $test5 == 2 && $test6 == 2) {
        printf("true");
    } else {
        printf("false");
    }


