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
    <title>Hall Suggestion</title>
  </head>
  <body>
      <center>
				<h2>Suggested Hall for Booking</h2>
    <table border="2" width="50%">
    <tr>
      <td>  <strong>Events</strong>  </td>
      <td>  <strong>Suggested Place</strong></td>
      <td><strong>Cost</strong></td>
   </tr>
    <tr>
      <td rowspan="5"><strong>Wedding/Reception</strong></td>
  <td>
    <strong>
      <a href="img\1.jpg">Greesho Ballroom, Six Season Hotel</a>
    </strong></td>
    <td>200000</td>
  <tr>
    <td>
      <strong>
        <a href="img\2.jpg">Grand Ballroom, Pan Pacific Sonargaon</a>
      </strong></td>
        <td>150000</td>
  </tr>
  <tr>
  <td>
    <strong>
      <a href="img\3.jpg">Celebration Hall, Dhaka Regency Hotel and Resort</a>
    </strong></td>
      <td>100000</td>
  </tr>
  <tr>
  <td>
    <strong>
      <a href="img\4.jpg">La Vita Banquet Hall, Lakeshore Hotel</a>
    </strong></td>
      <td>80000</td>

  </tr>
<tr>
<td>
  <strong>
    <a href="img\5.jpg">Rashni Mahal, Grand Sultan Tea Resort & Golf</a>
  </strong></td>
    <td>50000</td>

  </tr>
  <tr>
    <td rowspan="5"><strong>Birthday</strong></td>
<td>
  <strong>
    <a href="img\11.jpg">Bird's Eye Roof Top Restaurant and Convention Hall</a>
  </strong></td>
    <td>10000</td>
<tr>
  <td>
    <strong>
      <a href="img\12.jpg">Cozy Sizzler Restaurant</a>
    </strong> </td>
      <td>20000</td>
</tr>

<tr>
<td>
  <strong>
    <a href="img\13.jpg">Spaghetti Jazz, Dhaka</a>
  </strong></td>
    <td>10000</td>
</tr>
<tr>
<td>
  <strong>
    <a href="img\14la.jpg">The Atrium Restaurant</a>
  </strong></td>
    <td>50000</td>
</tr>
<tr>
<td>
  <strong>
    <a href="img\16.jpg">Crème de la Crème Coffee</a>
  </strong></td>
    <td>50000</td>
</tr>
<tr>
  <td rowspan="4"><strong>Picnic</strong></td>
<td>
  <strong>
    <a href="img\lal.jpg">Lalbagh Fort</a>
  </strong></td>
    <td>10000</td>
<tr>
<td>
  <strong>Zinda Park</strong> </td>
    <td>10000</td>
</tr>
<tr>
<td>
  <strong>Dream Holiday Park</strong></td>
    <td>10000</td>
</tr>
<tr>
<td>
  <strong>
Aladin's Park-Amusement Theme Park</strong></td>
  <td>8000</td>
</tr>
<tr>
	<td colspan=3 align=center>
		<input type="button" onclick="location.href='home.php';" value="Back">
	</td>
</tr>
    </table>
      </center>
  </body>
</html>
