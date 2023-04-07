<?php
include '../fonction.php';

create_user("username8", "@MotsdePasse?1");
connect_user('username8', '@MotsdePasse?1');
$test1 = disconnect_user('password1');
// printf("r1: ".$r1);
if ($test1 === 0) {
    printf("true");
} else {
    printf("false");
}
