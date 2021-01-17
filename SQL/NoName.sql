--Register New User (page-register.php)
CREATE PROCEDURE [Users].[sp_Register User]
	--EXEC [Users].[sp_Register User] 'FirstName', 'LastName', 'Email', 'Password', 'Hash'
	@FirstName varchar(255),
	@LastName varchar(255),
	@Email varchar(255),
	@Password varchar(255),
	@Hash varchar(255),
	@Active int = 1
AS
BEGIN
SET NOCOUNT ON
	INSERT INTO [Users].[User] ([FirstName],[LastName],[Email],[Password],[Hash],[Active]) VALUES('@FirstName','@LastName','@Email','@Password','@Hash','@Active');
END
GO


--Login (page-login.php)
CREATE PROCEDURE [Users].[sp_Page_Login]
	--EXEC [Users].[sp_Page_Login] 'Email', 'Password'
	@Email varchar(255),
	@Password varchar(255),
AS
BEGIN
		SELECT * FROM [Users].[User] WHERE Email = @Email AND Password = @Password;
	END
GO

CREATE PROCEDURE [Users].[sp_Select_Gender]
	--EXEC [Users].[sp_Select_Gender]
AS
	BEGIN
		SELECT * FROM [Users].[Gender]
	END
GO

CREATE PROCEDURE [Users].[sp_Select_Marital_Status]
	--EXEC [Users].[sp_Select_Marital_Status]
AS
	BEGIN
		SELECT * FROM [Users].[Marital_Status]
	END
GO

CREATE PROCEDURE [Users].[sp_Select_User_Info]
	--EXEC [Users].[sp_Select_User_Info]
	@UserID int
AS
	BEGIN
		SELECT * FROM [Users].[User] WHERE UserID = @UserID
	END
GO

CREATE PROCEDURE [Users].[sp_Update_User_Info]
	-- EXEC [Users].[sp_Update_User_Info] @UserID, @Date_Edit, @FirstName, @LastName, @Email, @Phone, @Gender, @BirthDate, @Address_Line_1,@Address_Line_2, @Zipcode, @City, @Country, @Marital_Status, @National_Insurance_Number, @Account_Number, @Enterprise_Email, @Contact_Person_Name, @Contact_Person_Phone
	@UserID int,
	@Date_Edit DATE,
	@FirstName VARCHAR(255),
	@LastName VARCHAR(255),
	@Email VARCHAR(255),
	@Phone VARCHAR(255),
	@Gender INT,
	@BirthDate DATE,
	@Address_Line_1 VARCHAR(255),
	@Address_Line_2 VARCHAR(255),
	@Zipcode VARCHAR(255),
	@City VARCHAR(255),
	@Country VARCHAR(255),
	@Marital_Status INT,
	@National_Insurance_Number VARCHAR(255),
	@Account_Number VARCHAR(255),
	@Enterprise_Email VARCHAR(255),
	@Contact_Person_Name VARCHAR(255),
	@Contact_Person_Phone VARCHAR(255)
AS
	BEGIN
		UPDATE [Users].[User]
   SET [Date_Edit] = @Date_Edit
      ,[FirstName] = @FirstName
      ,[LastName] = @LastName
      ,[Email] = @Email
      ,[Phone] = @Phone
      ,[Gender] = @Gender
      ,[BirthDate] = @BirthDate
      ,[Address_Line_1] = @Address_Line_1
      ,[Address_Line_2] = @Address_Line_2
      ,[Zipcode] = @Zipcode
      ,[City] = @City
      ,[Country] = @Country
      ,[Marital_Status] = @Marital_Status
      ,[National_Insurance_Number] = @National_Insurance_Number
      ,[Account_Number] = @Account_Number
      ,[Enterprise_Email] = @Enterprise_Email
      ,[Contact_Person_Name] = @Contact_Person_Name
      ,[Contact_Person_Phone] = @Contact_Person_Phone
 WHERE [UserID] = @UserID
	END
GO