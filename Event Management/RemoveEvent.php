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
    <title>Remove Event</title>
  </head>
  <body>
    <form>
  <center>
      <h2>Remove Event:</h2>
        <table>
      <tr>
        <td><strong>Name:</strong> </td>
        <td><input type="name" name="" value=""/></td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td><strong>Id:</strong> </td>
        <td><input type="number" name="" value=""/></td>
      </tr>
      <tr>
        <td colspan=2 align=right>
          <input type="button" onclick="location.href='Eventlist.php';" value="Delete">
          <input type="button" onclick="location.href='Eventlist.php';" value="Back">
        </td>
      </tr>
    </table>
      </center>

    </form>
  </body>
</html>
