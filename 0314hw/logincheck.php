<?php
    session_start();
?>

<h1>Login Result </h1>

<?php
    $uName = "user";
    $uPwd = "12345";
    $aName = "admin";
    $aPwd = "67890";
    $userName = $_POST["userName"];
    $userPwd = $_POST["userPwd"];

    if ($uName == $userName && $uPwd == $userPwd){
        echo "Login success";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds", time());
        setcookie("userName", $uName, $cookiedate);
        header("Location:userinterface.php");
    } else if ($aName == $userName && $aPwd == $userPwd) {
        echo "Login success";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds", time());
        setcookie("userName", $aName, $cookiedate);
        header("Location:admininterface.php"); 
    } else {
        echo "Login failed, will send you back to login again";
        header("Refresh:3;url='login.php");
    }

?>