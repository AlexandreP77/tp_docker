<?php
include '../fonction.php';

create_user("username4", "M@zzzzzz1");
session_start();
$test1 = connect_user('username4', 'M@zzzzzz1');
if ($test1 === 0) {
    printf("true");
} else {
    printf("false");
}