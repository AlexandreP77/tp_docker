<?php
include '../fonction.php';

create_user("username6", "@MotsdePasse1");
connect_user('username6', '@MotsdePasse1');
$test1 = disconnect_user('nonexistentuser');
$test2 = disconnect_user("username6'; DROP TABLE users; --");
// printf("r1: ".$r1);
if ($test1 === 1 && $test2 === 1) {
    printf("true");
} else {
    printf("false");
}
