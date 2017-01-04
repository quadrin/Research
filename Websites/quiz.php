<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>
  <link rel="stylesheet" type="text/css" href="website.css">
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		What continent are you from? <br>
		<input type="radio" name="quiz" value="Asia">Asia<br>
		<input type="radio" name="quiz" value="Africa">Africa<br>
		<input type="radio" name="quiz" value="Australia">Australia<br>
		<input type="radio" name="quiz" value="Europe">Europe<br>
		<input type="radio" name="quiz" value="North America">North America<br>
		<input type="radio" name="quiz" value="South America">South America<br>
		<input type="radio" name="quiz" value="Antarctica">Antarctica<br>
		<input type="submit">
	</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["quiz"];
    if ($answer == ) {
      
    } elseif() {
      
    } elseif() {
      
    } elseif() {
      
    } elseif() {
      
    } elseif() {
      
    } else {
      
    }
  }
?>
</body>
</html>
