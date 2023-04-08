<?php
    include '../fonction.php';

    $test1 = create_user("username", "M@zzzzz");
    $test2 = create_user("username", "M@zzzzz!");
    $test3 = create_user("username", "M@zzzzz!M@zzzzz!M@zzzzz!");
    $test4 = create_user("username", "M@zzzzz!M@zzzzz!M@zzzzz!M@zzzzz!M@zzzzz!M@zzzzz!");
    if ($test1 == 2 && $test2 < 2 && $test3 < 2 && $test4 == 2) {
        printf("true");
    } else {
        printf("false");
    }