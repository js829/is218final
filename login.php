<?php
session_start();
require_once 'model/database.php';
    if (isset($_POST['submit'])) {
        $useremail = $_POST['email'];
        $userpass = $_POST['password'];
        chckusername($useremail, $userpass);
    }
    function chckusername($useremail, $userpass){ // submitting empty or missing one of the fields
        $check = "SELECT * FROM accounts WHERE email='$useremail'";
        $check_q = runQuery($check); 
        if (count($check_q) == 1) {
            chcklogin($useremail, $userpass);
        }
        else{
            echo "<div id='loginmsg'>This email does not exist. Please try again or create an account.</div>";
        }
    }
    function chcklogin($useremail, $userpass){
        $login = "SELECT * FROM accounts WHERE email='$useremail'  and password='$userpass'";
        $login_q = runQuery($login);
        // Mysql_num_row is counting table row
         if (count($login_q) == 1){
            echo "<div id='loginmsg'> Logged in as $useremail </div>"; 
            $_SESSION['email'] = $useremail;
            header('Location: todo.php');
        }
        else {
            echo "<div id='loginmsg'>Wrong password. Please try again. </div>"; 
        }
    }
?>


