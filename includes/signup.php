<?php

//if every thing in this page belogs to php then does not want to close php tag
if (isset($_POST['submit'])) {

    //include the db connection
    include_once './dbh.php';

    //mysqli_real_escape_string this function escaped some characters for use in sql statement
    //param1--db connection
    //param2--string value
    $fName = mysqli_real_escape_string($connection, $_POST['fname']);
    $lName = mysqli_real_escape_string($connection, $_POST['lname']);
    $eMail = mysqli_real_escape_string($connection, $_POST['email']);
    $uName = mysqli_real_escape_string($connection, $_POST['uname']);
    $pWd = mysqli_real_escape_string($connection, $_POST['pwd']);

    //error handle
    //check is empty using empty() function
    if (empty($fName) || empty($lName) || empty($eMail) || empty($uName) || empty($pWd)) {
        header("Location: ../signup.php");
        exit();
    } else {
        //check input charaters match with the pattern
        //regex
        if (!preg_match("/^[A-Za-z]/", $fName) || !preg_match("/^[A-Za-z]/", $lName)) {
            header("Location: ../signup.php");
            exit();
        } else {
            //validate email using filter
            if (!filter_var($eMail, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php");
                exit();
            } else {
                $sql = "select * from user where user_uid='$uName'";
                $result = mysqli_query($connection, $sql);
                $resultVal = mysqli_num_rows($result);

                if ($resultVal > 0) {
                    header("Location: ../signup.php");
                    exit();
                } else {
                    $password_hash = password_hash($pWd, PASSWORD_DEFAULT);
                    $insertQuiery = "insert into user(user_fname, user_lname, user_email, user_uid, user_pwd) values('$fName', '$lName', '$eMail', '$uName', '$password_hash');";
                    mysqli_query($connection, $insertQuiery);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
} else {
    
}