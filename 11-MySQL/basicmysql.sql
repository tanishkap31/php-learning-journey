-- SQL
-- DDL,DQL,DML,DCL,TCL

-- DQL= Data Query Language: to print
select "Tanishka"; 
select 3+6;
select 3-6;
select 3*6;
select 3/6;
select 3%6;
#variables
set @variable_name = "Mysql";
select @variable_name;
set @Company_name="Anudip Foundation";
set @Employee_name=" Web Developer";
set @Salary=35000;

select @Company_name;
select @Employee_name;
select @Salary;

-- DDL= Data Define Language :structure
# 1]create: to create db,table,user
Create Database SkillSwap;

# to access a database
use Skillswap;

create table UserSkill(
	SID int,
    Skill varchar(50),
	SkillLevel VARCHAR(30),
    Experience INT
);

create table UserInformation(
	UID int,
    Name varchar(100),
    Contact varchar(30),
	Email VARCHAR(100),
    Address VARCHAR(200),
    Gender VARCHAR(20),
    DOB Date
);

#describe the table
desc UserSkill;
desc UserInformation;

# alter: to make any changes on the column
alter table UserSkill Add column SkillName varchar(100);
alter table UserSkill Add column UID int After SID;    -- change the position

#to change the data type /constarint of  a column
Alter table UserSkill Modify column SkillName text;

#to change the Name of Column
Alter table UserInformation Rename Column Name to UserInfo;

#Change - To change name and data type of a column
Alter table UserInformation change Contact_Id ContactNo  INT;

#dropn- to drop column
Alter table UserSkill drop column UID;
Alter table UserSkill drop column SkillName;
Alter table UserInformation drop column UserInfo;

#Drop :Permently removes the structure of db/table

drop database databasename;
drop table tablename;

#truncate: to remove all the rows(data)
truncate table tableName;

#to rename table 
rename table UserInformation to UserInfo;
desc UserInfo;

#DML: Data Manipulation Language
insert into UserSkill(SID,Skill,SkillLevel,Experience) value(01,"PHP","Medium","2");
insert into UserSkill value(02,"C#","Medium","3");
insert into UserSkill value(03,"C++","Avrage","6");
insert into UserSkill value(04,"Python","intermediate","1");
insert into UserSkill value(05,"Java","Medium","4");


insert into UserSkill values(06,"JQuery","Medium","4"),
(07,"Ai","Medium","2");


select * from UserSkill;

#Primary Key -Auto_Increment
alter table UserSkill modify SID INT primary key auto_increment;
insert into UserSkill(Skill,SkillLevel,Experience) value("PHP1","Medium","2");

#Update:to update a value from a row
update UserSkill  set Skill="Laravel", SkillLevel="Avrage" where SID=08;

#Delete: Delete a row(Data)
delete from UserSkill where SID=06;


#DCL: data control language(for giving and taking access to/form user)
create user 'tan@localhost' identified by 'tab@123';
