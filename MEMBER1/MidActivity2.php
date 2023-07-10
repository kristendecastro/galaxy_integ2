<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: sans-serif;
  font-size: 16px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 5px;
}

th {
  text-align: center;
}
	/**HEADER**/
		.act-table th{
			margin-top: 20px;
			margin-left: 20px;
			margin-right: 20px;
			border: 1px solid white;
		}
		.title {
			color: #fff;
			background-color: #1C947Cff;
		}
		.data {
			color: black;
			background-color: #d0f0c0;
		}
	/**CONTENT**/
		#content {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 80px;
		}
	/**HR**/
		hr {
			width: 60%;
			height: 2px;
			background-color: black;
			margin-top: 30px;
			margin-bottom: 50px;
		}
	/**MULTIPLICATION TABLE**/
		.head-title {
			text-align: center;
			font-size: 30px;
			padding: 25px;
		}
		.m-table {
			width: 75%;
			margin-left: auto;
			margin-right: auto;
		}	
		
		.m-table th {
			background-color: #1C947Cff;
			color: white;
		}
		
	/**FAHRENHEIT - CELSIUS**/
		.fc-table {
			width: 40%;
			margin-left: auto;
			margin-right: auto;
		}
		.fc-table th{
			background-color: #1C947Cff;
			color: white;
		}
	/**SIDEBAR**/
		.sidenav {
		  width: 200px;
		  position: fixed;
		  z-index: 1;
		  bottom: 40px;
		  left: 10px;
		  overflow-x: hidden;
		  padding: 8px 0;
		}

		.sidenav a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 16px;
		  color: black;
		  display: block;
		  border-left: 3px solid black;
		}

		.sidenav a:hover {
		  color: #2c5363;
		}
		
	html {
		scroll-behavior: smooth;
	}
	tr:hover {background-color: #ddd;}

</style>
<title>MidActivity2</title>
</head>

<body>

<!--SIDENAV-->
	<div class="sidenav">
	  <a href="#top">Go to Top</a>
	  <a href="#M-table">Multiplication Table</a>
	  <a href="#FC-table">Fahrenheit - Celsius</a>
	  <a href="#CF-table">Celsius - Fahrenheit</a>
	</div>
	
    <table class ="act-table" id="top">
        <tr>
            <th class ="title">Name:</th>
            <th class="data">Dagunton, Marian Denise E.</th>
            <th class ="title">Topic:</th>
            <th class="data">Chapter 2 Functions and Control Structures</th>
        </tr>
        <tr>
            <th class ="title">Activity no.:</th>
            <th class="data">Activity 2</th>
            <th class ="title">Date:</th>
            <th class="data">June 20, 2022</th>
        </tr>
    </table>

<div id="content">


<h1 class="header" id="M-table">Multiplication Table and Temperature Conversion</h1>

<hr />

<h2 class="head-title">Multiplication Table</h2>

<table class="m-table">
	<thead>
		<tr>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>10</th>
			<th>11</th>
			<th>12</th>
		</tr>
	</thead>
	<tbody>
		<?php
		for ($i = 1; $i <= 12; $i++) {
			echo "<tr>";
			echo "<td>$i</td>";
			for ($j = 1; $j <= 12; $j++) {
				echo "<td>" . $i * $j . "</td>";
			}
			echo "</tr>";
		}
		?>
	</tbody>
</table>


<div class="table-div">
<h2 class="head-title" id="FC-table">Fahrenheit to Celsius</h2>
<table class="fc-table">
	<thead>
		<tr>
			<th>Fahrenheit</th>
			<th>Celsius</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
	for ($fahrenheit = 0; $fahrenheit <= 100; $fahrenheit = $fahrenheit + 1) {
		$celsius = (($fahrenheit - 32)*5) / 9;
		$formattedCelsius = number_format($celsius, 2);
		echo "<tr><td>$fahrenheit</td>";
		echo "<td>$formattedCelsius&deg;</td></tr>";
	}
		echo '</table>';
	?>
</table>
</div>

<div class="table-div">
<h2 class="head-title" id="CF-table">Celsius to Fahrenheit</h2>
<table class="fc-table" >
	<thead>
		<tr>
			<th>Celsius</th>
			<th>Fahrenheit</th>
		</tr>
	</thead>
<tbody>
<?php
for ($celsius = 0; $celsius <= 100; $celsius = $celsius + 1) {
$fahrenheit = ($celsius * 1.8) + 32;
print "<tr><td>$celsius</td> <td>$fahrenheit&deg;</td></tr>";
}
print '</table>';
?>
</tbody>
</table>
</div>
</body>
</html>
