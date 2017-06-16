<?php

 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
 $sql="CREATE TABLE job_zone_reference_2 (
  level DECIMAL(1,0) NOT NULL,
  level_name CHARACTER VARYING(50) NOT NULL,
  education CHARACTER VARYING(500) NOT NULL,
  experience CHARACTER VARYING(300) NOT NULL,
  level_of_job_training CHARACTER VARYING(300) NOT NULL)";

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

  $sql="INSERT INTO job_zone_reference_2(level, level_name , education, experience, level_of_job_training)
 VALUES('1','Zone one: Little Or No Preparation Needed','High school diploma or GED', 'Little to no experience', 'Need about a few days to months of training')";

 $sql="INSERT INTO job_zone_reference_2(level, level_name , education, experience, level_of_job_training)
 VALUES('2','Zone two: Some Preparation Needed','High school diploma', 'A few working experiences related to the occupation', 'Need about a few months to one year of training or working with others')";
 
  $sql="INSERT INTO job_zone_reference_2(level, level_name , education, experience, level_of_job_training)
 VALUES('3','Zone three: Medium Preparation Needed','Four years BA degree (must have four years of college degree of the field)', 'Some experiences related to the occupation', 'Need about a year to two years of training or working with others')";
 
  $sql="INSERT INTO job_zone_reference_2(level, level_name , education, experience, level_of_job_training)
 VALUES('4','Zone four: Considered Preparation Needed','High school diploma', 'A decent amount of experiences related to the occupation (a good amount of years of working experiences)', 'Need several years in training or working with others')";

  $sql="INSERT INTO job_zone_reference_2(level, level_name , education, experience, level_of_job_training)
VALUES('5','Zone five: Extensive Preparation Needed','Master or Ph.D degree in the graduate school', 'Have a vast amount of experiences, skills, training for this occupation (experience and work several years in the field)', 'Need only some training on the jod due to their extensive amount of experiences')";

 if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 
 
