<?php
    function create_user($login, $password) {
        if (!ctype_alnum($login) || !preg_match('/^[a-zA-Z0-9]+$/', $login)) {
            return 3; // invalid username
        }

        if (!verifyPassword($password)) {
            return 2; // invalid password
        }

        $filePath = __DIR__ . "/users/" . $login . ".txt";
        $filePath = str_replace("\\", "/", $filePath);

        if (file_exists($filePath)) {
            return 1; // user already exists
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        file_put_contents($filePath, $hashed_password);
        return 0; // success
    }

    function connect_user($login, $password) {
        if (!ctype_alnum($login) || !preg_match('/^[a-zA-Z0-9]+$/', $login)) {
            return 3; // invalid username
        }

        $filePath = __DIR__ . "/users/" . $login . ".txt";
        $filePath = str_replace("\\", "/", $filePath);

        if (!file_exists($filePath)) {
            return 2; // user does not exist
        }

        $stored_password = file_get_contents($filePath);

        if (!password_verify($password, $stored_password)) {
            return 1; // invalid password
        }

        $_SESSION["CONNECTED"] = $login;
        return 0; // success
    }
        
    function disconnect_user($username) {
        if (isset($_SESSION["CONNECTED"]) && $_SESSION["CONNECTED"] == $username) {
            unset($_SESSION["CONNECTED"]);
            return 0; // success
        } else {
            return 1; // user not connected
        }
    }

    function update_user($username, $old_password, $new_password) {
        if (!ctype_alnum($username) || !preg_match('/^[a-zA-Z0-9]+$/', $username)) {
            return 4; // invalid username
        }

        if (!verifyPassword($new_password)) {
            return 1; // invalid new password
        }

        $filePath = __DIR__ . "/users/" . $username . ".txt";
        $filePath = str_replace("\\", "/", $filePath);

        if (!file_exists($filePath)) {
            return 3; // user does not exist
        }

        $stored_password = file_get_contents($filePath);

        if (!password_verify($old_password, $stored_password)) {
            return 2; // invalid password
        }

        $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
        file_put_contents($filePath, $hashed_new_password);
        return 0; // success
    }
    
    function delete_user($username) {
        if (!ctype_alnum($username) || !preg_match('/^[a-zA-Z0-9]+$/', $username)) {
            return 2; // invalid username
        }

        $filePath = __DIR__ . "/users/" . $username . ".txt";
        $filePath = str_replace("\\", "/", $filePath);

        if (!file_exists($filePath)) {
            return 1; // user does not exist
        }

        unlink($filePath);
        return 0; // success
    }
    
    function verifyPassword($password) {
        if (strlen($password) < 8) {
            return false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
    }