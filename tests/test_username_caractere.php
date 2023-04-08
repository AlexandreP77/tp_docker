<?php
    include '../fonction.php';


    $test1 = create_user("username", "P@ssw0rd!");
    $test2 = create_user("usern#me", "M@zzzzzz!");
    $test3 = create_user("user/name", "M@zzzzzz!");
    $test4 = create_user("user123", "M@zzzzzz!");
    $test5 = connect_user('username123456789qwertyqwertyqwerty', 'p@ssword1');
    if ($test1 < 2 && $test2 == 3 && $test3 == 3 && $test4 = 3 && $test5 = 3) {
        printf("false");
    } else {
        printf("true");
    }