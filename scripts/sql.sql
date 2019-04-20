CREATE TABLE COURSE
(
courseId int PRIMARY KEY,
courseName varchar(100),
duration int,
cost double,
lecturerId int
);

CREATE TABLE ELECTIVE
(
electiveId int PRIMARY KEY,
electiveName varchar(50),
duration varchar(50),
lecturerId int,
FOREIGN KEY(lecturerId) REFERENCES LECTURER(lecturerId)
);

CREATE TABLE STUDENT
(
studentNumber int PRIMARY KEY,
firstName varchar(50),
lastName varchar(50),
idNumber int,
yearOfStudy int,
isEnrolled BOOLEAN,
electiveId int,
courseId int,
FOREIGN KEY(courseId) REFERENCES COURSE(courseId),
FOREIGN KEY(electiveId) REFERENCES ELECTIVE(electiveId)
);



CREATE TABLE LECTURER
(
lecturerId int PRIMARY KEY,
title varchar(5),
lastName varchar(50),
courseId int,
FOREIGN KEY(courseId) REFERENCES COURSE(courseId)
);

INSERT INTO COURSE VALUES(1, 'AppDev', 3, 30000, 1);
INSERT INTO COURSE VALUES(2, 'CommNet', 3, 30000, 1);
INSERT INTO COURSE VALUES(3, 'Multimedia', 3, 30000, 1);

INSERT INTO STUDENT VALUES(1, 'Riaz', 'Khan', 1234, 3, true, NULL, 1);
INSERT INTO STUDENT VALUES(2, 'Clayton', 'Petersen', 1234, 3, true, NULL, 1);
INSERT INTO STUDENT VALUES(3, 'Mohammed', 'Khan', 1234, 3, true, NULL, 1);



INSERT INTO LECTURER VALUES(1, 'Mr', 'Khan', 1);

INSERT INTO ELECTIVE VALUES(1, "Functional Programming", "Semester", 1);
INSERT INTO ELECTIVE VALUES(2, "Software Architecture", "Semester", 1);
INSERT INTO ELECTIVE VALUES(3, "A Introduction to Game Development and Design", "Semester", 1);
INSERT INTO ELECTIVE VALUES(4, "Intro to Cryptography", "Semester", 1);
INSERT INTO ELECTIVE VALUES(5, "Web Frameworks", "Semester", 1);
INSERT INTO ELECTIVE VALUES(6, "Concurrency and Parallel Programming", "Semester", 1);
