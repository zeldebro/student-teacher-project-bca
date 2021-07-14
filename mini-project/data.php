<center>
    <h1> Student Information </h1>
    <table border="1">
        <tr style="background-color: #f1f1f1;">
            <th>Frist Name</th>
            <th>Middel Name</th>
            <th>Last Name</th>
            <th>Brith Data</th>
            <th>Course</th>
            <th>Gender</th>
            <th>Mobile Number</th>
            <th>Current Address</th>
            <th>Pin Code</th>
            <th>Email ID</th>
        </tr>
<?php
$servername = "localhost";
$username = "Raghu";
$password = "root123";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
///else/    echo "<span style='color: #04AA6D; text-align:center;' > Thank you!!!</span>";
////    echo "<br>";
}
$fristname=$_GET['firstname'];
$middlename=$_GET['middlename'];
$lastname=$_GET['lastname'];
$brithdate=$_GET['brithdate'];
$Course=$_GET['Course'];
$Gender=$_GET['gender'];
$Phone=$_GET['Phone'];
$Current_Address=$_GET['Current_Address'];
$pincode=$_GET['pincode'];
$email=$_GET['email'];
$psw=$_GET['psw'];

    $sql="INSERT INTO `student`(`Frist_Name`, `Middle_Name`, `Last_Name`, `Brith_Date`, `Gender`, `Course`, `Mobile_Number`, `Current_Address`, `Pin_Code`, `Email_ID`) VALUES ('$fristname','$middlename','$lastname','$brithdate','$Gender','$Course','$Phone','$Current_Address','$pincode','$email')";
if ($conn->query($sql) === TRUE) {
    echo "<br>";
    echo "<span style='text-align: center; color: #04AA6D'> Your data has been saved.</span>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$user="INSERT INTO `users`(`username`, `password`, `Frist_name`, `Last_name`) VALUES ('$email','$psw','$fristname','$lastname')";

if ($conn->query($user) === TRUE) {
    echo "<br>your user has been created<br>";
}
else
{
    echo "user has not been created. try again.";
}


$sql = "SELECT * FROM student";
if ($result = $conn -> query($sql)) {
    while ($row=mysqli_fetch_row($result)) {
//        echo "<br>";
//        echo "<br>";
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td></tr>";
    }
//    $result->free_result();
//    if ($result)
//{
//    echo "<br>";
//    echo "<span style='color: #04AA6D; text-align:center;' > Thank you!!!</span>";
//    echo "<br>";
//    echo "<span style='text-align: center; color: #04AA6D'> Your data has been saved.</span>";
//}
//    else
//{
//    throw new \Exception('MySQL error: ' . $conn->error);
//}
}
$conn -> close();


?>