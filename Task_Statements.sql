/*! START TRANSACTION */;
CREATE TABLE task_statements (
  code CHARACTER(10) NOT NULL,
  task_id DECIMAL(8,0) NOT NULL,
  task CHARACTER VARYING(1000) NOT NULL,
  holder_of_position DECIMAL(4,0),
  updated DATE NOT NULL,
  FOREIGN KEY (code) REFERENCES occupation_data(code));
/*! COMMIT */;
/*! START TRANSACTION */;

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-1011.00', 8826, 'Make and inforce policies to ensure the company functions properly to gain profit', '156', '2014-07-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-1011.00', 8830, 'Review and suggest changes to reports, recommenting the change', '62', '2014-07-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-1021.00', 20701, 'Make schedule, assign works', '62', '2015-07-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-2011.00', 3230, 'Assembling, organizating, and preparing for the advertising campaigns', '103', '2010-06-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-2011.00', 3241, 'Overlook the advertisement process, train the people, direct them what to do', '23', '2010-06-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-2022.00', 4, 'Determine price schedules and discount rates', '87', '2016-07-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-2031.00', 3249, 'Make the company poplular, increase their good reputation, by using logos and signs', '87', '2009-06-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-3031.01', 8857, 'Overlook the financial tasks', '30', '2012-07-01');

INSERT INTO task_statements (code, task_id, task, holder_of_position, updated) 
VALUES ('11-3031.01', 8867, 'Analyze the financial info from the past, present, and incoming to find pattern that will help the company improve', '30', '2012-07-01');