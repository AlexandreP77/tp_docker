<?php
include '../fonction.php';

create_user("username", "M@zzzzzz2");
$test1 = connect_user('username', 'M#zzzzzzf!');
$test2 = connect_user('username', 'invalid/password');
$test3 = connect_user('non_existent_user', 'M#zzzzzzdfd!');
if ($test1 !== 0 && $test2 !== 0 && $test3 !== 0) {
    printf("true");
} else {
    printf("false");
}