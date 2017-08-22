<?php

//if every thing in this page belogs to php then does not want to close php tag
if (isset($_POST('submit'))) {

    //include the db connection
    include_once './dbh.inc';

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
        header("Location : ../signup.php");
        exit();
    }
} else {
    
}

