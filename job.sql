SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `application_master` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 1, 1, 'Call Latter Send', 'Invited on 21-Jan-2023.'),
(2, 2, 2, 'Call Latter Send', 'You are Invited For Interview on 30-Jan-2023.'),
(3, 3, 3, 'Call Latter Send', 'Invited on 01-Feb-2023.');

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(1, 1, 'Thank You', '2023-01-13'),
(2, 3, 'Thank You So Much', '2023-01-18'),
(3, 4, 'Thanks For Your Support.', '2023-01-18'),
(4, 2, 'Thanks', '2023-01-22');

CREATE TABLE `jobseeker_education` (
  `EduId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY (`EduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(1, 3, 'B.C.A', 'Ganpat Universiy', 2021, 68.89),
(2, 3, 'M.C.A', 'Ganpat University', 2023, 89.9),
(3, 2, 'S.S.C', 'GSEB', 2018, 80);

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'Jalpari', 'Near Dena Bank', 'Vellore', 'jalpari@gmail.com', 9898989898, 'M.C.A', 'Female', '2002-09-10', 'Marksheet.pdf', 'Confirm', 'jalpari', 'jalpari', 'What is Your Pet Name?', 'jalpa'),
(2, 'Krunal', 'Near SBI Bank', 'Vellore', 'krunal@gmail.com', 8989898989, 'M.B.A', 'Male', '2001-09-16', 'Marksheet.pdf', 'Confirm', 'krunal', 'krunal', '', ''),
(3, 'Gopal Yadav', 'Katpadi', 'Vellore', 'gopal@gmail.com', 9898989898, 'MA', 'Male', '2003-10-15', 'admin.jpg', 'Confirm', 'gopal', 'gopal', '', ''),
(4, 'Neha Mishra', 'Swastik Society', 'Vellore', 'neha@gmail.com', 8989898998, 'BE', 'Female', '2000-10-09', '470X310_1.jpg', 'Confirm', 'neha', 'neha', 'What is Your Pet Name?', 'mehu');

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(1, 'Wipro Infotech', 'Software Professional Required', 2, 'M.C.A', 'ASP.NET'),
(2, 'Wipro Infotech', 'Marketing Executive Required', 5, 'M.B.A', 'Freshers Are Invited'),
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 15000'),
(4, 'Wipro Infotech', 'Cleaners Required', 3, 'S.S.C', 'N'),
(5, 'Amazon Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 15000'),
(6, 'Apple Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 15000');


CREATE TABLE `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2023-01-24'),
(2, 'New Vacancies will be updated soon', '2023-01-31');

CREATE TABLE `user_master` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin');

CREATE TABLE `walkin_master` (
  `WalkInId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  PRIMARY KEY (`WalkInId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2023-01-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2023-01-27', '09:00:00');