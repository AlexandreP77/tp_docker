<?php
include '../fonction.php';

create_user("username3", "@MotsdePasse1?");

$test1 = connect_user('username3', '@MotsdePasse?1');

if ($test1 === 0) {
    printf("true");
} else {
    printf("false");
}