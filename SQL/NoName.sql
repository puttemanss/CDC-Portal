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
	INSERT INTO [Users].[User] ([FirstName],[LastName],[Email],[Password],[Hash],[Active]) VALUES('@FirstName','@LastName','@Email','@Password','@Hash','@Active');
END
GO;