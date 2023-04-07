<?php
function create_user($login, $password)
{
    $filePath = __DIR__ . "/users/" . $login . ".txt";
    $filePath = str_replace("\\", "/", $filePath);

    if (file_exists($filePath)) {
        return 1;
    }

    if (file_exists($filePath)) {
        return 1;
    }

    if (!Passwordverify($password)) {
        return 2;
    }

    if (!ctype_alnum($login) || !preg_match('/^[a-zA-Z0-9]+$/', $login)) {
        return 3;
    }

    if (empty($login) || empty($password)) {
        return 4;
    }

    


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    file_put_contents($filePath, $hashed_password);
    return 0;
}

function connect_user($login, $password)
{
    $filePath = __DIR__ . "/users/" . $login . ".txt";
    $filePath = str_replace("\\", "/", $filePath);

    if (empty($login) || empty($password)) {
        return 4;
    }

    if (!ctype_alnum($login) || !preg_match('/^[a-zA-Z0-9]+$/', $login)) {
        return 3;
    }

    if (!file_exists($filePath)) {
        return 2;
    }

    $stored_password = file_get_contents($filePath);
    if (!password_verify($password, $stored_password)) {
        return 1;
    }

    $_SESSION["CONNECTED"] = $login;
    return 0;
}

function disconnect_user($username)
{
    if (!isset($_SESSION["CONNECTED"]) || $_SESSION["CONNECTED"] != $username) {
        return 1;
    }

    unset($_SESSION["CONNECTED"]);
    return 0;
}

function update_user($username, $old_password, $new_password)
{
    $filePath = __DIR__ . "/users/" . $username . ".txt";
    $filePath = str_replace("\\", "/", $filePath);

    if (empty($username) || empty($old_password) || empty($new_password)) {
        return 5;
    }

    if (!ctype_alnum($username) || !preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        return 4;
    }

    if (!file_exists($filePath)) {
        return 3;
    }

    $stored_password = file_get_contents($filePath);
    if (!password_verify($old_password, $stored_password)) {
        return 2;
    }

    if (!Passwordverify($new_password)) {
        return 1;
    }

    $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
    file_put_contents($filePath, $hashed_new_password);

    return 0;
}

function Passwordverify($password)
{
    if (strlen($password) < 8) {
        return false;
    }
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }

    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }
    $allowed_special_chars = '!@#$%^&*()-_=+.,:;>';
    $pattern = '/[' . preg_quote($allowed_special_chars, '/') . ']/';
    if (!preg_match($pattern, $password)) {
        return false;
    }
    if (preg_match('/[{}()\[\]|\\_\/<]/', $password)) {
        return false;
    }
    return true;
}


function delete_user($username)
{
    $filePath = __DIR__ . "/users/" . $username . ".txt";
    $filePath = str_replace("\\", "/", $filePath);

    if (empty($username)) {
        return 3;
    }

    if (!ctype_alnum($username) || !preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        return 2;
    }

    if (!file_exists($filePath)) {
        return 1;
    }

    unlink($filePath);
    return 0;
}

?>