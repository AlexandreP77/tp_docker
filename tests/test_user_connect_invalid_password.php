<?php
include '../fonction.php';
session_start();
create_user("username2", "M@sdfsdf1");
$test1 = connect_user('username2', 'mauvaismdsp');
$test2 = connect_user('username2', 'M@zzzzz');
$test3 = connect_user('username2', 'MM@zzzz');
if ($test1 === 1 && $test2 === 1 && $test3 === 1) {
    printf("true");
} else {
    printf("false");
}