<!DOCTYPE html>
<html>
<head>
<title>MIDTERM EXAM</title>
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
		/* PROBLEM DIV */
		.problem-1 {
			margin-left: 30%;
			margin-right: 30%;
			padding-top: 2%;
			padding-bottom: 2%;
			text-align: center;
			background-color: rgba(255, 183, 206, 0.8);
			margin-bottom: 100px;
		}
		.problem-2 {
			margin-left: 30%;
			margin-right: 30%;
			padding-top: 2%;
			padding-bottom: 2%;
			text-align: center;
			background-color: rgba(255, 183, 206, 0.8);
			margin-bottom: 100px;
		}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name:</th>
            <th>De Castro, Kristen Anne G.</th>
            <th>Topic:</th>
            <th>Chapters 1 - 3</th>
        </tr>
        <tr>
            <th>EXAM</th>
            <th>Midterm Examination	</th>
            <th>Date:</th>
            <th>June 30,2022</th>
        </tr>
    </table>
	<br>
<!--PROBLEM 1:-->
	<h4>PROBLEM 1:</h1>
	
	<div class="problem-1">
		<?php
		
			$inputValue = "Manabat1234";
			$number = preg_match('@[0-9]@', $inputValue);
			$length = strlen($inputValue);
			$specialcharacters = preg_match('@[^\w]@', $inputValue);
			
			if ($length > 12) {
				echo "<p>Invalid input. The input length should not exceed 12 characters.</p>";
			}
			#ALPHANUMERIC WORDS ONLY
			else if ($specialcharacters) {
				echo "<p>Invalid input. Only alphanumeric characters are allowed.</p>";
				
			}
			#COUNT LETTERS AND NUMBERS
			else {
            $numberCount = 0;
            $letterCount = 0;
            
            for ($counter = 0; $counter < $length; $counter++) {
                if($inputValue[$counter] >= 'a' && $inputValue[$counter] <= 'z' || $inputValue[$counter] >= 'A' && $inputValue[$counter] <= 'Z') {
                    $letterCount++;
                }
                else{
                    $numberCount++;
                }
            }   
            echo "<p><b>VALUE:</b> " .$inputValue. "</p>";
            echo "<p><b>OUTPUT:</b> " .$letterCount. " letters and " .$numberCount.  " numbers</p>";
        }
        ?>
	</div>
	
	<!--PROBLEM 2:-->
	<h4>PROBLEM 2:</h1>
	<div class="problem-2">
	
	<?php
		$Numbers = 10000;
		$number = preg_match('@[0-9]@', $Numbers);
		$length = strlen($Numbers);
		$specialcharacters = preg_match('@[^\w]@', $Numbers);
		$uppercase = preg_match('@[A-Z]@', $Numbers);
		$lowercase = preg_match('@[a-z]@', $Numbers);
		
		if ($length > 7) {
			echo "<p>The longest numbers allowed should have a maximum of seven digits.</p>";
		}
		else if ($uppercase || $lowercase || $specialcharacters) {
			echo "<p>Invalid input. Please enter only numerical values.</p>";
		}
		else {
			if ($length == 1) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> One</p>";
			}
			else if ($length == 2) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> Ten</p>";
			}
			else if ($length == 3) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> One Hundred</p>";
			}
			else if ($length == 4) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> One Thousand</p>";
			}
			else if ($length == 5) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> Ten Thousand</p>";
			}
			else if ($length == 6) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> One Hundred Thousand</p>";
			}
			else if ($length == 7) {
				echo "<p><b>INPUT:</b> " .$Numbers. "</p>";
				echo "<p><b>OUTPUT:</b> One Million</p>";
			}
			else {
				echo "<p>OUTPUT: Not Available</p>";
			}
		}

		?>
	</div>
</body>
</html>