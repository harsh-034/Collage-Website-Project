<?php

$conn = mysqli_connect('localhost','root','','user_db');
// user_db database

if(isset($_GET['id']))
{
    $s_id= $_GET['id'];

    $del_sql = "Delete  from user_form Where id='$s_id' ";
    $data = mysqli_query($conn,$del_sql);
}

?>      