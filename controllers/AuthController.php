<?php

class AuthController
{
    // Clients Side Authentication
    public static function login()
    {
        view("login");
    }
    public static function register()
    {
        view("register");
    }
    public static function logout()
    {
        session_start();
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        unset($_SESSION["is_logged_in"]);
        redirect("/login");
    }

    // Admin Panel Authentication
    public static function adminLogin()
    {
        if(isset($_SESSION["is_admin_logged_in"]))
        {
            redirect("/admin/dashboard");
        }
        $errorMsg = null;
        $emailErr = null;
        $passwordErr = null;
        if(Request::METHOD() === "POST")
        {
            $email = escape(request("email"));
            $password = escape(request("password"));

            if(empty($email) || empty($password))
            {
                if(empty($email))
                {
                    $emailErr = "Email address is required!";
                }
                if(empty($password))
                {
                    $passwordErr = "Password is required!";
                }
            } else {
                if(!validateEmail($email))
                {
                    $emailErr = "Invalid email format!";
                } else {
                    $user = App::get("db")->query("
                        SELECT * FROM admins WHERE email='$email' AND role=1
                    ")->getOne();
                    if($user)
                    {
                        if(password_verify($password,$user->password))
                        {
                            $_SESSION["username"] = $user->name;
                            $_SESSION["email"] = $user->email;
                            $_SESSION["is_admin_logged_in"] = time();
                            redirect("/admin/dashboard");
                        } else {
                            $errorMsg = "Wrong Credentials!";
                        }
                    } else {
                        $errorMsg = "Wrong Credentials!";
                    }
                }
            }
            
        }
        view("admin/login", [
            "errorMsg" => $errorMsg,
            "emailErr" => $emailErr,
            "passwordErr" => $passwordErr
        ]);
    }
    public static function adminLogout()
    {
        session_start();
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        unset($_SESSION["is_admin_logged_in"]);
        redirect("/admin/login");
    }
}
