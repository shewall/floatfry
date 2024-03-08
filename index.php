<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        header("Location: login.php?error=Username and Password are required");
        exit();
    } else {
        $sql = "SELECT * FROM Staff WHERE Staff_UserName='$uname' AND Staff_Password = '$pass'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['Staff_UserName'] = $row['Staff_UserName'];
            $_SESSION['Staff_Name'] = $row['Staff_Name'];
            $_SESSION['Staff_ID'] = $row['Staff_ID'];
            $_SESSION['Job_Title'] = $row['Job_Title'];
            $jobTitle = $row['Job_Title'];

            if ($jobTitle === 'stamper') {
                header("Location: stamper_home.php");
                exit();
            } else if ($jobTitle === 'Floor_Manager') {
                header("Location: floor_home.php");
                exit();
            } else if ($jobTitle === 'prodees') {
                header("Location: prodes_home.php");
                exit();
            } else if ($jobTitle === 'POs' || $jobTitle === 'Production_Manager') {
                header("Location: POs_PM_home.php");
                exit();
            } else if ($jobTitle === 'Marketing_Manager') {
                header("Location: marketing_home.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect Username or Password");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
