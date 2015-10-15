<?php
if(isset($_POST['add'],$_POST['title'], $_POST['category'], $_POST['description'], $_POST['text'])) {
	mysqli_query($link,"
		INSERT INTO `news` SET
		`title`='".mysqli_real_escape_string($link, $_POST['title'])."',
		`category`='".mysqli_real_escape_string($link, $_POST['category'])."',
		`description`='".mysqli_real_escape_string($link, $_POST['description'])."',
		`text`='".mysqli_real_escape_string($link, $_POST['text'])."',
		`date`= NOW()

		") or exit(mysqli_error());
	$_SESSION['info']='THE NEWS WAS ADDED';
	header("Location: index.php?modules=main&page=main");
	exit();
}



?>