--User
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Johnny', 'Norris', '1965-10-05', 'jaynorris71@gmail.com', '20 Lake view Rd', 'Kansas City', 'Ohio', 'Rolder', '03847');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Lee', 'Steel', '2022-10-11', 'bobo@gmail.com', '33 bargo road', 'Durham', 'North Carolina', 'Oxford', '27703');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Nelson', 'Ramirez', '2000-04-17', 'nelly51@gmail.com', '21 hater valley', 'Richmond', 'Virginia', 'bull', '29084');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Kenzie', 'Beard', '1999-02-08', 'kenz08@gmail.com', '381 Lecester street', 'Nashville', 'Tennesse', 'Knox', '37012');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Harry', 'Salamanca', '2004-01-28', 'hogdog@gmail.com', '50 Lstar Rd', 'ashville', 'North Carolina', 'Boncoumbe', '45678');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Morty', 'Smith', '2005-12-25', 'ms@gmail.com', '308 Allegre Ln', 'Alberque', 'Mexico', 'Bino', '09458'), ('Gustavo', 'Frings', '1960-05-10', 'ChickenMan@gmail.com', '17 laundry Str', 'Chicago', 'Illinoi', 'babanos', '77364');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Heuy', 'Freeman', '2012-06-09', 'FreedomMonk@gmail.com', '901 Bone Rd', 'Tallahassee', 'Florida', 'Leon', '32301');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Jake', 'Drum', '1998-07-12', 'jddrum@uncg.edu', '756 Mansen ', 'New York', 'New York', 'Newsy', '04091');
INSERT INTO `_User` (`FName`, `LName`, `dateOfBirth`, `email`, `streedAddr`, `City`, `State`, `County`, `Zip`) VALUES ('Lalo', 'Salamanca', '1984-09-01', 'pollos2@gmail.com', '151 Rendol Str', 'St. louise', 'Missouri', 'Bennet', '29395');
--Player
INSERT INTO `Player` (`FName`, `LName`, `dateOfBirth`, `Headset`, `favGenre`) VALUES ('Lee', 'Steel', '2022-10-11', 'yeezy', 'Action'); 
INSERT INTO `Player` (`FName`, `LName`, `dateOfBirth`, `Headset`, `favGenre`) VALUES ('jo', 'biz', '1600-04-28', 'Razor', 'Cooking');
INSERT INTO `Player` (`FName`, `LName`, `dateOfBirth`, `Headset`, `favGenre`) VALUES ('Nelson', 'Ramirez', '2000-04-17', 'Logic', 'Simulator');
INSERT INTO `Player` (`FName`, `LName`, `dateOfBirth`, `Headset`, `favGenre`) VALUES ('Johnny', 'Norris', '1965-10-05', 'Bonkers', 'Horror');
--Work
INSERT INTO `Work` (`dFName`, `dLName`, `dDateOfBirth`, `expID`, `teamID`) VALUES ('Lee', 'Steel', '2022-10-11', '1', '2');
INSERT INTO `Work` (`dFName`, `dLName`, `dDateOfBirth`, `expID`, `teamID`) VALUES ('Kenzie', 'Beard', '2002-07-11', '2', '3');
INSERT INTO `Work` (`dFName`, `dLName`, `dDateOfBirth`, `expID`, `teamID`) VALUES ('Johnny', 'Norris', '2002-07-11', '5', '4');
INSERT INTO `Work` (`dFName`, `dLName`, `dDateOfBirth`, `expID`, `teamID`) VALUES ('Nelson', 'Ramirez', '2000-04-17', '6', '5');
--DevelopmentTeam
INSERT INTO `DevelopmentTeam` (`teamID`, `TYPE`, `description`) VALUES (NULL, 'Cooking', 'Does Cooking Games');
INSERT INTO `DevelopmentTeam` (`teamID`, `TYPE`, `description`) VALUES (NULL, 'Puzzle', 'Does Puzzle Games');
INSERT INTO `DevelopmentTeam` (`teamID`, `TYPE`, `description`) VALUES (NULL, 'Simulator', 'Does Simulator Games');
INSERT INTO `DevelopmentTeam` (`teamID`, `TYPE`, `description`) VALUES (NULL, 'Action', 'Does Action Games');
--Developer
INSERT INTO `Developer` (`FName`, `LName`, `dateOfBirth`, `startDate`) VALUES ('Johnny', 'Norris', '1965-10-05', CURRENT_TIMESTAMP);
INSERT INTO `Developer` (`FName`, `LName`, `dateOfBirth`, `startDate`) VALUES ('Nelson', 'Ramirez', '2000-04-17', CURRENT_TIMESTAMP);
INSERT INTO `Developer` (`FName`, `LName`, `dateOfBirth`, `startDate`) VALUES ('Lee', 'Steel', '2022-10-11', CURRENT_TIMESTAMP);
INSERT INTO `Developer` (`FName`, `LName`, `dateOfBirth`, `startDate`) VALUES ('Kenzie', 'Beard', '2002-07-11', CURRENT_TIMESTAMP);
--VRExperiences
INSERT INTO `VRExperience` (`expID`, `dFName`, `dLName`, `dDateOfBirth`, `NAME`, `TYPE`) VALUES (NULL, 'Lee', 'Steel', '2022-10-11', 'Cooking Mama', 'Cooking');
INSERT INTO `VRExperience` (`expID`, `dFName`, `dLName`, `dDateOfBirth`, `NAME`, `TYPE`) VALUES (NULL, 'Kenzie', 'Beard', '2002-07-11', 'Tetris', 'Puzzle');
INSERT INTO `VRExperience` (`expID`, `dFName`, `dLName`, `dDateOfBirth`, `NAME`, `TYPE`) VALUES (NULL, 'Johnny', 'Norris', '1965-10-05', 'Farming Simulator', 'Simulator');
INSERT INTO `VRExperience` (`expID`, `dFName`, `dLName`, `dDateOfBirth`, `NAME`, `TYPE`) VALUES (NULL, 'Nelson', 'Ramirez', '2000-04-17', 'CoD', 'Action');
--ProgLanguage
INSERT INTO `ProgLanguage` (`dFName`, `dLName`, `dDateOfBirth`, `LANGUAGE`) VALUES ('Lee', 'Steel', '2022-10-11', 'Python');
INSERT INTO `ProgLanguage` (`dFName`, `dLName`, `dDateOfBirth`, `LANGUAGE`) VALUES ('Kenzie', 'Beard', '2002-07-11', 'C++');
INSERT INTO `ProgLanguage` (`dFName`, `dLName`, `dDateOfBirth`, `LANGUAGE`) VALUES ('Johnny', 'Norris', '1965-10-05', 'C#');
INSERT INTO `ProgLanguage` (`dFName`, `dLName`, `dDateOfBirth`, `LANGUAGE`) VALUES ( 'Nelson', 'Ramirez', '2000-04-17','P5');
--Avatar
INSERT INTO `Avatar` (`uFName`, `uLName`, `uDateOfBirth`, `NAME`, `height`, `gender`, `species`) VALUES ('Johnny', 'Norris', '1965-10-05', 'FordRunner', '6ft2in', 'M', 'Human');
INSERT INTO `Avatar` (`uFName`, `uLName`, `uDateOfBirth`, `NAME`, `height`, `gender`, `species`) VALUES ('Lee', 'Steel', '2022-10-11', 'MightyLee', '5ft2in', 'M', 'Dog');
INSERT INTO `Avatar` (`uFName`, `uLName`, `uDateOfBirth`, `NAME`, `height`, `gender`, `species`) VALUES ('Kenzie', 'Beard', '2002-07-11', 'KenderEgg', '2ft11in', 'F', 'Cat');
INSERT INTO `Avatar` (`uFName`, `uLName`, `uDateOfBirth`, `NAME`, `height`, `gender`, `species`) VALUES ('Nelson', 'Ramirez', '2000-04-17', 'NellyJelly', '9ft7in', 'M', 'Giant');
