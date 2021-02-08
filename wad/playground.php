<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database

 //$sql = "CREATE DATABASE myDB";
 //if ($conn->query($sql) === TRUE) {
 //  echo "Database created successfully";
 //} else {
 //  echo "Error creating database: " . $conn->error;
 //}

// sql to create table

// $sql = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(32) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(32) NOT NULL,
//     phoneNumber INT(12),
//     address VARCHAR(500),
//     creditCardNo INT(16),
//     CCName VARCHAR(100),
//     CCExpiry VARCHAR(10),
//     CCValidationCode INT(3)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table Users created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

    // $sql = "CREATE TABLE products (
    //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //   title VARCHAR(500),
    //   synopsis VARCHAR(5000),
    //   date VARCHAR(500),
    //   studios VARCHAR(500),
    //   genre VARCHAR(500),
    //   episodes VARCHAR(500),
    //   duration VARCHAR(500),
    //   firstDate VARCHAR(500),
    //   finalDate VARCHAR(500),
    //   status VARCHAR(500),
    //   seasons VARCHAR(500),
    //   rating VARCHAR(500),
    //   thumbnail VARCHAR(500),
    //   price VARCHAR(500),
    //   availability VARCHAR(500)
    //   )";
      
    //   if ($conn->query($sql) === TRUE) {
    //     echo "Table products created successfully";
    //   } else {
    //     echo "Error creating table: " . $conn->error;
    //   }

    


      // $sql = "CREATE TABLE admin (
      // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      // username VARCHAR(50),
      // password VARCHAR(50)
      // )";
      
      // if ($conn->query($sql) === TRUE) {
      //   echo "Table admin created successfully";
      // } else {
      //   echo "Error creating table: " . $conn->error;
      // }



           // $sql = "CREATE TABLE orders (
			 // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			 // title VARCHAR(50),
			 // price VARCHAR(50)
			 // )";
      
		   // if ($conn->query($sql) === TRUE) {
			 // echo "Table orders created successfully";
		   // } else {
			 // echo "Error creating table: " . $conn->error;
			 // }


					 $sql = "CREATE TABLE feedback (
					     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					     name VARCHAR(32) NOT NULL,
					     email VARCHAR(50) NOT NULL,
					     subject VARCHAR(100) NOT NULL,
						 content VARCHAR(500) NOT NULL
					     )";
						
					     if ($conn->query($sql) === TRUE) {
					       echo "Table Feedback created successfully";
					     } else {
					       echo "Error creating table: " . $conn->error;
					     }
		
		//DISCOUNT COUPON - NABIL
		// CREATE TABLE discount_coupon (
		  // id int(6) UNSIGNED NOT NULL,
		  // discount_code varchar(32) NOT NULL,
		  // price int(6) NOT NULL
		// ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
		
		// INSERT INTO discount_coupon (id, discount_code, price) VALUES
		// (1, 'PROMO10', 10),
		// (2, 'PROMO30', 30),
		// (3, 'PROMO50', 50),
		// (4, 'PROMO70', 70);

 $conn->close();
?>