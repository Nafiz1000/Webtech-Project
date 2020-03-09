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
    <title>Event List</title>
  </head>
  <body>
    <center>
 <hr>
 			<h2>Event We Manage</h2>
<hr>
<br><br>
    <table border="2" width="40%">
    <tr>
      <td>  <strong>Events</strong>  </td>
      <td>  <strong>Function Varity</strong></td>
   </tr>
    <tr>
      <td rowspan="5"><strong>Wedding</strong></td>
  <td>
    <strong>
      <a href="img\21.jpg">1.Premier Wedding planning.</a>
    </strong></td>
  <tr>
    <td>
      <strong>
        <a href="img\22.jpg">2.Royal Wedding planning at BD.</a>
      </strong></td>
  </tr>
  <tr>
  <td>
    <strong>
      <a href="img\23.jpg">3.Holud Stage Decoration.</a>
    </strong></td>
  </tr>
  <tr>
  <td>
    <strong>
      <a href="img\24.jpg">4.Wedding Entrance.</a>
    </strong></td>

  </tr>
<tr>
<td>
  <strong>
    <a href="img\26.jpg">5.Wedding & Recipetion Stage Decoration.</a>
  </strong></td>

  </tr>
  <tr>
    <td rowspan="5"><strong>Birthday</strong></td>
<td>
  <strong>
    <a href="img\30.jpg">1.Birthday-party Planner</a>
  </strong></td>
<tr>
  <td>
    <strong>
      <a href="img\39.jpg">2.Birthday-party Themes</a>
    </strong> </td>
</tr>

<tr>
<td>
  <strong>
    <a href="img\31.jpg">3.Birthday Ballon Decor</a>
  </strong></td>
</tr>
<tr>
<td>
  <strong>
    <a href="img\34.jpg">4.Games & activities</a>
  </strong></td>
</tr>
<tr>
<td>
  <strong>
    <a href="img\33.jpg">5.Birthday Mascot or Doll</a>
  </strong></td>
</tr>
<tr>
  <td rowspan="4"><strong>Picnic</strong></td>
<td>
  <strong>
    <a href="img\35.jpg">1.Picnic Spot</a>
  </strong></td>
<tr>
<td>
  <strong>2.Lunch & Snacks</strong> </td>
</tr>
<tr>
<td>
  <strong>3.Ride</strong></td>
</tr>
<tr>
<td>
  <strong>4.Transportion</strong></td>
</tr>
<tr>
	<td colspan=2 align= center>
		<input type="button" onclick="location.href='AddEvent.php';" value="Add">
		<input type="button" onclick="location.href='RemoveEvent.php';" value="Remove">
		<input type="button" onclick="location.href='home.php';" value="Back">

	</td>
</tr>

    </table>
    </center>
  </body>
</html>
