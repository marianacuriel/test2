<?php

 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
 $sql="CREATE TABLE occupation_data_2 (
  code CHARACTER(10) NOT NULL,
  occupation_title CHARACTER VARYING(150) NOT NULL,
  occupation_description CHARACTER VARYING(1000) NOT NULL)";

 // Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>





<?php
 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$sql="INSERT INTO occupation_data_2(code, occupation_title, occupation_description)
VALUES('11-1011.00', 'Chief Executives', 'Help the employees in the company, make polies, provide the company the direction toward their goal')";
  
$sql="INSERT INTO occupation_data_2(code, occupation_title, occupation_description)
VALUES('11-1021.00', 'General and Operations Managers', 'Overlook everyday operations, plan and propose policies on resources usage, manage and admins transaction between providers')";

$sql="INSERT INTO occupation_data_2(code, occupation_title, occupation_description)
VALUES('11-2011.00', 'Advertising and Promotions Managers', 'Overlook advertismenting policies and programs to lure in customers')";

$sql="INSERT INTO occupation_data_2(code, occupation_title, occupation_description)
VALUES('11-2022.00', 'Sales Managers', 'Overlook transaction actions, create goal, trains sales reps, analyze sales stats, determie customers references')";

$sql="INSERT INTO occupation_data_2(code, occupation_title, occupation_description)
VALUES('11-2031.00', 'Public Relations and Fundraising Managers', 'Overlook tasksto create good name and popularity for the company to cature their customers')";

$sql="INSERT INTO occupation_data_2(code, occupation_title, occupation_description)
VALUES('11-3031.01', 'Treasurers and Controllers', 'Overlooks the financial activities for the company')";

 if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 