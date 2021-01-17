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