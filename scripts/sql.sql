CREATE TABLE COURSE
(
courseId int PRIMARY KEY,
courseName varchar(100),
duration int,
cost double,
elective varchar(50),
lecturerId int
);

CREATE TABLE STUDENT
(
studentNumber int PRIMARY KEY,
firstName varchar(50),
lastName varchar(50),
idNumber int,
yearOfStudy int,
isEnrolled BOOLEAN,
courseId int,
FOREIGN KEY(courseId) REFERENCES COURSE(courseId)
);



CREATE TABLE LECTURER
(
lecturerId int PRIMARY KEY,
title varchar(5),
lastName varchar(50),
courseId int,
FOREIGN KEY(courseId) REFERENCES COURSE(courseId)
);

INSERT INTO STUDENT VALUES(1, 'Riaz', 'Khan', 1234, 3, true, 1);
INSERT INTO STUDENT VALUES(2, 'Clayton', 'Petersen', 1234, 3, true, 1);
INSERT INTO STUDENT VALUES(3, 'Mohammed', 'Khan', 1234, 3, false, 1);

INSERT INTO COURSE VALUES(1, 'AppDev', 3, 30000, NULL, 1);
INSERT INTO COURSE VALUES(2, 'CommNet', 3, 30000, NULL, 1);
INSERT INTO COURSE VALUES(3, 'Multimedia', 3, 30000, NULL, 1);

INSERT INTO LECTURER VALUES(1, 'Mr', 'Khan', 1);
