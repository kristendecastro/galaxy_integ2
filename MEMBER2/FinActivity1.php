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
			font-size: 50px;
			-webkit-text-stroke: 1px #000;
			text-shadow: 2px 2px 4px #000;	
			text-align:center;
			font-family: Poppins, sans-serif;
        }
        p {
			color: #000;
			font-size: 22px;
			text-align:center;
			font-family: Poppins, sans-serif;
        }
		
		body {
			background-image: url("https://i.pinimg.com/originals/eb/ba/03/ebba03d749389b26eb5a07feb784ba5e.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			weight:100%;
			font-family: Poppins, sans-serif;
			overflow-y:scroll;
			scroll-behavior: smooth;
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
		  input[type=text] {
		  width: 25%;
		  padding: 12px 20px 12px 30px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  font-size:20px;
		}
		.container{
			color: white;
			font-family: poppins;
			font-size: 25px;
		}
		.container p{
			color: white;
			font-family: poppins;
			font-size: 25px;
		}
		.sheesh{
			color: white;
			font-family: poppins;
			font-size: 25px;
		}
		.sheesh p{
			color: white;
			font-family: poppins;
			font-size: 25px;
		}
			::-webkit-scrollbar {
			width: 0px;		
		}
		/* Track */
			::-webkit-scrollbar-track {
			background: rgba(255, 183, 206, 0); 
			border: 1px rgba(0, 0, 0, 0);
			border-radius: 15pt;
		}
		 
		/* Handle */
			::-webkit-scrollbar-thumb {
			background: rgba(255, 183, 206, 0); 
			border: 2px rgba(0, 0, 0, 0);
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
            <th>Chapter 3 Manipulating Strings</th>
        </tr>
        <tr>
            <th>Activity no.:</th>
            <th>Activity 3</th>
            <th>Date:</th>
            <th>June 23,2022</th>
        </tr>
    </table>
	<br>
	


<center>

<div class="container">
		<center>
		<br>
		<br>
        <h2 style="text-align: center; font-family: poppins; font-size: 45px;">MOBILE NUMBER VALIDATION</h2>
		<br>
        <form method="POST">
            <div class="form-group">
                <label for="mobile_number">MOBILE NUMBER:</label>
                <input type="text" id="mobile_number" name="mobile_number" placeholder="Enter mobile number" required style="padding: 10px;">
            </div>
			<br>
			</center>
			<center>
            <button style="		   
			background-color: #555555; 
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 25px;
			" type="submit" class="btn">Validate</button>
			</center>
        </form>
		
<?php
// Function to validate mobile number and determine network provider
		function validateMobileNumber($number) {
		// Remove any non-numeric characters from the number
		$number = preg_replace('/[^0-9]/', '', $number);

    // Check if the number is 11 characters long
    if (strlen($number) != 11) {
        return false;
    }

    // Check if the number starts with "0"
    if (substr($number, 0, 1) != '0') {
        return false;		
    }

    // Get the first four digits (excluding the country code)
    $prefix = substr($number, 1, 3);

    // List of mobile network prefixes
    $globePrefixes = array('0817', '0905', '0906', '0915', '0916', '0917', '0925', '0926', '0927', '0935', '0936', '0937', '0945', '0953', '0954', '0955', '0956', '0965', '0966', '0967', '0975', '0976', '0977', '0978', '0979', '0994', '0995', '0996', '0997', '0998', '0999');
    $smartPrefixes = array('0813', '0907', '0908', '0909', '0910', '0911', '0912', '0913', '0914', '0918', '0919', '0920', '0921', '0928', '0929', '0930', '0931', '0938', '0939', '0946', '0947', '0948', '0949', '0950', '0951', '0980', '0981', '0989', '0991', '0992', '0993', '0998', '0999');
    $sunPrefixes = array('0922', '0923', '0924', '0925', '0932', '0933', '0934', '0940', '0941', '0942', '0943', '0973', '0974');
    $talkntextPrefixes = array('0900', '0901', '0902', '0903', '0904', '0905', '0906', '0907', '0908', '0909', '0910', '0911', '0912', '0913', '0914', '0915', '0916', '0917', '0918', '0919', '0920', '0921', '0922', '0923', '0924', '0925', '0926', '0927', '0928', '0929', '0930', '0931', '0932', '0933', '0934', '0935', '0936', '0937', '0938', '0939', '0940', '0941', '0942', '0943', '0944', '0945', '0946', '0947', '0948', '0949', '0950', '0951', '0952', '0953', '0954', '0955', '0956', '0957', '0958', '0959', '0960', '0961', '0962', '0963', '0964', '0965', '0966', '0967', '0968', '0969', '0970', '0971', '0972', '0973', '0974', '0975', '0976', '0977', '0978', '0979', '0980', '0981', '0982', '0983', '0984', '0985', '0986', '0987', '0988', '0989', '0990', '0991', '0992', '0993', '0994', '0995', '0996', '0997', '0998', '0999');

    // Check if the prefix matches any network
    if (in_array($prefix, $globePrefixes)) {
        return '+63' . substr($number, 1);
    } elseif (in_array($prefix, $smartPrefixes)) {
        return '+63' . substr($number, 1);
    } elseif (in_array($prefix, $sunPrefixes)) {
        return '+63' . substr($number, 1);
    } elseif (in_array($prefix, $talkntextPrefixes)) {
        return '+63' . substr($number, 1);
    }

    // No network match found
    return 'UNKNOWN';
}

// Function to get the network provider based on the prefix
function getNetworkProvider($prefix) {
    $globePrefixes = array('0817', '0905', '0906', '0915', '0916', '0917', '0925', '0926', '0927', '0935', '0936', '0937', '0945', '0953', '0954', '0955', '0956', '0965', '0966', '0967', '0975', '0976', '0977', '0978', '0979', '0994', '0995', '0996', '0997', '0998', '0999');
    $smartPrefixes = array('0813', '0907', '0908', '0909', '0910', '0911', '0912', '0913', '0914', '0918', '0919', '0920', '0921', '0928', '0929', '0930', '0931', '0938', '0939', '0946', '0947', '0948', '0949', '0950', '0951', '0980', '0981', '0989', '0991', '0992', '0993', '0998', '0999');
    $sunPrefixes = array('0922', '0923', '0924', '0925', '0932', '0933', '0934', '0940', '0941', '0942', '0943', '0973', '0974');
    $talkntextPrefixes = array('0900', '0901', '0902', '0903', '0904', '0905', '0906', '0907', '0908', '0909', '0910', '0911', '0912', '0913', '0914', '0915', '0916', '0917', '0918', '0919', '0920', '0921', '0922', '0923', '0924', '0925', '0926', '0927', '0928', '0929', '0930', '0931', '0932', '0933', '0934', '0935', '0936', '0937', '0938', '0939', '0940', '0941', '0942', '0943', '0944', '0945', '0946', '0947', '0948', '0949', '0950', '0951', '0952', '0953', '0954', '0955', '0956', '0957', '0958', '0959', '0960', '0961', '0962', '0963', '0964', '0965', '0966', '0967', '0968', '0969', '0970', '0971', '0972', '0973', '0974', '0975', '0976', '0977', '0978', '0979', '0980', '0981', '0982', '0983', '0984', '0985', '0986', '0987', '0988', '0989', '0990', '0991', '0992', '0993', '0994', '0995', '0996', '0997', '0998', '0999');

    if (in_array($prefix, $globePrefixes)) {
        return 'GLOBE/TM/DITO';
    } elseif (in_array($prefix, $smartPrefixes)) {
        return 'SMART/TNT';
    } elseif (in_array($prefix, $sunPrefixes)) {
        return 'SUN';
    } elseif (in_array($prefix, $talkntextPrefixes)) {
        return 'SMART/TNT';
    }

    return 'UNKNOWN';
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered mobile number
    $mobileNumber = $_POST['mobile_number'];

    // Validate and determine network provider
    $result = validateMobileNumber($mobileNumber);

    // Display the result
    if ($result === false) {
        echo "<p>Invalid mobile number</p>";
    } else {
        $prefix = substr($mobileNumber, 1, 3);
        $networkProvider = getNetworkProvider($prefix);
        echo "<p>Valid mobile number: " . $result . "</p>";
        echo "<p>Network provider: " . $networkProvider . "</p>";
    }
}
?>
</div>

<div class = "sheesh">
<h1 class="mainset">SET: C - Strong / Weak Password Validation</h1>
    <div class="login-wrap">
        <div class="inquiry-form">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input style="width: 25%;
								 padding: 12px 10px 12px 30px;
								 margin: 8px 0;
								 box-sizing: border-box;
								 font-size:20px;" type="text" id="username" name="username" placeholder="Username" required><br>
                </div>
                <div class="form-group">
                    <label for="password">&nbsp;Password:  </label>
                    <input style="width: 25%;
								 padding: 12px 0px 12px 30px;
								 margin: 8px 0 8px 3px;
								 box-sizing: border-box;
								 font-size:20px;" type="password" id="password" name="password" placeholder="Password" required><br>
                </div>
                <div>
                    <input class="button" style="		   
						background-color: #555555; 
						border: none;
						color: white;
						padding: 15px 32px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 25px;
						"  type="submit" value="Submit" id="password">
                </div>
            </form>  
           
        </div>
    </div>
<div class="validations">
<h3 class="sets">Output:</h3>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username_input = $_POST['username'];
        $password_input = $_POST['password'];

        $output_errors = [];

        if (strlen($password_input) > 8) {
            $output_errors[] = '<p class="invalid">Invalid input. Password must contain a 8 characters only.</p>';
        }
        if (strlen($password_input) < 8) {
            $output_errors[] = '<p class="invalid">Invalid input. Password must contain a 8 characters only.</p>';
        }
        if (!ctype_alnum($password_input)) {
            $output_errors[] = '<p class="invalid">Invalid input. Special characters are not allowed.</p>';
        }

    
        if (preg_match_all("/[A-Z]/", $password_input) !==2) {
            $output_errors[] = '<p class="invalid">Invalid input. Password must contain at most 2 uppercase letters.</p>';
        }

        
        if (stristr($password_input, $username_input)) {
            $output_errors[] = '<p class="invalid">Invalid input. The password must not be similar to the username.</p>';
        }

        if (empty($output_errors)) {
            echo '<p class="valid">Valid password.</p> <br><p>'.$password_input.'</p>';
        } else {
            foreach ($output_errors as $output_error) {
                echo "$output_error";
            }
        }
    } 
    
    ?>

</center>
</div>
<br><br><br>
</body>
</html>
