<?php
include 'db-connection.php';
$conn = db_conn();
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];

        if (in_array($ext, $allowed))
        {
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($conn, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            $path = 'uploads/';

            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));

            $sql = "INSERT INTO tbl_files(filename, created) VALUES('$filename', '$created')";
            mysqli_query($conn, $sql);
            header("Location: index.php?st=success");
            echo "file has been upalod successfully ........1";
        }
        else
        {
            echo "file has been upalod successfully ........2";
            header("Location: index.php?st=error");
        }
    }
    else

            header("Location: index.php");
    echo "file has been upalod successfully ........3";
}
?>