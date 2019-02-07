CREATE TABLE courseComments(
	course_id VARCHAR(30) NOT NULL,
	commented_by_id VARCHAR(30) NOT NULL,
	time_of_comm  DATETIME NOT NULL,
	comment VARCHAR(30) NOT NULL,
	PRIMARY KEY(course_id),
	FOREIGN KEY(commented_by_id) REFERENCES student(student_id),
	FOREIGN KEY(course_id) REFERENCES course(course_id)
	);
CREATE TABLE user(
	user_id VARCHAR(30) NOT NULL,
	student_id VARCHAR(30) NOT NULL REFERENCES student(student_id), 
	user_name VARCHAR(30),
	password VARCHAR(30) NOT NULL,
	PRIMARY KEY(user_id)
);
CREATE TABLE userInformation(
	student_id VARCHAR(30) NOT NULL,
	name VARCHAR(30) NOT NULL,
	years INTEGER NOT NULL,
	major VARCHAR(30) NOT NULL,
	FOREIGN KEY(student_id) REFERENCES student(student_id)
);
CREATE TABLE  course_instructor(
	course_id VARCHAR(30) NOT NULL,
	instructor_id VARCHAR(30) NOT NULL,
	primary key(course_id, instructor_id),
	foreign key(course_id) references course(course_id)
);
CREATE TABLE course_student(
	course_id VARCHAR(30) NOT NULL,
	student_id VARCHAR(30) NOT NULL,
	primary key(course_id, student_id),
	foreign key(course_id) references course(course_id),
	foreign key(student_id) references student(student_id)
);


CREATE TABLE student(
	student_id VARCHAR(30) NOT NULL,
    PRIMARY KEY(student_id)
);
CREATE TABLE studentComments(
    student_id VARCHAR(30) NOT NULL,
    commented_by_id VARCHAR(30) NOT NULL,
	comment VARCHAR(30) NOT NULL,
	time_of_comm  DATETIME NOT NULL,
	PRIMARY KEY(student_id, commented_by_id),
	FOREIGN KEY(student_id) REFERENCES student(student_id),
	FOREIGN KEY(commented_by_id) REFERENCES student(student_id)
);
CREATE TABLE studentRatings(
  student_id VARCHAR(30) NOT NULL,	
  rated_by_id VARCHAR(30) NOT NULL,
  score INTEGER NOT NULL,
  PRIMARY KEY(student_id, rated_by_id),
  FOREIGN KEY(student_id) REFERENCES student(student_id),
  FOREIGN KEY(rated_by_id) REFERENCES student(student_id)
);
CREATE TABLE sessionTime(
    course_id VARCHAR(30) NOT NULL,
	year INTEGER NOT NULL,
	begin_time DATE NOT NULL,
	end_time   DATE NOT NULL,
	semester VARCHAR(30) NOT NULL,
	PRIMARY KEY(year, begin_time),
	FOREIGN KEY(course_id) REFERENCES course(course_id)
);

CREATE TABLE course(
	course_id VARCHAR(30) NOT NULL,
	name VARCHAR(30) NOT NULL,
	location varchar(30) NOT NULL,
	time_start DATETIME,
	time_end DATETIME,
	PRIMARY KEY(course_id)
);




CREATE TABLE courseRatings(
	course_id VARCHAR(30) NOT NULL,
	rated_by_id VARCHAR(30) NOT NULL,
	score INTEGER NOT NULL,
	comment VARCHAR(30) NOT NULL,
	PRIMARY KEY(course_id),
	FOREIGN KEY(rated_by_id) REFERENCES student(student_id),
	FOREIGN KEY(course_id) REFERENCES course(course_id)
	);


CREATE TABLE instructor(
	instructor_id VARCHAR(30) NOT NULL,
	name VARCHAR(30) NOT NULL,
	department VARCHAR(30) NOT NULL,
	PRIMARY KEY(instructor_id)
);

CREATE TABLE instructorComments(
	instructor_id VARCHAR(30) NOT NULL,
	commented_by_id VARCHAR(30) NOT NULL,
	time_of_comm  DATETIME NOT NULL,
    PRIMARY KEY(instructor_id),
    FOREIGN KEY(commented_by_id) REFERENCES student(student_id),
    FOREIGN KEY(instructor_id) REFERENCES instructor(instructor_id)

);
CREATE TABLE instructorRatings(
	instructor_id VARCHAR(30) NOT NULL,
	rated_by_id VARCHAR(30) NOT NULL,
	score INTEGER NOT NULL,
    PRIMARY KEY(instructor_id),
    FOREIGN KEY(rated_by_id) REFERENCES student(student_id),
    FOREIGN KEY(instructor_id) REFERENCES instructor(instructor_id)
);

CREATE TABLE studentGroup(
    course_id VARCHAR(30) NOT NULL,
	group_name VARCHAR(30) NOT NULL,
    project VARCHAR(30) NOT NULL,
    members VARCHAR(30) NOT NULL,
    PRIMARY KEY(group_name),
    FOREIGN KEY(course_id) REFERENCES course(course_id)
);


