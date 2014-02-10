
<!DOCTYPE html>

<html>
<head>
 <title>A Survey To Take</title>
 <link rel="stylesheet" type="text/css" href="../css/survey.css">
</head>
<body>
<div class="black">
<a href="assignments.html">Back To Assignments</a>
</div>
<div class="survey">
<h2>Welcome! Please take this short survey.</h2>
<form action="surveysphp.php" method="post">
<div class="question">
What is your favorite TV Show?<br>
<input type="radio" name="tvshow" value="Doctor Who">Doctor Who<br>
<input type="radio" name="tvshow" value="Pretty Little Liars">Pretty Little Liar<br>
<input type="radio" name="tvshow" value="Baby Daddy">Babby Daddy<br>
<input type="radio" name="tvshow" value="Hannah Montana">Hannah Montana<br>
<input type="radio" name="tvshow" value="Psych">Psych<br>
</div>
<br />
<div class="question">
Are you male or female?<br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="Female">Female<br>
</div>
<br />
<div class="question">
Are you a Mac, Windows, or Linux person?<br>
<input type="radio" name="system" value="Mac">Mac<br>
<input type="radio" name="system" value="Windows">Windows<br>
<input type="radio" name="system" value="Linux">Linux<br>
<input type="radio" name="system" value="Other">Other<br>
</div>
<br />
<div class="question">
What is your favorite Disney Movie?<br>
<input type="radio" name="movie" value="Frozen">Frozen<br>
<input type="radio" name="movie" value="Beauty and the Beast">Beauty and the Beast<br>
<input type="radio" name="movie" value="The Little Mermaid">The Little Mermaid<br>
<input type="radio" name="movie" value="Snow White">Snow White<br>
<input type="radio" name="movie" value="Tangled">Tangled<br>
<input type="radio" name="movie" value="Princess and the Frog">Princess and the Frog<br>
</div>
<br />
<input type="submit" value="Submit!">
<input type="submit" value="View Results">

</form>
</div>
</body>
</html>