<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<style>
	* {
		box-sizing: border-box;
	}
	/**TABLE**/
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
		
	#content {
		background-color: #f5f2e8;
		width: 80%;
		margin-top: 50px;
		margin-left: auto;
		margin-right: auto;
		padding-top: 20px;
		padding-bottom: 30px;
		border-radius: 25px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	#content:hover {
		transform: scale(1.10);
	}
	/* Set display preferences for poem. */

	.poem {
	  width: 375px;
	  margin: auto;
	  /*padding: 10px 0;*/
	  font-family: Baskerville;
	  font-size: 14px;
	  text-align: left;
	}

	/* Add spacing to each stanza. */

	p {
	  margin-bottom: 15px;
	  line-height: 1.45em;
	}

	/* Set type preferences for poem's headings.  */

	.poem h1,
	.poem h2 {
	  font-family: Baskerville;
	  font-weight: normal;
	  text-align: center;
	}

	/* Set display preferences for title of the poem. */

	.poem h1 {
	  font-size: 34px;
	  margin-bottom: 10px;
	}

	/* Set display preferences for name of the poet. */

	.poem h2 {
	  font-size: 18px;
	  font-style: italic;
	  margin-bottom: 30px;
	}

	/* Make the first letter a drop cap/initial. */

	.poem h2+p:first-letter {
	  float: left;
	  font-size: 40px;
	  margin: 12px 5px 0px 0px;
	}

	/* Set display preferences for first line of each stanza. */

	.poem p:first-line {
	  font-variant: small-caps;
	  letter-spacing: 1px;
	}

	/* Add margin and padding at end of the poem. */

	.poem p:last-child {
	  margin-bottom: 15px;
	  padding-bottom: 15px;
	}
	/**SIDEBAR**/
	.sidenav {
		width: 200px;
		position: fixed;
		z-index: 1;
		bottom: 40px;
		right: 0px;
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
		
	/**OUTPUT**/
	.output {
		margin-top: 100px;
		width: 80%;
		margin-left: 20px;
		margin-right: auto;

	}
	.question {
		font-family: Baskerville;
		font-size: 18px;

	}
	.answer {
		font-size: 16px;
	}
	.question-div {
		margin-bottom: 50px;
		width: 90%;
		
	}
	html,
	body {
	  height: 100%;
	  background-color: white;
	  scroll-behavior: smooth;
	}
	/* Create two equal columns that floats next to each other */
	.column {
	  float: left;
	  width: 50%;
	  padding: 10px;
	  height: 300px; /* Should be removed. Only for demonstration */
	}
	.row{
		margin-top: 20px;
		padding-bottom: 100px;
	}
	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: none;
	  clear: both;

	}
</style>
<title>MidActivity3</title>
</head>

<body>

	<!--SIDENAV-->
	<div class="sidenav">
	  <a href="#top">Go to Top</a>
	</div>
	
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

<div class="row">
	<div class="column">
		<div id="content">
			<div class="poem">

			<h1>Desiderata</h1>
			<h2>by Max Ehrmann, 1927</h2>
		  
				<p>
					Go placidly amid the noise and haste,<br>
					and remember what peace there may be in silence.<br>
					As far as possible without surrender<br>
					be on good terms with all persons.<br>
					Speak your truth quietly and clearly;<br>
					and listen to others,<br>
					even the dull and the ignorant;<br>
					they too have their story.<br>
				</p>

				<p>
					Avoid loud and aggressive persons,<br>
					they are vexations to the spirit.<br>
					If you compare yourself with others,<br>
					you may become vain and bitter;<br>
					for always there will be greater and lesser persons than yourself.<br>
					Enjoy your achievements as well as your plans.<br>
				</p>

				<p>
					Keep interested in your own career, however humble;<br>
					it is a real possession in the changing fortunes of time.<br>
					Exercise caution in your business affairs;<br>
					for the world is full of trickery.<br>
					But let this not blind you to what virtue there is;<br>
					many persons strive for high ideals;<br>
					and everywhere life is full of heroism.<br>
				</p>

				<p>
					Be yourself.<br>
					Especially, do not feign affection.<br>
					Neither be cynical about love;<br>
					for in the face of all aridity and disenchantment<br>
					it is as perennial as the grass.<br>
				</p>

				<p>
					Take kindly the counsel of the years,<br>
					gracefully surrendering the things of youth.<br>
					Nurture strength of spirit to shield you in sudden misfortune.<br>
					But do not distress yourself with dark imaginings.<br>
					Many fears are born of fatigue and loneliness.<br>
					Beyond a wholesome discipline,<br>
					be gentle with yourself.<br>
				</p>

				<p>
					You are a child of the universe,<br>
					no less than the trees and the stars;<br>
					you have a right to be here.<br>
					And whether or not it is clear to you,<br>
					no doubt the universe is unfolding as it should.<br>
				</p>

				<p>
					Therefore be at peace with God,<br>
					whatever you conceive Him to be,<br>
					and whatever your labors and aspirations,<br>
					in the noisy confusion of life keep peace with your soul.<br>
				</p>

				<p>
					With all its sham, drudgery, and broken dreams,<br>
					it is still a beautiful world.<br>
					Be cheerful.<br>
					Strive to be happy.<br>
				</p>
		</div>
		</div>
	</div>

	<?php
	$Desiderata = "DESIDERATA 
	Go placidly amid the noise and the haste,
	and remember what peace there may be in silence.
	As far as possible, without surrender, be on good terms with all persons.
	Speak your truth quietly and clearly;
	and listen to others,
	even to the dull and the ignorant;
	they too have their story.

	Avoid loud and aggressive persons; 
	they are vexatious to the spirit. 
	If you compare yourself with others,
	you may become vain or bitter,
	for always there will be greater and lesser persons than yourself.
	Enjoy your achievements as well as your plans.

	Keep interested in your own career, however humble;
	it is a real possession in the changing fortunes of time.
	Exercise caution in your business affairs,
	for the world is full of trickery.
	But let this not blind you to what virtue there is; 
	many persons strive for high ideals,
	and everywhere life is full of heroism.

	Be yourself. 
	Especially do not feign affection.
	Neither be cynical about love;
	for in the face of all aridity and disenchantment,
	it is as perennial as the grass.

	Take kindly the counsel of the years, 
	gracefully surrendering the things of youth.
	Nurture strength of spirit to shield you in sudden misfortune.
	But do not distress yourself with dark imaginings.
	Many fears are born of fatigue and loneliness.
	Beyond a wholesome discipline, be gentle with yourself.

	You are a child of the universe no less than the trees and the stars;
	you have a right to be here.
	And whether or not it is clear to you,
	no doubt the universe is unfolding as it should.

	Therefore be at peace with God,
	whatever you conceive Him to be.
	And whatever your labors and aspirations,
	in the noisy confusion of life,
	keep peace in your soul.
	With all its sham,
	drudgery and broken dreams,
	it is still a beautiful world.
	Be cheerful. Strive to be happy.";
	?>

	<div class="column">
		<!--String Functions-->
		<div class="output">
			<div class="question-div">
				<p class="question">
					1.) How many words are there in the poem <i><b>Desiderata</b></i>?
				</p>
				<p class="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					There are <b><?php echo str_word_count($Desiderata); ?></b> total words in the poem.
				</p>
			</div>
			<div class="question-div">
				<p class="question">
					2.) How many articles are present?
				</p>
				<p class="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					a = <b><?php echo substr_count($Desiderata, " a "); ?></b>
				</p>
				<p class="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					an = <b><?php echo substr_count($Desiderata, " an "); ?></b>
				</p>
				<p class="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					the = <b><?php echo substr_count($Desiderata, " the "); ?></b>
				</p>
				<p class="answer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					TOTAL = <b><?php echo substr_count($Desiderata, " a ") + substr_count($Desiderata, " an ") + substr_count($Desiderata, " the "); ?></b>
				</p>
			</div>
			<div class="question-div">
				<p class="question">
					3.) Change the words "the" to "THE".
				</p>
				<p class="answer"><blockquote>
					<?php echo str_replace(" the "," THE ", $Desiderata); ?>
				</p></blockquote>
			</div>
			<div class="question-div">
				<p class="question">
					4.) Words ending with "ly".
				</p>
				<p class="answer"><blockquote><b>
				<?php
					function wordsffound($Desiderata) {
						$words = explode(' ', $Desiderata);
						$findwords = [];

						foreach ($words as $word) {
							$cleanWord = preg_replace('/[^a-zA-Z]/', '', $word);
							if (strtolower(substr($cleanWord, -2)) === 'ly') {
								$findwords[] = $cleanWord;
							}
						}

						return $findwords;
					}
					$wordfound = wordsffound($Desiderata);
					foreach ($wordfound as $word) {
						echo $word . "<br><br>";
					}
				?>
				</p></blockquote></b>
			</div>
		</div>
	</div>
</div>
</body>
</html>

