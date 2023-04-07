<?php
include '../fonction.php';

create_user("username4", "M@zzzzzz1");
session_start();
$r1 = connect_user('username4', 'M@zzzzzz1');

if ($r1 === 0) {
    printf("true");
} else {
    printf("false");
}