<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Library Management System</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <p class="head">Library Management System</p>
        <p class="sub">Al Ain University of Science and Technology</p>
    </div>
    <br />

    <div align="center">
        <div id="wrapper">
            <br />
            <br />

            <span class="SubHead">Welcome <?php echo $name;?></span>
            <br />

            <div class="link-container">
                <div class="link-item">
		<img src="images/c.jpg" alt="Icon 1" width="40" height="40">
                    <a href="#" class="link">Link 1</a>
                </div>
                <div class="link-item">
                    <img src="icon2.png" alt="Icon 2" class="icon">
                    <a href="#" class="link">Link 2</a>
                </div>
                <div class="link-item">
                    <img src="icon3.png" alt="Icon 3" class="icon">
                    <a href="#" class="link">Link 3</a>
                </div>
                <div class="link-item">
                    <img src="icon4.png" alt="Icon 4" class="icon">
                    <a href="#" class="link">Link 4</a>
                </div>
            </div>

            <a href="issueBook.php" class="Command">Issue Book</a>
            <a href="request.php" class="Command">Request New Books</a>
            <a href="changePassword.php" class="Command">Change Password</a>
            <a href="logout.php" class="Command">Logout</a>

        </div>
    </div>
</body>

</html>
