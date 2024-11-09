<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "company_management"; 


$conn = new mysqli($servername, $username, $password);


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully or already exists.\n";
// } else {
//     echo "Error creating database: " . $conn->error . "\n";
// }


$conn->select_db($dbname);


// $table_sql = "CREATE TABLE IF NOT EXISTS employees (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     employee_name VARCHAR(100) NOT NULL,
//     position VARCHAR(100) NOT NULL,
//     salary DECIMAL(10, 2) NOT NULL,
//     hire_date DATE NOT NULL
// )";

// if ($conn->query($table_sql) === TRUE) {
//     echo "Table 'employees' created successfully or already exists.\n";
// } else {
//     echo "Error creating table: " . $conn->error . "\n";
// }


// $conn->close();
?>
