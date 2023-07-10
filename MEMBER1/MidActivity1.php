<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
			margin-bottom: 50px;
			margin-top: 30px;
        }
        
		body {
			font-family: Arial, sans-serif;
		}
		
        th, td {
            padding: 10px;
            text-align: left;
            border: 2px solid white;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        
        th {
            background-color: #fff;
        }
		
		.act-table {
			margin-top: 10px;
		}
		.title {
			color: #fff;
			background-color: #1C947Cff;
		}
		.data {
			color: black;
			background-color: #d0f0c0;
		}
		.divider {
			height: 5px;
		}
    </style>
</head>
<body>
    <table class ="act-table">
        <tr>
            <th class ="title">Name:</th>
            <th class="data">Dagunton, Marian Denise E.</th>
            <th class ="title">Topic:</th>
            <th class="data">Chapter 1 Introduction to PHP</th>
        </tr>
        <tr>
            <th class ="title">Activity no.:</th>
            <th class="data">Activity 1</th>
            <th class ="title">Date:</th>
            <th class="data">June 16,2022</th>
        </tr>
    </table>

    <?php
echo '<span style="color: #E0474C; font-size: 20px;"><h3>Problem 1</h3></span>';

$daysEnglish = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$daysFrench = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

echo "<h4>The days of the week in English are:</h4>";
foreach ($daysEnglish as $day) {
    echo $day . ", ";
}

echo "<br>";
echo "<br>";

echo "<h4>The days of the week in French are: </h4> ";
foreach ($daysFrench as $day) {
    echo $day . ", ";
}
echo "<br>";
echo "<br>";
echo '<hr />';


?>


<?php
echo '<span style="color: #E0474C; font-size: 20px; font-weight: bolder;"><h3>Problem 2</h3></span>';
$number = 55.8691;

$rounded = round($number);
$ceiled = ceil($number);
$floored = floor($number);

echo "<b>Original number: </b>$number<br>";
echo "<b>Rounded:</b> $rounded<br>";
echo "<b>Ceiled:</b>$ceiled<br>";
echo "<b>Floored:</b> $floored<br>";
echo "<br>";

echo '<hr />';
?>


<?PHP
echo '<span style="color: #E0474C; font-size: 20px; font-weight: bolder;"><h3>Problem 3</h3></span>';
$number = "maganda si maam manabat";
echo"<b>Number: </b> $number <br>";

if (is_numeric($number)) {
    $rounded = round($number);
    $isEven = ($rounded % 2 == 0) ? "even" : "odd";
    echo "The number $number is <b>$isEven</b>.";
} else {
    echo "The variable does not contain a valid number.";
}
?>
</body>
</html>