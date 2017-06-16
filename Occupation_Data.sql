/*! START TRANSACTION */;
CREATE TABLE occupation_data (
  code CHARACTER(10) NOT NULL,
  occupation_title CHARACTER VARYING(150) NOT NULL,
  occupation_description CHARACTER VARYING(1000) NOT NULL);
/*! COMMIT */;
/*! START TRANSACTION */;

INSERT INTO occupation_data (code, occupation_title, occupation_description) 
VALUES ('11-1011.00', 'Chief Executives', 'Help the employees in the company, make polies, provide the company the direction toward their goal');
INSERT INTO occupation_data (code, occupation_title, occupation_description) 
VALUES ('11-1021.00', 'General and Operations Managers', 'Overlook everyday operations, plan and propose policies on resources usage, manage and admins transaction between providers');
INSERT INTO occupation_data (code, occupation_title, occupation_description) 
VALUES ('11-2011.00', 'Advertising and Promotions Managers', 'Overlook advertismenting policies and programs to lure in customers');
INSERT INTO occupation_data (code, occupation_title, occupation_description) 
VALUES ('11-2022.00', 'Sales Managers', 'Overlook transaction actions, create goal, trains sales reps, analyze sales stats, determie customers references');
INSERT INTO occupation_data (code, occupation_title, occupation_description) 
VALUES ('11-2031.00', 'Public Relations and Fundraising Managers', 'Overlook tasksto create good name and popularity for the company to cature their customers');
INSERT INTO occupation_data (code, occupation_title, occupation_description) 
VALUES ('11-3031.01', 'Treasurers and Controllers', 'Overlooks the financial activities for the company');
