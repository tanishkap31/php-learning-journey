Create Database SkillSwap1;
use SkillSwap1;

Create table Users(
	User_ID int primary key auto_increment,
    Name varchar(100),
    Email varchar(100) unique,
    Password varchar(100)
);
Create table Skills(
	Skill_ID int primary key auto_increment,
    Name varchar(100),
    Description varchar(500)
);
Create table User_Skill(
	ID int primary key auto_increment,
    User_ID int,
    Skill_ID int,
    Skill_type ENUM('Teacher','Learner')
    
   --  FOREIGN KEY (User_ID) REFERENCES Users(User_ID),
--     FOREIGN KEY (Skill_ID) REFERENCES Skills(Skill_ID)
);
Create table Bookings(
	ID int primary key auto_increment,
    Lerner_ID int,
    Teacher_ID int,
    Skill_ID int,
    Status varchar(20) default'Pending'
    
--     FOREIGN KEY (Learner_ID) REFERENCES Users(User_ID),
--     FOREIGN KEY (Teacher_ID) REFERENCES Users(User_ID),
--     FOREIGN KEY (Skill_ID) REFERENCES Skills(Skill_ID)
    
);
Create table Messages(
	ID int primary key auto_increment,
    Sender_ID int,
    Receiver_ID int,
    Message Text
    
-- 	FOREIGN KEY (Sender_ID) REFERENCES Users(User_ID),
--     FOREIGN KEY (Receiver_ID) REFERENCES Users(User_ID)
);
Create table Reviews(
	ID int primary key auto_increment,
    Booking_ID int,
    Receiver_ID int,
    Rating int,
    Comment Text
    
-- 	FOREIGN KEY (Booking_ID) REFERENCES Bookings(ID),
--     FOREIGN KEY (Receiver_ID) REFERENCES Users(User_ID)
);

USE SkillSwap1;

-- 1. Users
INSERT INTO Users (Name, Email, Password) VALUES
('Tanishka', 'tanishka@gmail.com', 'pass123'),
('Jasmina', 'Jas@gmail.com', 'pass456'),
('Roshni', 'rosh@gmail.com', 'pass789'),
('Shreya', 'shreya@gmail.com', 'pass101'),
('Sneha', 'sneha@gmail.com', 'pass202');

-- 2. Skills
INSERT INTO Skills (Name, Description) VALUES
('PHP', 'Server-side web development'),
('MySQL', 'Database management'),
('Python', 'Programming and automation'),
('HTML', 'Web page structure'),
('JavaScript', 'Interactive web development');

-- 3. User_Skill
INSERT INTO User_Skill (User_ID, Skill_ID, Skill_type) VALUES
(1, 1, 'Teacher'),
(2, 2, 'Teacher'),
(3, 3, 'Learner'),
(4, 4, 'Teacher'),
(5, 5, 'Learner');

-- 4. Bookings
INSERT INTO Bookings (Lerner_ID, Teacher_ID, Skill_ID, Status) VALUES
(3, 1, 1, 'Pending'),
(5, 2, 2, 'Confirmed'),
(1, 4, 4, 'Completed'),
(2, 1, 1, 'Pending'),
(3, 4, 4, 'Completed');

-- 5. Messages
INSERT INTO Messages (Sender_ID, Receiver_ID, Message) VALUES
(1, 3, 'Hello, I can teach PHP.'),
(3, 1, 'I want to learn PHP.'),
(2, 5, 'I can help you with MySQL.'),
(5, 2, 'Thank you for your help.'),
(4, 1, 'Can we schedule a session?');

-- 6. Reviews
INSERT INTO Reviews (Booking_ID, Receiver_ID, Rating, Comment) VALUES
(3, 4, 5, 'Excellent teaching.'),
(5, 4, 4, 'Very helpful session.'),
(2, 2, 5, 'Great explanation.'),
(1, 1, 4, 'Good learning experience.'),
(4, 1, 5, 'Very clear explanation.');

desc Users;
desc Skills;
desc User_Skill;
desc Bookings;
desc Messages;
desc Reviews;

Select * From Users;
Select * From Skills;
Select * From User_Skill;
Select * From Bookings;
Select * From Messages;
Select * From Reviews;