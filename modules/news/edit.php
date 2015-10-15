<?php

if(isset($_POST['title'])) {
	$row['title'] = $_POST['title'];
}

if(isset($_POST['update'], $_POST['title'], $_POST['category'], $_POST['description'], $_POST['text'])) {
	mysqli_query($link,"
		UPDATE `news`
		SET 
		`title`='".mysqli_real_escape_string($link, $_POST['title'])."',
		`category`='".mysqli_real_escape_string($link, $_POST['category'])."',
		`description`='".mysqli_real_escape_string($link, $_POST['description'])."',
		`text`='".mysqli_real_escape_string($link, $_POST['text'])."',
		`date`= NOW()
		WHERE `id` = ".$_GET['id']."
		") or exit(mysqli_error());
	$_SESSION['info3']='THE NEWS WAS UPDATED';
	header("Location: index.php?modules=urok23&page=urok23");
	exit();
}


$news=mysqli_query($link,"
	SELECT *
	FROM `news`
	WHERE `id`=".(int)$_GET['id']."
	LIMIT 1
	") or exit(mysqli_error());
if(!mysqli_num_rows($news)){
	$_SESSION['info4'] = 'THIS NEWS ARE EPSOND';
	header("Location: index.php?modules=urok23&page=urok23");
	exit();
}

$row=mysqli_fetch_assoc($news);
?>