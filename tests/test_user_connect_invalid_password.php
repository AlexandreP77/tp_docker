<?php
include '../fonction.php';

create_user("username1", "P@ssword1");
$test1 = connect_user('username1', 'wrong_password');
$test2 = connect_user('username1', '@MotsdePasse');
$test3 = connect_user('username1', '@MotsdePasse?');

// printf("r1: ".$r1." r2: ".$r2." r3: ".$r3);

if ($test1 === 1 && $test2 === 1 && $test3 === 1) {
    printf("true");
} else {
    printf("false");
}