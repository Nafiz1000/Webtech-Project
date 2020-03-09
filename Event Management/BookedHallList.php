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
    <title>Booked Hall List</title>
  </head>
  <body>
      <center>
        <hr>
				<h2>Current Booked Hall </h2>
<hr>
<br>
    <table border="2">
      <tr>
        <td>SL no</td>
        <td>Event Name</td>
        <td>Date</td>
        <td>Client Name</td>
        <td>Contact no</td>
        <td>Place</td>
      </tr>
      <tr>
        <td>1</td>
        <td><h4>Birthday</h4></td>
        <td>10/03/2020</td>
        <td>Mr.Hasan Ali</td>
        <td>01929394775</td>
        <td><h4>Cozy Sizzler Restaurant</h4></td>
      </tr>
      <tr>
        <td>2</td>
        <td><h4>Wedding</h4></td>
        <td>15/03/2020</td>
        <td>MD.Karim Hossain</td>
        <td>01543594775</td>
        <td><h4>La Vita Banquet Hall, Lakeshore Hotel</h4></td>
      </tr>
      <tr>
        <td>3</td>
        <td><h4>Picnic</h4></td>
        <td>20/04/2020</td>
        <td>MD.Rahman Chowdhury</td>
        <td>01754453565</td>
        <td><h4>Lalbagh Fort</h4></td>
      </tr>
      <tr>
        <td>3</td>
        <td><h4>Recipetion</h4></td>
        <td>26/05/2020</td>
        <td>Mr.Ahsanul Kabir</td>
        <td>01654537565</td>
        <td><h4>Celebration Hall, Dhaka Regency Hotel and Resort</h4></td>
      </tr>
			<tr>
				<td colspan=6 align=center>
					<input type="button" onclick="location.href='home.php';" value="Back">
				</td>
			</tr>
    </table>
      </center>
  </body>
</html>
