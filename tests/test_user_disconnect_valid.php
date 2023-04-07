<?php
include '../fonction.php';

create_user("username9", "M@zzzzzz1");
connect_user('username9', 'M@zzzzzz1');
$test1 = disconnect_user('username9');
// printf("test1: ".$test1);
if ($test1 === 0) {
    printf("true");
} else {
    printf("false");
}
