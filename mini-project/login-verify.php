<?php
function db_conn()
{
    $servername = "localhost";
    $username = "Raghu";
    $password = "root123";
    $dbname = "college";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "<span style='color: #04AA6D; text-align:center;' > Thank you!!!</span>";

    }
    return $conn;

}

function validate_user()
{
    if ($_SERVER['REQUEST_METHOD']=='POST'){
    $uname=$_POST['uname'];
    $passwd=$_POST['psw'];
    $conn=db_conn();
        $sql= "SELECT * FROM users WHERE username = '$uname' AND password = '$passwd' ";
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_array($result);
        if(isset($check)){
            header('location: student-dashboard.php');
        }else{
            echo 'Wrong Username or Password ';
        }
    }
}
validate_user();

function teacher_user()
{
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $uname=$_POST['uname'];
        $passwd=$_POST['psw'];
        $conn=db_conn();
        $sql= "SELECT * FROM teacher WHERE username = '$uname' AND password = '$passwd' ";
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_array($result);
        if(isset($check)){
            header('location: teacher-dashboard.php');
        }else{
            echo 'Wrong Username or Password ';
        }
    }

}

teacher_user();
?>