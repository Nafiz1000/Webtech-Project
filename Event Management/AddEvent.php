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
    <title>Add Event</title>
  </head>
  <body>
    <form>
  <center>
      <h2>Add Event:</h2>
        <table>
      <tr>
        <td><strong>Event:</strong> </td>
        <td><input type="name" name="" value=""/></td>
      </tr>
      <tr>

      </tr>
      <tr>
        <td><strong>Function:</strong> </td>
        <td><input type="name" name="" value=""/></td>
      </tr>
      <tr>
        <td colspan=2 align=right>
          <input type="button" onclick="location.href='Eventlist.php';" value="Done">
          <input type="button" onclick="location.href='Eventlist.php';" value="Back">
        </td>
      </tr>
    </table>
      </center>

    </form>
  </body>
</html>
