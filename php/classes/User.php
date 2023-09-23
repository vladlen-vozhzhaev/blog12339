<?php
    class User{
        public static function handlerReg(){
            global $mysqli;
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
            if($result->num_rows){
                return json_encode(['result'=>'userExist']);
            }else{
                $mysqli->query("INSERT INTO users (name, lastname, email, pass) VALUES ('$name', '$lastname', '$email', '$pass')");
                return json_encode(['result'=>'success']);
            }
        }

        public static function handlerLogin(){
            global $mysqli;
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
            if($result->num_rows){
                $user = $result->fetch_assoc();
                $passHash = $user['pass'];
                if(password_verify($pass, $passHash)){
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['lastname'] = $user['lastname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['avatar'] = $user['avatar'];
                    echo json_encode(['result'=>'success']);
                }else{
                    echo json_encode(['result'=>'error']);
                }
            }else{
                echo json_encode(['result'=>'error']);
            }
        }

        public static function getCurrentUser(){
            return json_encode($_SESSION);
        }
        public static function uploadUserAvatar(){
            global $mysqli;
            $userId = $_SESSION['id'];
            $userAvatar = $_FILES['userAvatar'];
            $path = 'img/'.$userAvatar['name']; //   img/picture.jpg
            move_uploaded_file($userAvatar['tmp_name'], $path);
            // `avatar`='/$path' -> /img/picture.jpg
            $mysqli->query("UPDATE `users` SET `avatar`='/$path' WHERE id = '$userId '");
            $_SESSION['avatar'] = "/$path";
            header('Location: /profile');
        }
        public static function logout(){
            session_start();
            session_destroy();
            header('Location: /login');
        }
    }