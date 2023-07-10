<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
			margin:auto;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border: 2px solid black;
            font-family: Arial, sans-serif;
            font-size: 20px;
			background-color: rgba(255, 183, 206, 0.8);
            color:#000;
        }
        
        th {
			background-color: rgba(255, 183, 206, 0.8);
			color: #000;
			font-size: 20px;
        }
        h4 {
			color: rgba(255, 183, 206);
			font-size: 30px;
			-webkit-text-stroke: 1px #000;
			text-shadow: 2px 2px 4px #000;	
			text-align:center;
        }
		
		body {
			background-image: url("https://i.pinimg.com/originals/eb/ba/03/ebba03d749389b26eb5a07feb784ba5e.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			weight:100%;
			font-family: Poppins, sans-serif;
		}
		.table-container{
			height:400px;
			overflow-y:scroll;
			scroll-behavior: smooth;
			margin-left:10px;
		}
			::-webkit-scrollbar {
			width: 10px;		
		}

		/* Track */
			::-webkit-scrollbar-track {
			background: rgba(255, 183, 206, 0.2); 
			border: 1px rgba(0, 0, 0, 0.6);
			border-radius: 15pt;
		}
		 
		/* Handle */
			::-webkit-scrollbar-thumb {
			background: rgba(255, 183, 206, 0.8); 
			border: 2px rgba(0, 0, 0, 0.6);
			border-radius: 15pt;
		}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name:</th>
            <th>De Castro, Kristen Anne G.</th>
            <th>Topic:</th>
            <th>Chapter 2 Functions and Control Structures</th>
        </tr>
        <tr>
            <th>Activity no.:</th>
            <th>Activity 2</th>
            <th>Date:</th>
            <th>June 19,2022</th>
        </tr>
    </table>
	<br>
<h4>SET B: EVEN numbers from 1-100</h4>
<?php
$counter = 1;

echo "<style>
        .small-table {
            width: 500px;
        }
        .small-table td {
            padding: 10px;
        }
      </style>";

echo "<table class='small-table'>";

for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 10; $col++) {
        $number = $counter * 2;
        echo "<td>$number</td>";
        $counter++;
    }

    echo "</tr>";
}

echo "</table>";
?>
<h4>Fahrenheit to Celsius</h4>
<div class= "table-container">
<?php
echo "<style>
        .small-table {
            width: 500px;
        }
        .small-table th,
        .small-table td {
            padding: 10px;
            text-align: center;
        }
      </style>";

echo "<table class='small-table'>";
echo "<tr><th>Fahrenheit</th><th>&nbsp;&nbsp;&nbsp;Celsius&nbsp;&nbsp;&nbsp;</th></tr>";

for ($temp = 0; $temp <= 100; $temp++) {
    $celsius = round(($temp - 32) * 5/9, 2);
    $fahrenheit = round(($celsius * 9/5) + 32, 2);

    echo "<tr><td>$temp &#8457;</td><td>$celsius &#8451;</td></tr>";
}

echo "</table>";
?>
</div>

<h4>Celsius to Fahrenheit</h4>
<div class= "table-container">

<?php
echo "<style>
        .small-table {
            width: 500px;
        }
        .small-table th,
        .small-table td {
            padding: 10px;
            text-align: center;
        }
      </style>";

echo "<table class='small-table'>";
echo "<tr><th>&nbsp;&nbsp;&nbsp;Celsius&nbsp;&nbsp;&nbsp;</th><th>Fahrenheit</th></tr>";

    for ($celsius = 0; $celsius <= 100; $celsius++) {
    $fahrenheit = round(($celsius * 9 / 5) + 32, 1);
            echo "<tr>";
            echo "<td>{$celsius}°C</td>";
            echo "<td>{$fahrenheit}°F</td>";
            echo "</tr>";
        }
		echo "</table>";
        ?>
</div>
<br><br><br>
</body>
</html>