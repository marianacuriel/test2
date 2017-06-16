<?php

 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
 $sql="CREATE TABLE task_ratings_2 (
  code CHARACTER(10) NOT NULL,
  task_id DECIMAL(8,0) NOT NULL,
  error DECIMAL(5,2),
  low_ci DECIMAL(5,2),
  high_ci DECIMAL(5,2),
  updated DATE NOT NULL)";

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
  
$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-1011.00', 8826, 6.25, 13.63, 38.28, '2014-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-1011.00', 8826, 4.33, 1.58, 22.38, '2014-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-1011.00', 8830, 5.58, 16.77, 38.75, '2014-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-1011.00', 8830, 1.12, 92.25, 99.84, '2014-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-1021.00', 20701, 2.13, 0.32, 13.69, '2015-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-2011.00', 3230, 13.43, 3.52, 57.61, '2010-06-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-2011.00', 3230, 0.27, 3.59, 4.65, '2010-06-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-2011.00', 3241, 3.33, 0.40, 22.00, '2010-06-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-2011.00', 3241, 6.07, 4.80, 30.63, '2010-06-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-2022.00', 4, NULL, NULL, NULL, '2016-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-2031.00', 3249, 4.19, 3.88, 21.67, '2009-06-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-3031.01', 8857, NULL, NULL, NULL, '2012-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-3031.01', 8867, NULL, NULL, NULL, '2012-07-01')";

$sql="INSERT INTO task_ratings_2(code, task_id, error, low_ci, high_ci, updated)
VALUES('11-3031.01', 8867, NULL, NULL, NULL, '2012-07-01')";

 if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 
 