<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Info</title>
  </head>
  <body>

  <table width="90%">
      <tr>
        <td width="20%"><img src="img\ProfileImage.jpg" alt=""height="260px" width="250px"></td>
         <td></td>

    <td>

    <form>
    <fieldset>
      <legend>Personal Info</legend>
    <table width="90%">
      <tr>
        <td>Name:</td>
        <td><strong>Nafiz Ahamed Nahid</strong></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td>1234</td>
      </tr>
      <tr>
        <td>DOB:</td>
        <td>23/05/1999</td>
      </tr>
      <tr>
        <td>Contact no:</td>
        <td>015435785</td>
      </tr>
      <tr>
        <td>Joining Date: </td>
        <td>01/01/2020</td>

      </tr>
      <tr>
        <td>Positon:</td>
        <td><strong>Manager</strong>
        </td>
      </tr>
      <tr>
        <td>Address:</td>
        <td>Jurain,Dhaka1204</td>
      </tr>
      <tr>
        <td>Branch: </td>
        <td>Dhaka</td>
      </tr>
      <tr>
        <td></td>
        <td>
					  <input type="button" onclick="location.href='Registration.php';" value="Change Info">
					  <input type="button" onclick="location.href='home.php';" value="Back">
        </td>
      </tr>
    </table>
    </fieldset>
    </form>
    </td>
      </table>
  </body>
</html>
