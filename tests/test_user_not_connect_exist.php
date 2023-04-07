<?php
include '../fonction.php';

create_user("username2", "@MotsdePasse");
$test1 = connect_user('username4', '@MotsdePasse');
$test2 = connect_user('username5', '@MotsdePasse1');
$test3 = connect_user('nonexistentuser', '@MotsdePasse1');
$test4 = connect_user('usernama', '@MotsdePasse1');
// printf("r1: ".$r1." r2: ".$r2." r3: ".$r3." r4: ".$r4);
if ($test1 === 2 && $test2 === 2 && $test3 === 2 && $test4 === 2) {
    printf("true");
} else {
    printf("false");
}
