<?php
include '../fonction.php';

create_user("username", "p@ssword1");

$test1 = connect_user('username', 'p@ssword1');
$test2 = connect_user('username', 'mauvais_password');
$test3 = connect_user('non_existent_user', 'p@ssword1');
$test4 = connect_user('username\' OR 1=1 --', 'p@ssword1');

if ($test1 !== 0 && $test2 !== 0 && $test3 !== 0 && $test4 !== 0) {
    printf("true");
} else {
    printf("false");
}