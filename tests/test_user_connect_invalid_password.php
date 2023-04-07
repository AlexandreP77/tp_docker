<?php
include '../fonction.php';

session_start();
create_user("username1", "M@zzzzzz1");
$r1 = connect_user('username1', 'mauvais_password');
$r2 = connect_user('username1', 'M@zzzzz');
$r3 = connect_user('username1', 'P@zzzzz');

// printf("test1: ".$test1." test2: ".$test2." test3: ".$test3);

if ($test1 === 1 && $test2 === 1 && $test3 === 1) {
    printf("true");
} else {
    printf("false");
}