<?php
    require "connection.php";

    function regisUs($data){
        global $conn;

        $username = strtolower(stripslashes($data["usernameUser"]));
        $password = mysqli_real_escape_string($conn,$data["passwordUser"]);
        $confPass = mysqli_real_escape_string($conn,$data["confirmPassUser"]);

        $usernameCheck = mysqli_query($conn,"SELECT username FROM user_table WHERE username = '$username'");
        if(mysqli_fetch_assoc($usernameCheck)){
            echo"<script>
                    alert('username sudah pernah digunakan!!');
                </script>";
            return false;    
        }

        if($password !== $confPass){
            echo"<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn,"INSERT INTO user_table VALUES('','$username','$password')");

        return mysqli_affected_rows($conn);
    }
?>