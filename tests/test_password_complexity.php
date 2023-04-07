<?php
    include '../fonction.php';
    
    $test1 = create_user("username", "password");
    $test2 = create_user("username", "@MotsdePasse?");
    $test3 = create_user("username", "@MotsdePasse?");
    $test4 = create_user("username", "motsdepasse1");
    $test5 = create_user("username", "m0tdepasse");
    $test6 = create_user("username", "@MotsdePasse");
    
    if ($test1 == 4 && $test2 == 0 && $test3 == 1 && $test4 == 2 && $test5 == 1 && $test6 == 0) {
        printf("true");
    } else {
        printf("false");
    }
    ?>
    