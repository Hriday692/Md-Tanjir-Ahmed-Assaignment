<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        // $id=$_POST['id'];
        $employee_name=$_POST['employee_name'];
        $position=$_POST['position'];
        $salary=$_POST['salary'];
        $hire_date=$_POST['hire_date'];

        $sql="INSERT INTO employees(employee_name,position,salary,hire_date) VALUES('$employee_name','$position','$salary','$hire_date')";
        
        if($conn->query($sql)==TRUE)
        {
            header("Location: Employee_list.php");
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Create New Student</title> <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<h1 class="text-center text-4xl my-5">Employee_Info</h1>
 <form action="employee_info.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
 <input name="id" type="hidden" placeholder="Enter Employee id" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="employee_name" type="text" placeholder="Enter Employee name" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="position" type="text" placeholder="Enter Position" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="salary" type="number" placeholder="Enter Employee Salary" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="hire_date" type="DATE" placeholder="Enter hire_date" class="w-full border border-blue-500 p-2 rounded-md">
 <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button> </form>

</body>
</html>