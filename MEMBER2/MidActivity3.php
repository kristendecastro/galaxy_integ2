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
		.des{
			margin:0px 100px;
			display: flex;
			text-align:justify;
			background-color: rgba(255, 183, 206, 0.8);
			padding:25px;
		}
		.des p{
			text-align:justify;
		}
		.desi{
			margin:0px 100px;
			display: flex;
			text-align:justify;
			font-size: 22px;
			background-color: rgba(255, 183, 206, 0.8);
			color: #000;
			font-family: Poppins, sans-serif;
			padding:25px;			
		}
		.desi p{
			text-align:justify;
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
	
	<h4>DESIDERATA</h4>
<div class="des">

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go placidly amid the noise and the haste, and remember what peace there may be in silence. As far as possible, without surrender, be on good terms with all persons. Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story. Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep interested in your own career, however humble; it is a real possession in the changing fortunes of time. Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass. Take kindly the counsel of the years, gracefully surrendering the things of youth. Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no doubt the universe is unfolding as it should. Therefore, be at peace with God, whatever you conceive Him to be. And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken dreams, it is still a beautiful world. Be cheerful. Strive to be happy.</p>
</div>
<br>
<br>


<div class="desi">
<?php

$text = "Go placidly amid the noise and the haste, and remember what peace there may be in silence. As far as possible, without surrender, be on good terms with all persons. Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story. Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep interested in your own career, however humble; it is a real possession in the changing fortunes of time. Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass. Take kindly the counsel of the years, gracefully surrendering the things of youth. Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no doubt the universe is unfolding as it should. Therefore, be at peace with God, whatever you conceive Him to be. And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken dreams, it is still a beautiful world. Be cheerful. Strive to be happy.";

// How many words?
$wordCount = str_word_count($text);


// Count occurrences of specific articles
$aCount = substr_count(strtolower($text), ' a ');
$anCount = substr_count(strtolower($text), ' an ');
$theCount = substr_count(strtolower($text), ' the ');

// Change "the" to "THE"
$modifiedText = str_ireplace(' the ', ' THE ', $text);

// Output the words ending with "ly"
preg_match_all('/\b\w+ly\b/i', $text, $wordsEndingInLy);

// Display results
echo "1. How many words?\nThe poem contains " . $wordCount . " words.\n";
echo "</br>";  
echo "2. How many articles present? ";
echo "</br>";  
echo "a = " . $aCount;
echo "</br>";  
echo "an = " . $anCount;
echo "</br>";  
echo "the = " . $theCount;
echo "</br>";  
echo "TOTAL = " . ($aCount + $anCount + $theCount);
echo "</br>";
echo "</br>"; 
echo "3. Change'the' to 'THE'";
echo "</br>";  
echo "DESIDERATA";
echo "</br>";
echo $modifiedText;  
echo "</br>";
echo "</br>";
echo "4. Words ending with 'ly': ";
echo "</br>";  
foreach ($wordsEndingInLy[0] as $word) { 
    echo $word . " ";
	echo "</br>";
}

?>
</div>
<br><br><br>
</body>
</html>