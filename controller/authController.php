<?php
require_once '../required/db_conn.php';
require '../required/function.php';
$webxspark_admin = new webxspark;
$data = [];
$errors = '';
session_start();
if (isset($_REQUEST['action'])) {
    //testing the api
    $action = $_REQUEST['action'];
    if ($action === "login") {
        $email = htmlspecialchars($_REQUEST['email']);
        $pass = htmlspecialchars($_REQUEST['pass']);
        //validating data
        if (empty($email)) {
            $errors .= "Please enter your email to continue! <br>";
        }
        if (empty($pass)) {
            $errors .= "Please enter your password to verify your identity! <br>";
        }
        if ($errors === '') {
            //checking if user records exists in db
            $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $email); //using this method to prevent sql injection attack
            $stmt->execute();
            $result = $stmt->get_result();
            $usrCount = $result->num_rows;
            if ($usrCount > 0) {
                //user found.. extract info from the result obj
                $user = mysqli_fetch_assoc($result);
                //verify password
                if (password_verify($pass, $user['pass'])) {
                    //store user info in current session and login user
                    $_SESSION['uname'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SERVER['token'] = $user['token'];
                    $data = [
                        'status' => 200,
                        'redirect' => './'
                    ];
                } else {
                    $errors .= "Incorrect password! <br>";
                }
            } else {
                $errors .= "User not found! Please <a href='./signup.php'>create a new account</a>.<br>";
            }
        }
        if ($errors !== '') {
            $data = [
                'error' => $errors
            ];
        }
    }
    if ($action === "signup") {
        //validating data
        $name = htmlspecialchars($_REQUEST['name']);
        $email = htmlspecialchars($_REQUEST['email']);
        $pass = htmlspecialchars($_REQUEST['pass']);
        $cpass = htmlspecialchars($_REQUEST['cpass']);

        if ((empty($name) || empty($email) || empty($pass) || empty($cpass))) {
            $errors .= "Please fill all the required details to continue! <br>";
        } else {
            //validating email and checking two passwords
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors .= "Please enter a valid email address! <br>";
            } else {
                //check if email already exists in database
                $stmt = $conn->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $res = $stmt->get_result();
                $count = $res->num_rows;
                if ($count > 0) {
                    $errors .= "Email already exists! <a href=\"./login.php\">Login</a> to your account <br>";
                }
                if ($pass !== $cpass) {
                    $errors .= "Two passwords don't match! <br>";
                }
                $stmt->close();
            }
        }

        if ($errors === '') {
            //inserting data into database
            $token = rand(111111111, 999999999);
            $sql = "INSERT INTO users(username,email,pass,token) VALUES(?,?,?,?)";
            //hashing password
            $pass = password_hash($pass, PASSWORD_BCRYPT);
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssss', $name, $email, $pass, $token);
            if ($stmt->execute()) {
                $data = [
                    'status' => 200,
                    'redirect' => './'
                ];
            } else {
                $errors .= "Database Error: Something went wrong while creating a new account! <br>";
            }
        }
        if ($errors !== '') {
            $data = [
                'error' => $errors
            ];
        }
    }
}

//setting default output format as JSON
header("Content-type: application/json");
echo json_encode($data, JSON_PRETTY_PRINT);
