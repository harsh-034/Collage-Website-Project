<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_db');


if(isset($_GET['id']))
{
    $s_id= $_GET['id'];

    $del_sql = "Delete  from registrations Where id='$s_id' ";
    $data = mysqli_query($conn,$del_sql);
}
?>
