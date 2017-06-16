/*! START TRANSACTION */;
CREATE TABLE job_zone_reference (
  level DECIMAL(1,0) NOT NULL,
  level_name CHARACTER VARYING(50) NOT NULL,
  education CHARACTER VARYING(500) NOT NULL,
  experience CHARACTER VARYING(300) NOT NULL,
  level_of_job_training CHARACTER VARYING(300) NOT NULL);
/*! COMMIT */;
/*! START TRANSACTION */;





INSERT INTO job_zone_reference	(level, level_name , education, experience, level_of_job_training)
VALUES	('1', 'Zone one: Little Or No Preparation Needed', 'High school diploma or GED', 'Little to no experience', 'Need about a few days to months of training');
INSERT INTO job_zone_reference	(level, level_name , education, experience, level_of_job_training)
VALUES	('2', 'Zone two: Some Preparation Needed', 'High school diploma', 'A few working experiences related to the occupation', 'Need about a few months to one year of training or working with others');
INSERT INTO job_zone_reference	(level, level_name , education, experience, level_of_job_training)
VALUES	('3', 'Zone three: Medium Preparation Needed', 'Vocational school, on the job experience, or have an associated degree, or earn certificate for that related to the field', 'Some experiences related to the occupation', 'Need about a year to two years of training or working with others');
INSERT INTO job_zone_reference	(level, level_name , education, experience, level_of_job_training)
VALUES	('4', 'Zone four: Considered Preparation Needed', 'Four years BA degree (must have four years of college degree of the field)', 'A decent amount of experiences related to the occupation (a good amount of years of working experiences)', 'Need several years in training or working with others');
INSERT INTO job_zone_reference	(level, level_name , education, experience, level_of_job_training)
VALUES	('5', 'Zone five: Extensive Preparation Needed', 'Master or Ph.D degree in the graduate school', 'Have a vast amount of experiences, skills, training for this occupation (experience and work several years in the field)', 'Need only some training on the jod due to their extensive amount of experiences');