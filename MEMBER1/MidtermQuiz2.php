<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <title>Hourglass Pattern</title>
    <style>
	/**HEADER**/
		.act-table {
			width: 90%;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 100px;
		}
		.act-table th{
			margin-top: 20px;
			margin-left: 20px;
			margin-right: 20px;
			border: 1px solid white;
		}
		.title {
			color: #f5f2e8;;
			background-color: black;
		}
		.data {
			color: black;
			background-color: #f5f2e8;
		}
        td .hourglass {
            padding: 5px;
            text-align: center;
            font-family: monospace;
        }
		
		.hourglass {
			border-collapse: collapse;
			text-align: center;
			margin-left: auto;
			margin-right: auto;		
    </style>
</head>
<body>
	<table class ="act-table" id="top">
        <tr>
            <th class ="title">Name:</th>
            <th class="data">Dagunton, Marian Denise E.</th>
            <th class ="title">Topic:</th>
            <th class="data">Chapter 3 Manipulating Strings</th>
        </tr>
        <tr>
            <th class ="title">Activity no.:</th>
            <th class="data">Activity 3</th>
            <th class ="title">Date:</th>
            <th class="data">June 20, 2022</th>
        </tr>
    </table>
	
    <table class="hourglass">
        <?php
        $num = 5;
        $totalRows = $num * 2 - 1;
        $midRow = ceil($totalRows / 2);

        for ($row = 1; $row <= $totalRows; $row++) {
            echo '<tr>';

            $starsCount = $row <= $midRow ? $num - $row + 1 : $row - $midRow + 1;
            $spacesCount = $num - $starsCount;

            // Add left spaces
            for ($col = 1; $col <= $spacesCount; $col++) {
                echo '<td>&nbsp;</td>';
            }

            // Add asterisks
            for ($col = 1; $col <= $starsCount * 2 - 1; $col++) {
                echo '<td>*</td>';
            }

            // Add right spaces
            for ($col = 1; $col <= $spacesCount; $col++) {
                echo '<td>&nbsp;</td>';
            }

            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
