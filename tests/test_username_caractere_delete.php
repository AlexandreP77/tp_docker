<?php
include '../fonction.php';

create_user("username123", "P@ssword1");
$test1 = delete_user('mzzzzz@');
$test2 = delete_user('mzzzzz-');
$test3 = delete_user('mzzzzz_');
$test4 = delete_user('mzzzzz!');
if ($test1 === 2 && $test2 === 2 && $test3 === 2 && $test4 === 2) {
    printf("true");
} else {
    printf("false");
}
