<?php
include '../fonction.php';

create_user("username7", "@MotsdePasse1");
connect_user('username7', '@MotsdePasse1');
$test1 = disconnect_user('nonexistentuser');
$test2 = disconnect_user("username6'; DROP TABLE users; --");
if ($test1 === 1 && $test2 === 1) {
    printf("true");
} else {
    printf("false");
}
