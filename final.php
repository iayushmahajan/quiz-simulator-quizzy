<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Quizzy</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>Quizzy</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2 id="done">You're Done!</h2>
				<p>You have successfully submitted the test!</p>
				<p>Your Score: <?php echo $_SESSION['score']; ?></p>
				<a href="question.php?n=1" class="start">Try Again!</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2022, Quizzy
		</div>
	</footer>
</body>
</html>
<?php session_destroy(); ?>