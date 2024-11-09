<?php
include 'db.php';

if(ISSET($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM employees WHERE id=$id";

    if($conn->query($sql)==TRUE)
        {
            header("Location: Employee_list.php");
        }
}
?>