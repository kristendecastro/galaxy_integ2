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
			font-size: 35px;
			-webkit-text-stroke: 1px #000;
			text-shadow: 2px 2px 4px #000;	
			text-align:center;
			margin-left:50px;
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
        .diamond {
            text-align: center;
        }
        
        .diamond span {
            color: pink;
			background: rgba(0, 0, 0, 0.2); 
			padding-top:2px;
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
            <th>Quiz no.:</th>
            <th>Hands-on Quiz 1</th>
            <th>Date:</th>
            <th>June 19,2022</th>
        </tr>
    </table>
	<br>
<h4>DIAMOND</h4>
<?php
function printDiamond($size)
{
    $spaces = ($size - 1) / 2;
    $hashes = 1;
    $isReversed = false;

    echo '<div class="diamond">';

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $spaces; $j++) {
            echo "&nbsp;";
        }

        for ($j = 1; $j <= $hashes; $j++) {
            echo '<span> jas&nbsp;</span>';
        }

        echo "<br>";

        if ($spaces == 0) {
            $isReversed = true;
        }

        if ($isReversed) {
            $spaces++;
            $hashes -= 2;
        } else {
            $spaces--;
            $hashes += 2;
        }
    }

    echo '</div>';
}

$size = 21; 
printDiamond($size);
?>
<br><br>
</body>
</html>