/* Type of SQL : MySQL */
/* This script file creates the following tables:	*/
/* QUALIFICATIONS, COURSE, CANDIDATES, JOB_HISTORY, TRAINING_SESSIONS, */
/* COURSE_ENROLLMENT, FILLED_OPENINGS, QUALIFIED_CANDIDATES, PLACEMENT, */
/* SESSION_ENROLLMENT, OPENINGS, COMPANIES */

DROP DATABASE IF EXISTS TEC_COMPANY;
CREATE DATABASE TEC_COMPANY;
USE TEC_COMPANY;

CREATE TABLE IF NOT EXISTS QUALIFICATIONS(
Q_CODE  VARCHAR(30) PRIMARY KEY,
Q_DESC VARCHAR(256)
);

/* data for QUALIFICATIONS table*/
INSERT INTO QUALIFICATIONS VALUES ('SEC-45', 'Secretarial work; candidate must type at least 45 words per minute');	
INSERT INTO QUALIFICATIONS VALUES ('SEC-60', 'Secretarial work; candidate must type at least 60 words per minute');
INSERT INTO QUALIFICATIONS VALUES ('CLERK', 'General clerkin work');	
INSERT INTO QUALIFICATIONS VALUES ('PRG-PY', 'Programmer, Python');
INSERT INTO QUALIFICATIONS VALUES ('PRG-C+++', 'Programmer, C++');
INSERT INTO QUALIFICATIONS VALUES ('DBA-ORA', 'Database Administrator, Oracle');
INSERT INTO QUALIFICATIONS VALUES ('DBA-DB2', 'Database Administrator, IBM DB2');
INSERT INTO QUALIFICATIONS VALUES ('DBA-SQLSERV', 'Database Administrator, MS SQL Server');
INSERT INTO QUALIFICATIONS VALUES ('SYS-1', 'Systems Analyst, Level 1');
INSERT INTO QUALIFICATIONS VALUES ('SYS-2', 'Systems Analyst, Level 2');
INSERT INTO QUALIFICATIONS VALUES ('NW-CIS', 'Network Administrator, Cisco experience');
INSERT INTO QUALIFICATIONS VALUES ('WD-CF', 'Web Developer, ColdFusion');

/* made can_lname attribute a PK so it can be referenced as an FK in table job_history */
/* removed auto_increment contraint from PK; only attributes w/ int data types can have the constraint */
CREATE TABLE IF NOT EXISTS CANDIDATES(
CAN_NUM INT,
CAN_FNAME VARCHAR(256),
CAN_MNAME VARCHAR(256),
CAN_LNAME VARCHAR(256),
Q_CODE  VARCHAR(30),
PRIMARY KEY (CAN_NUM, CAN_LNAME),
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE),
JH_CODE INT
);
/* made can_lname an index bc it's not a unique value as a PK, also makes queries run faster. */
CREATE INDEX idx_can_lname ON CANDIDATES (CAN_LNAME);

CREATE TABLE IF NOT EXISTS COURSE(
CRS_CODE INT PRIMARY KEY AUTO_INCREMENT,
Q_CODE  VARCHAR(30),
CAN_NUM INT,
CRS_FEE INT,
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM)
);

CREATE TABLE IF NOT EXISTS JOB_HISTORY(
JH_CODE INT PRIMARY KEY AUTO_INCREMENT,
CAN_NUM INT,
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
CAN_LNAME VARCHAR(256),
FOREIGN KEY (CAN_LNAME) REFERENCES CANDIDATES (CAN_LNAME),
JH_START_DATE DATE,
JH_END_DATE DATE,
JH_HOURLY_PAY INT,
OPEN_CODE INT
);

CREATE TABLE IF NOT EXISTS TRAINING_SESSIONS(
TS_CODE INT PRIMARY KEY AUTO_INCREMENT,
CRS_CODE INT,
FOREIGN KEY (CRS_CODE) REFERENCES COURSE (CRS_CODE),
CAN_NUM INT,
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM)
);

/* dropped can_num and q_code PK; FK'S must refer to a PK in another table. */
CREATE TABLE IF NOT EXISTS QUALIFIED_CANIDATES(
CAN_NUM INT,
Q_CODE VARCHAR(30),
PRIMARY KEY (CAN_NUM, Q_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE)
);

/* dropped can_num PK; FK'S must refer to a PK in another table. */
CREATE TABLE IF NOT EXISTS COURSE_ENROLEMENT(
CAN_NUM INT,
CRS_CODE INT,
PRIMARY KEY (CAN_NUM, CRS_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (CRS_CODE) REFERENCES COURSE (CRS_CODE)
);

/* dropped can_num PK; FK'S must refer to a PK in another table. */
CREATE TABLE IF NOT EXISTS SESSION_ENROLEMENT(
CAN_NUM INT,
TS_CODE INT,
PRIMARY KEY (CAN_NUM, TS_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (TS_CODE) REFERENCES TRAINING_SESSIONS (TS_CODE)
);

/* dropped can_num and ts_code pk's; FK'S must refer to a PK in another table. */
/* corrected format for ts_code FK; replaced open_code w/ ts_code and referenced table training_sessions */
CREATE TABLE IF NOT EXISTS FILLED_OPENINGS(
CAN_NUM INT,
TS_CODE INT,
PRIMARY KEY (CAN_NUM, TS_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (TS_CODE) REFERENCES TRAINING_SESSIONS (TS_CODE)
);

/* dropped q_code pk; FK'S must refer to a PK in another table. */
CREATE TABLE IF NOT EXISTS OPENINGS(
OPEN_CODE INT AUTO_INCREMENT,
Q_CODE VARCHAR(30),
FOREIGN KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE),
CMP_CODE INT,
FOREIGN KEY (CMP_CODE) REFERENCES COMPANIES (CMP_CODE),
OPEN_START_DATE DATE,
OPEN_EST_END_DATE DATE,
OPEN_HOURLY_PAY INT,
PRIMARY KEY (OPEN_CODE, Q_CODE) 
);

CREATE TABLE IF NOT EXISTS PLACEMENT(
OPEN_CODE INT,
CAN_NUM INT,
JH_CODE INT,
PL_TOTAL_HOURS INT,
CMP_NAME INT,
FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE),
FOREIGN KEY (CAN_NUM) REFERENCES CANDIDATES (CAN_NUM),
FOREIGN KEY (CMP_NAME) REFERENCES COMPANIES (CMP_NAME)
);

CREATE TABLE IF NOT EXISTS COMPANIES(
CMP_CODE INT PRIMARY KEY AUTO_INCREMENT,
CMP_NAME VARCHAR(256),
OPEN_CODE INT,
FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE)
);

/* dropped open_code and cmp_code pk's; FK'S must refer to a PK in another table. */
CREATE TABLE IF NOT EXISTS COMPANY_OPENINGS(
OPEN_CODE INT,
CMP_CODE INT,
PRIMARY KEY (OPEN_CODE, CMP_CODE),
FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE),
FOREIGN KEY (CMP_CODE) REFERENCES COMPANIES (CMP_CODE)
);

ALTER TABLE CANDIDATES
ADD FOREIGN KEY (JH_CODE) REFERENCES JOB_HISTORY (JH_CODE);

ALTER TABLE CANDIDATES
ADD FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE);

ALTER TABLE QUALIFIED_CANDIDATES 
DROP PRIMARY KEY (Q_NUM),
DROP PRIMARY KEY (CAN_NUM);

ALTER TABLE COURSE_ENROLLMENT DROP PRIMARY KEY (CAN_NUM);

ALTER TABLE SESSION_ENROLLMENT DROP PRIMARY KEY (CAN_NUM);

ALTER TABLE JOB_HISTORY
ADD FOREIGN KEY (OPEN_CODE) REFERENCES OPENINGS (OPEN_CODE);

ALTER TABLE OPENINGS
ADD FOREIGN KEY (CMP_CODE) REFERENCES COMPANIES (CMP_CODE),
DROP PRIMARY KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE);

ALTER TABLE OPENINGS
DROP PRIMARY KEY (Q_CODE) REFERENCES QUALIFICATIONS (Q_CODE);

ALTER TABLE FILLED_OPENINGS
DROP PRIMARY KEY CAN_NUM,
DROP PRIMARY KEY TS_CODE;

ALTER TABLE COMPANY_OPENINGS
DROP PRIMARY KEY OPEN_CODE,
DROP PRIMARY KEY CMP_CODE;
