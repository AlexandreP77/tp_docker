<?php
include '../fonction.php';

create_user("username123", "P@ssword1");
$test1 = delete_user('username@');
$test2 = delete_user('username-');
$test3 = delete_user('username_');
$test4 = delete_user('username!');
// printf("r1: ".$r1." r2: ".$r2." r3: ".$r3." r4: ".$r4);

if ($test1 === 2 && $test2 === 2 && $test3 === 2 && $test4 === 2) {
    printf("true");
} else {
    printf("false");
}
