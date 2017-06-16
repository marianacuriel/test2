/*! START TRANSACTION */;
CREATE TABLE job_zones (
  code CHARACTER(10) NOT NULL,
  job_zone DECIMAL(1,0) NOT NULL,
  date_updated DATE NOT NULL,
  FOREIGN KEY (code) REFERENCES occupation_data(code),
  FOREIGN KEY (job_zone) REFERENCES job_zone_reference(job_zone));
/*! COMMIT */;
/*! START TRANSACTION */;

INSERT INTO job_zones (code, job_zone, date_updated) 
VALUES ('11-1011.00', 5, '2014-07-01');
INSERT INTO job_zones (code, job_zone, date_updated)
VALUES ('11-1021.00', 4, '2015-07-01');
INSERT INTO job_zones (code, job_zone, date_updated)
VALUES ('11-2011.00', 4, '2010-06-01');
INSERT INTO job_zones (code, job_zone, date_updated)
VALUES ('11-2022.00', 4, '2016-07-01');
INSERT INTO job_zones (code, job_zone, date_updated) 
VALUES ('11-2031.00', 4, '2009-06-01');
INSERT INTO job_zones (code, job_zone, date_updated) 
VALUES ('11-3031.01', 5, '2012-07-01');
