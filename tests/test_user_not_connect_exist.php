<?php
include '../fonction.php';

session_start();
create_user("username2", "M@zzzzzz1");
$test1 = connect_user('username6', 'M@zzzzzz1');
$test2 = connect_user('username7', 'M@zzzzzz1');
$test3 = connect_user('nonexistante', 'M@zzzzzz1');
$test4 = connect_user('usernamee', 'M@zzzzzz1');

if ($test1 === 2 && $test2 === 2 && $test3 === 2 && $test4 === 2) {
    printf("true");
} else {
    printf("false");
}