DROP DATABASE mdc;
CREATE DATABASE mdc;
USE mdc;

CREATE TABLE user_r(
	u_id INT IDENTITY(1,1) NOT NULL,
	image VARCHAR(MAX) NOT NULL,
	user_name  VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	address VARCHAR(50) NOT NULL,
	password VARCHAR(15) NOT NULL,
	status VARCHAR(15) NOT NULL,
	CONSTRAINT user_PK PRIMARY KEY(u_id)
);

CREATE TABLE message(
	m_id INT IDENTITY(1,1) NOT NULL,
	u_id INT NOT NULL,
	incoming_msg_id INT NOT NULL,
	outgoing_msg_id INT NOT NULL,
	msg VARCHAR(200) NOT NULL,
	CONSTRAINT message_PK PRIMARY KEY(m_id),
	CONSTRAINT message_FK FOREIGN KEY(u_id) REFERENCES user_r
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE seeker(
	s_ID INT IDENTITY(1,1) NOT NULL,
	u_id INT NOT NULL,
	dob DATE NOT NULL,
	CONSTRAINT seeker_PK PRIMARY KEY(s_ID),
	CONSTRAINT seeker_FK FOREIGN KEY(u_id) REFERENCES user_r
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE seeker_Telephone(
	skeer_T_ID INT IDENTITY(1,1) NOT NULL,
	s_ID INT NOT NULL,
	telephone VARCHAR(11) NOT NULL,
	CONSTRAINT seeker_Telephone_PK PRIMARY KEY(skeer_T_ID),
	CONSTRAINT seeker_Telephone_FK FOREIGN KEY(s_ID) REFERENCES seeker
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE admin(
	ad_id INT IDENTITY(1,1) NOT NULL,
	u_id INT NOT NULL,
	CONSTRAINT admin_PK PRIMARY KEY(ad_id),
	CONSTRAINT admin_FK FOREIGN KEY(u_id) REFERENCES user_r
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE provider(
	p_ID INT IDENTITY(1,1) NOT NULL,
	u_id INT NOT NULL,
	CONSTRAINT provider_PK PRIMARY KEY(p_ID),
	CONSTRAINT provider_FK FOREIGN KEY(u_id) REFERENCES user_r
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE provider_Telephone(
	provider_T_ID INT IDENTITY(1,1) NOT NULL,
	p_ID INT NOT NULL,
	telephone VARCHAR(11) NOT NULL,
	CONSTRAINT provider_Telephone_PK PRIMARY KEY(provider_T_ID),
	CONSTRAINT provider_Telephone_FK FOREIGN KEY(p_ID) REFERENCES provider
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE company(
	company_ID INT IDENTITY(1,1) NOT NULL,
	p_ID INT NOT NULL,
	image VARCHAR(MAX) NOT NULL,
	company_name  VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	web_url VARCHAR(100),
	address VARCHAR(200) NOT NULL,
	description VARCHAR(MAX) NOT NULL,
	status VARCHAR(15) NOT NULL,
	CONSTRAINT company_PK PRIMARY KEY(company_ID),
	CONSTRAINT company_FK FOREIGN KEY(p_ID) REFERENCES provider
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE company_Telephone(
	company_T_ID INT IDENTITY(1,1) NOT NULL,
	company_ID INT NOT NULL,
	telephone VARCHAR(11) NOT NULL,
	CONSTRAINT company_Telephone_PK PRIMARY KEY(company_T_ID),
	CONSTRAINT company_Telephone_FK FOREIGN KEY(company_ID) REFERENCES company
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE main_category(
	category_ID INT IDENTITY(1,1) NOT NULL,
	category_name VARCHAR(50) NOT NULL,
	CONSTRAINT main_category_PK PRIMARY KEY(category_ID)
);

CREATE TABLE company_details(
	comD_ID INT IDENTITY(1,1) NOT NULL,
	company_ID INT NOT NULL,
	category_ID INT NOT NULL,
	date DATE,
	CONSTRAINT company_details_PK PRIMARY KEY(comD_ID),
	CONSTRAINT company_details_FK_1 FOREIGN KEY(company_ID) REFERENCES company
	ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT company_details_FK_2 FOREIGN KEY(category_ID) REFERENCES main_category
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE main_rate(
	mRate_Id INT IDENTITY(1,1) NOT NULL,
	category_ID INT NOT NULL,
	count INT NOT NULL,
	CONSTRAINT main_rate_PK PRIMARY KEY(mRate_Id),
	CONSTRAINT main_rate_FK FOREIGN KEY(category_ID) REFERENCES main_category
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE sub_category (
	sub_category_ID INT IDENTITY(1,1) NOT NULL,
	category_name VARCHAR(50) NOT NULL,
	category_ID INT NOT NULL,
	CONSTRAINT sub_category_PK PRIMARY KEY(sub_category_ID),
	CONSTRAINT sub_category_FK FOREIGN KEY(category_ID) REFERENCES main_category
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE sub_rate(
	subRate_id INT IDENTITY(1,1) NOT NULL,
	sub_category_ID INT NOT NULL,
	count INT NOT NULL,
	CONSTRAINT sub_rate_PK PRIMARY KEY(subRate_id),
	CONSTRAINT sub_rate_FK FOREIGN KEY(sub_category_ID) REFERENCES sub_category
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE job(
	job_ID INT IDENTITY(1,1) NOT NULL,
	category_ID INT NOT NULL,
	sub_category_ID INT NOT NULL,
	j_name VARCHAR(100) NOT NULL,
	img VARCHAR(MAX) NOT NULL,
	description VARCHAR(MAX) NOT NULL,
	price DECIMAL(10,2) NOT NULL,
	status VARCHAR(10) NOT NULL,
	CONSTRAINT job_PK PRIMARY KEY(job_ID),
	CONSTRAINT job_FK_1 FOREIGN KEY(category_ID) REFERENCES main_category
	ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT job_FK_2 FOREIGN KEY(sub_category_ID) REFERENCES sub_category
);

CREATE TABLE payment(
	payment_id INT IDENTITY(1,1) NOT NULL,
	job_ID INT NOT NULL,
	CONSTRAINT payment_PK PRIMARY KEY(payment_id),
	CONSTRAINT payment_FK FOREIGN KEY(job_ID) REFERENCES job
	ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE payment_Type(
	payment_type_id INT IDENTITY(1,1) NOT NULL,
	payment_id INT NOT NULL,
	type VARCHAR(50) NOT NULL,
	CONSTRAINT payment_Type_PK PRIMARY KEY(payment_type_id),
	CONSTRAINT payment_Type_FK FOREIGN KEY(payment_id) REFERENCES payment
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE salary(
	salary_id INT IDENTITY(1,1) NOT NULL,
	amount DECIMAL(10,2) NOT NULL,
	CONSTRAINT salary_PK PRIMARY KEY(salary_id)
);


CREATE TABLE payment_Details(
	p_deID INT IDENTITY(1,1) NOT NULL,
	payment_id INT NOT NULL,
	salary_id INT NOT NULL,
	card_number VARCHAR(17),
	ex_date VARCHAR(10),
	s_code VARCHAR(4),
	date DATE,
	status VARCHAR(10) NOT NULL,
	CONSTRAINT payment_Details_PK PRIMARY KEY(p_deID),
	CONSTRAINT payment_Details_FK_1 FOREIGN KEY(payment_id) REFERENCES payment
	ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT payment_Details_FK_2 FOREIGN KEY(salary_id) REFERENCES salary
	ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE job_seeker_details(
	js_details_ID INT IDENTITY(1,1) NOT NULL,
	job_ID INT NOT NULL,
	s_ID INT NOT NULL,
	apply_date DATE,
	status VARCHAR(10) NOT NULL,
	CONSTRAINT job_seeker_details_PK PRIMARY KEY(js_details_ID),
	CONSTRAINT job_seeker_details_FK_1 FOREIGN KEY(job_ID) REFERENCES job
	ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT job_seeker_details_FK_2 FOREIGN KEY(s_ID) REFERENCES seeker
	ON UPDATE CASCADE ON DELETE CASCADE
);


/* SAMPLE DATA OF USER Table */

INSERT INTO user_r (image,user_name,email,first_name,last_name,address,password,status) 
VALUES('artworks-000072263734-b4172l-t500x500.jpg','madhush_99','madhushaPrasad21@gmail.com','Madhusha','Prasad','Kalutara','@4545Ma','online');

INSERT INTO user_r (image,user_name,email,first_name,last_name,address,password,status) 
VALUES('artworks-000072263734-b4172l-t500x500.jpg','Prasad_99','prasadSilva21@gmail.com','Prasad','Silva','Kalutara','@4545Ma','offline');

INSERT INTO user_r (image,user_name,email,first_name,last_name,address,password,status) 
VALUES('artworks-000072263734-b4172l-t500x500.jpg','Dimuth','dimuthDimuth9@gmail.com','Meththaka','Dimuth','Mathugama','@4545Ma','offline');

INSERT INTO user_r (image,user_name,email,first_name,last_name,address,password,status) 
VALUES('artworks-000072263734-b4172l-t500x500.jpg','Dakshith','abiNissanka@gmail.com','Abi','Nissanka','Gampaha','@4545Ma','Online');

INSERT INTO user_r (image,user_name,email,first_name,last_name,address,password,status) 
VALUES('artworks-000072263734-b4172l-t500x500.jpg','Chalani','chalani@gmail.com','Chalani','amali','Gampaha','@4545Ma','Online');

/* SAMPLE DATA OF Message Table */

INSERT INTO message (u_id,incoming_msg_id,outgoing_msg_id,msg) 
VALUES(1,2,1,'hi');

INSERT INTO message (u_id,incoming_msg_id,outgoing_msg_id,msg) 
VALUES(2,1,2,'hi There!, Whats up?');

INSERT INTO message (u_id,incoming_msg_id,outgoing_msg_id,msg) 
VALUES(3,1,3,'Hello Friend Whats going on?');

INSERT INTO message (u_id,incoming_msg_id,outgoing_msg_id,msg) 
VALUES(4,2,4,'Do you do your home word today bro?');

INSERT INTO message (u_id,incoming_msg_id,outgoing_msg_id,msg) 
VALUES(2,4,2,'Yes I did bro, Do You Want it?');


/* SAMPLE DATA OF seeker Table */

INSERT INTO seeker (u_id,dob) 
VALUES(1,'1999-04-13');

INSERT INTO seeker (u_id,dob) 
VALUES(2,'1999-06-18');

INSERT INTO seeker (u_id,dob) 
VALUES(3,'2000-09-27');

INSERT INTO seeker (u_id,dob) 
VALUES(3,'2000-02-06');

INSERT INTO seeker (u_id,dob) 
VALUES(3,'2002-08-16');


/* SAMPLE DATA OF Seeker Telephone Table */

INSERT INTO seeker_Telephone (s_ID,telephone) 
VALUES(1,'0764727839');

INSERT INTO seeker_Telephone (s_ID,telephone) 
VALUES(2,'0764724539');

INSERT INTO seeker_Telephone (s_ID,telephone) 
VALUES(2,'0755472453');

INSERT INTO seeker_Telephone (s_ID,telephone) 
VALUES(3,'0715478945');

INSERT INTO seeker_Telephone (s_ID,telephone) 
VALUES(1,'0727847815');

/* SAMPLE DATA OF admin Table */
INSERT INTO admin (u_id) 
VALUES(1);

INSERT INTO admin (u_id) 
VALUES(2);

INSERT INTO admin (u_id) 
VALUES(3);

INSERT INTO admin (u_id) 
VALUES(3);

INSERT INTO admin (u_id) 
VALUES(3);


/* SAMPLE DATA OF provider Table */

INSERT INTO provider (u_id) 
VALUES(1);

INSERT INTO provider (u_id) 
VALUES(2);

INSERT INTO provider (u_id) 
VALUES(3);

INSERT INTO provider (u_id) 
VALUES(3);

INSERT INTO provider (u_id) 
VALUES(3);

/* SAMPLE DATA OF provider_Telephone Table */
INSERT INTO provider_Telephone (p_ID,telephone) 
VALUES(1,'0764267839');

INSERT INTO provider_Telephone (p_ID,telephone) 
VALUES(2,'0767824539');

INSERT INTO provider_Telephone (p_ID,telephone) 
VALUES(2,'0755472363');

INSERT INTO provider_Telephone (p_ID,telephone) 
VALUES(3,'0715478365');

INSERT INTO provider_Telephone (p_ID,telephone) 
VALUES(1,'0727847314');

/* SAMPLE DATA OF Company Table */

INSERT INTO company (p_ID,image,company_name,email,web_url,address,description,status) 
VALUES(1,'artworks-000072263734-b4172l-t500x500.jpg','NEOMINDS','neominds@gmail.com','neominds.com','piliyandala','Technology Company','AVAILABLE');

INSERT INTO company (p_ID,image,company_name,email,web_url,address,description,status) 
VALUES(2,'artworks-000072263734-b4172l-t500x500.jpg','Thirdfort','Thirdfort@gmail.com','Thirdfort.com','UK','Thirdfort is on a mission to become the new standard in legal security. We use tech, design and data to dramatically reduce risk for lawyers during client interactions and make life much easier for clients going through big moments.','AVAILABLE');

INSERT INTO company (p_ID,image,company_name,email,web_url,address,description,status) 
VALUES(2,'artworks-000072263734-b4172l-t500x500.jpg','Abans Group','Abans_Group@gmail.com','Abans_Group.com','Kalutara','Founded in 1968 by Aban Pestonjee, Abans Group is a leading conglomerate that offers targeted solutions ranging from real estate and engineering to retail, finance and IT Solutions, which aim to enhance the lives of Sri Lankan citizens.','CLOSE');

INSERT INTO company (p_ID,image,company_name,email,web_url,address,description,status) 
VALUES(2,'artworks-000072263734-b4172l-t500x500.jpg','Sentura Technologies','SenturaTechnologies@gmail.com','senturatechnologies.com','baruwala','Technology Company','AVAILABLE');

INSERT INTO company (p_ID,image,company_name,email,web_url,address,description,status) 
VALUES(2,'artworks-000072263734-b4172l-t500x500.jpg','codeGen','codeGen.com','codeGen.com','Moratuwa','Technology Company','AVAILABLE');

/* SAMPLE DATA OF company_Telephone Table */
INSERT INTO company_Telephone (company_ID,telephone) 
VALUES(1,'0764267839');

INSERT INTO company_Telephone (company_ID,telephone) 
VALUES(2,'0767824539');

INSERT INTO company_Telephone (company_ID,telephone) 
VALUES(2,'0755472363');

INSERT INTO company_Telephone (company_ID,telephone) 
VALUES(3,'0715478365');

INSERT INTO company_Telephone (company_ID,telephone) 
VALUES(1,'0727847314');

/* SAMPLE DATA OF main_category Table */

INSERT INTO main_category (category_name) 
VALUES('Desiging');

INSERT INTO main_category (category_name) 
VALUES('Web developing');

INSERT INTO main_category (category_name) 
VALUES('UI/UX');

INSERT INTO main_category (category_name) 
VALUES('business');

INSERT INTO main_category (category_name) 
VALUES('Video Create');

/* SAMPLE DATA OF company_details Table */

INSERT INTO company_details (company_ID,category_ID,date) 
VALUES(1,1,'1999-04-13');

INSERT INTO company_details (company_ID,category_ID,date) 
VALUES(1,2,'1999-04-13');

INSERT INTO company_details (company_ID,category_ID,date) 
VALUES(2,2,'1999-04-13');

INSERT INTO company_details (company_ID,category_ID,date) 
VALUES(3,3,'1999-04-13');

INSERT INTO company_details (company_ID,category_ID,date) 
VALUES(1,3,'1999-04-13');

/* SAMPLE DATA OF main_rate Table */

INSERT INTO main_rate (category_ID,count) 
VALUES(1,0);

INSERT INTO main_rate (category_ID,count) 
VALUES(2,0);

INSERT INTO main_rate (category_ID,count) 
VALUES(3,0);

INSERT INTO main_rate (category_ID,count) 
VALUES(4,0);

INSERT INTO main_rate (category_ID,count) 
VALUES(5,0);

UPDATE main_rate SET count = 2  WHERE mRate_Id = 1;

UPDATE main_rate SET count = 10  WHERE mRate_Id = 2;

UPDATE main_rate SET count = 20  WHERE mRate_Id = 3;

UPDATE main_rate SET count = 1  WHERE mRate_Id = 4;

UPDATE main_rate SET count = 50  WHERE mRate_Id = 5;

/* SAMPLE DATA OF sub_category Table */
INSERT INTO sub_category (category_name,category_ID) 
VALUES('flyer Designing',1);

INSERT INTO sub_category (category_name,category_ID) 
VALUES('video Edition',2);

INSERT INTO sub_category (category_name,category_ID) 
VALUES('web backend',3);

INSERT INTO sub_category (category_name,category_ID) 
VALUES('web frontend',4);

INSERT INTO sub_category (category_name,category_ID) 
VALUES('poster Designing',5);

/* SAMPLE DATA OF job Table */

INSERT INTO job (category_ID,sub_category_ID,j_name,img,description,price,status) 
VALUES(1,1,'Web Designer','artworks-000072263734-b4172l-t500x500.jpg','Web designers plan, create and code internet sites and web pages, many of which combine text with sounds, pictures, graphics and video clips. A web designer is responsible for creating the design and layout of a website or web pages.','10000.50','AVAILABLE');

INSERT INTO job (category_ID,sub_category_ID,j_name,img,description,price,status) 
VALUES(1,2,'Project Manager','artworks-000072263734-b4172l-t500x500.jpg','A Project Manager is responsible for planning, overseeing and leading projects from ideation through to completion.','25000.50','AVAILABLE');

INSERT INTO job (category_ID,sub_category_ID,j_name,img,description,price,status) 
VALUES(1,3,'Project Manager','artworks-000072263734-b4172l-t500x500.jpg','A Project Manager is responsible for planning, overseeing and leading projects from ideation through to completion.','25000.50','AVAILABLE');

INSERT INTO job (category_ID,sub_category_ID,j_name,img,description,price,status) 
VALUES(1,4,'Project Manager','artworks-000072263734-b4172l-t500x500.jpg','A Project Manager is responsible for planning, overseeing and leading projects from ideation through to completion.','25000.50','AVAILABLE');

INSERT INTO job (category_ID,sub_category_ID,j_name,img,description,price,status) 
VALUES(1,2,'Project Manager','artworks-000072263734-b4172l-t500x500.jpg','A Project Manager is responsible for planning, overseeing and leading projects from ideation through to completion.','25000.50','AVAILABLE');

/* SAMPLE DATA OF payment Table */

INSERT INTO payment (job_ID) 
VALUES(1);

INSERT INTO payment (job_ID) 
VALUES(2);

INSERT INTO payment (job_ID) 
VALUES(3);

INSERT INTO payment (job_ID) 
VALUES(4);

INSERT INTO payment (job_ID) 
VALUES(5);

/* SAMPLE DATA OF payment_Type Table */

INSERT INTO payment_Type (payment_id,type) 
VALUES(1,'VISA');

INSERT INTO payment_Type (payment_id,type) 
VALUES(1,'MASTER');

INSERT INTO payment_Type (payment_id,type) 
VALUES(1,'PAYPAL');

/* SAMPLE DATA OF salary Table */

INSERT INTO salary (amount) 
VALUES(15500.50);

INSERT INTO salary (amount) 
VALUES(25500.50);

INSERT INTO salary (amount) 
VALUES(55500.50);

INSERT INTO salary (amount) 
VALUES(5500.50);

/* SAMPLE DATA OF payment_Details Table */

INSERT INTO payment_Details (payment_id,salary_id,card_number,ex_date,s_code,date,status)
VALUES(1,1,4564123456987361,'02-24','425','2020-05-15','PENDING');

INSERT INTO payment_Details (payment_id,salary_id,card_number,ex_date,s_code,date,status)
VALUES(2,2,4545785456982036,'02-26','225','2020-05-15','PENDING');

INSERT INTO payment_Details (payment_id,salary_id,card_number,ex_date,s_code,date,status)
VALUES(2,2,4545785456982036,'02-21','065','2020-07-25','PENDING');

INSERT INTO payment_Details (payment_id,salary_id,card_number,ex_date,s_code,date,status)
VALUES(2,2,4545785456982036,'02-23','375','2020-07-25','PENDING');

INSERT INTO payment_Details (payment_id,salary_id,card_number,ex_date,s_code,date,status)
VALUES(2,2,4545785456982036,'02-23','075','2020-01-17','PENDING');

/* SAMPLE DATA OF job_seeker_details Table */

INSERT INTO job_seeker_details (job_ID,s_ID,apply_date,status)
VALUES(1,1,'2020-05-15','APPROVE');

INSERT INTO job_seeker_details (job_ID,s_ID,apply_date,status)
VALUES(2,2,'2020-11-15','REJECED');

INSERT INTO job_seeker_details (job_ID,s_ID,apply_date,status)
VALUES(3,3,'2020-6-15','APPROVE');

INSERT INTO job_seeker_details (job_ID,s_ID,apply_date,status)
VALUES(4,4,'2020-1-10','REJECED');

INSERT INTO job_seeker_details (job_ID,s_ID,apply_date,status)
VALUES(5,5,'2020-3-21','REJECED');



