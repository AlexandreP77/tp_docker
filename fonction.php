<?php
    function create_user($login, $password)
    {
        $filePath = __DIR__ . "/users/" . $login . ".txt";
        $filePath = str_replace("\\", "/", $filePath);

        if (!empty($login) && !empty($password)) {
            if (ctype_alnum($login) && preg_match('/^[a-zA-Z0-9]+$/', $login)) {
                if (verifyPassword($password)) {
                    if (!file_exists($filePath)) {                                  
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        file_put_contents($filePath, $hashed_password);
                        return 0;
                    } else {
                        return 1;
                    }
                }else{
                    return 2;
                }
            }else{
                return 3;
            }
        }else{
            return 4;
        }
    }

    function connect_user($login, $password) {
        $filePath = __DIR__ . "/users/" . $login . ".txt";
        $filePath = str_replace("\\", "/", $filePath);
    
        if (!empty($login) && !empty($password)) {
            if (ctype_alnum($login) && preg_match('/^[a-zA-Z0-9]+$/', $login)) {
                if (file_exists($filePath)) {
                    $stored_password = file_get_contents($filePath);
                    if (password_verify($password, $stored_password)) {
                        $_SESSION["CONNECTED"] = $login;
                        return 0; 
                    } else {
                        return 1; 
                    }
                } else {
                    return 2; 
                }
            } else {
                return 3; 
            }
        } else {
            return 4;
        }
    }
        
    function disconnect_user($username) {
        if (isset($_SESSION["CONNECTED"]) && $_SESSION["CONNECTED"] == $username) {
            unset($_SESSION["CONNECTED"]);
            return 0;
        } else {
            return 1;
        }
    }

    function update_user($username, $old_password, $new_password) {
        $filePath = __DIR__ . "/users/" . $username . ".txt";
        $filePath = str_replace("\\", "/", $filePath);
    
        if (!empty($username) && !empty($old_password) && !empty($new_password)) {
            if (ctype_alnum($username) && preg_match('/^[a-zA-Z0-9]+$/', $username)) {
                if (file_exists($filePath)) {
                    $stored_password = file_get_contents($filePath);
                    if (password_verify($old_password, $stored_password)) {
                        if (verifyPassword($new_password)) {
                            $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
                            file_put_contents($filePath, $hashed_new_password);

                            return 0;
                        } else {
                            return 1; 
                        }
                    } else {
                        return 2; 
                    }
                } else {
                    return 3; 
                }
            } else {
                return 4;
            }
        } else {
            return 5; 
    }
    
    function delete_user($username) {
        $filePath = __DIR__ . "/users/" . $username . ".txt";
        $filePath = str_replace("\\", "/", $filePath);
    
        if (!empty($username)) {
            if (ctype_alnum($username) && preg_match('/^[a-zA-Z0-9]+$/', $username)) {
                if (file_exists($filePath)) {
                    unlink($filePath);
                    return 0; 
                } else {
                    return 1;
                }
            } else {
                return 2; 
            }
        } else {
            return 3; 
        }
    }
    
    function verifyPassword($password) {
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
