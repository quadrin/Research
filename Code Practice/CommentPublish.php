<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  <h1>Comment Something:</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="comment" size="50">
    <input type="submit">
  </form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
    if (empty($comment)) {
      echo "Error: Comment Blank";
    } else {
		echo $comment;
    }
  }
?>
</body>
</html>
