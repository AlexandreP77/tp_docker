<?php
include '../fonction.php';

create_user("username9", "M@zzzzzz1");
connect_user('username9', 'M@zzzzzz1');
$test1 = disconnect_user('username0');
if ($test1 === 0) {
    printf("false");
} else {
    printf("true");
}
