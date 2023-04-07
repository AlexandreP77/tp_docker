<?php
    include '../fonction.php';

    $test1 = create_user("", "M@iid0ot!");
    $test2 = create_user("username", "");
    $test3 = create_user("", "");

    if ($test1 == 4 && $test2 == 4 && $test3 == 4) {
        echo "Le test a réussi.";
    } else {
        echo "Le test a échoué.";
    }

    ?>

    