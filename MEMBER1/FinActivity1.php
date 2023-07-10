<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<style>
/**HEADER**/
		.act-table {
			width: 90%;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
		}
		.act-table th{
			margin-top: 20px;
			margin-left: 20px;
			margin-right: 20px;
			border: 1px solid #518acb;
		}
		.title {
			color: #518acb;
			background-color: #F8F9F9;
		}
		.data {
			color: #518acb;
			background-color: #F8F9F9;
		}
	/**FORM**/
		html, body, div, input, span, a, select, textarea, option, h1, h2, h3, h4, main, aside, article, section, header, p, footer, nav, pre {
		box-sizing: border-box;
		font-family: Tahoma, Geneva, sans-serif;
	}
	html {
		background-color: #F8F9F9;
		padding: 30px;
	}
	input,textarea,p {
		outline: 0;
	}
	h1 {
		margin: 0;
		padding: 20px;
		font-size: 22px;
		text-align: center;
		border-bottom: 1px solid #eceff2;
		color: #6a737f;
		font-weight: 600;
	}
	.valid {
		color: green;
		font-size: 14px;
		padding: 15px;
	}
	.invalid {
		color: red;
		font-size: 14px;
		padding: 15px;
	}
		.login{
			width: 500px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 100px;
			text-align: center;
			background-color: white;
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.login input[type="submit"] {
		display: block;
		margin-top: 15px;
		padding: 15px;
		border: 0;
		background-color: #518acb;
		font-weight: bold;
		color: #fff;
		cursor: pointer;
		width: 100%;
		}
		.login input[type="text"], .login input[type="text"] {
		display: block;
		margin-top: 15px;
		padding: 15px;
		border: 1px solid #dfe0e0;
		width: 100%;
		}
		.login input[type="text"]:focus, .login input[type="text"]:focus {
			border: 1px solid #c6c7c7;
		}
		.login input[type="submit"]:hover {
		background-color: #3670b3;
	}
	.login input[name="email"] {
		position: relative;
		display: block;
	}
	.login label {
		position: relative;

	}
	.login label i {
		position: absolute;
		color: #dfe2e5;
		top: 31px;
		left: 15px;
		z-index: 10;
	}
	.login label i ~ input {
		padding-left: 45px !important;
	}
	.login .responses {
		padding: 15px;
		margin: 0;
	}
</style>
<title>F-ACT1: Password Validation</title>
</head>

<body>
    <table class ="act-table" id="top">
        <tr>
            <th class ="title">Name:</th>
            <th class="data">Dagunton, Marian Denise E.</th>
            <th class ="title">Topic:</th>
            <th class="data">Chapter 4 Handling User Input</th>
        </tr>
        <tr>
            <th class ="title">Activity No.</th>
            <th class="data">Activity 1	</th>
            <th class ="title">Date:</th>
            <th class="data">July 04, 2023</th>
        </tr>
    </table>
	<div class="login">
	<h1>Sign In</h1>
	
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="username"></label>
			<input type="text" id="username" name="username" placeholder="Your Username" required><br><br>

			<label for="password"></label>
			<input type="text" id="password" name="password" placeholder="Your password" required><br><br>

			<input type="submit" value="Submit">
		</form>
		<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        $errors = [];

        // Password must contain a maximum of 8 characters only.
        if (strlen($password) > 8) {
            $errors[] = '<p class="invalid">Password must contain a maximum of 8 characters only.</p>';
        }

        // Special characters are not allowed. Password must contain alphanumeric only.
        if (!ctype_alnum($password)) {
            $errors[] = '<p class="invalid">Special characters are not allowed.</p>';
        }
		
		if ((preg_match('@[0-9]@', $password) == 0)){
			$errors[] = '<p class="invalid">Password must contain numbers.</p>';
		}
		
		if (!preg_match_all("/[a-zA-Z]/", $password)) {
			$errors[] = '<p class="invalid">Password must contain letters.</p>';
		}
		
		// Password must contain exactly 2 uppercase letters.
		if (preg_match_all("/[A-Z]/", $password) !== 2) {
			$errors[] = '<p class="invalid">Password must contain exactly 2 uppercase letters.</p>';
		}
		
        // The password must not be similar to the username.
        if (stristr($password, $username)) {
            $errors[] = '<p class="invalid">The password must not be similar to the username.</p>';
        }

        if (empty($errors)) {
            echo '<p class="valid">Strong password.</p>';
        } else {
            foreach ($errors as $error) {
                echo "$error";
            }
        }
    }
    ?>
	</div>
</body>
</html>
		
		