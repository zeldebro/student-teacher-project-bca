<center>
    <h1> Student Information </h1>
    <table border="1">
        <tr style="background-color: #f1f1f1;">
            <th>Student Roll Number</th>
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
include 'db-connection.php';
function stud_find ()
{
    $sn = $_POST['sn'];
    $conn = db_conn();
    $query = "SELECT * FROM student WHERE Roll_Number='$sn'";
    $result = mysqli_query($conn, $query);
    if ($result = $conn -> query($query)) {
        while ($row=mysqli_fetch_row($result)) {
            echo "<td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>". $row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td></td>".$row[10]."</td><tr>";
        }
        $result->free_result();
    }
}
stud_find();
?>