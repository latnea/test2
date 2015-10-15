<?php 


if(isset($_SESSION['fprc71'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c61` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc72'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c62` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc73'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c63` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}



if(isset($_SESSION['fprc61'], $_SESSION['fprc62'],$_SESSION['fprc63'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c51` =1 OR `c52` =1 OR `c53` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc61'], $_SESSION['fprc62'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c51` =1 OR `c52` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc61'], $_SESSION['fprc63'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c51` =1 OR `c53` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc62'], $_SESSION['fprc63'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c52` =1 OR `c53` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc61'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `c61` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc62'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c62` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc63'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c63` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

// ---------------------------------------------------------

if(isset($_SESSION['fprc61'])) {
						$compcritc61=mysqli_query($link,"
						SELECT * FROM `price3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc62'])) {
						$compcritc62=mysqli_query($link,"
						SELECT * FROM `price3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc63'])) {
						$compcritc63=mysqli_query($link,"
						SELECT * FROM `price3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}



if(isset($_POST['getfiltrprc61'], $_POST['fprc61'])) {
			$_SESSION['fprc71']='';

		header("Location: index.php?modules=print6&page=print6");
		exit();
	}
if(isset($_POST['getfiltrprc61'], $_POST['fprc62'] )) {
		$_SESSION['fprc72']='';


		
		header("Location: index.php?modules=print6&page=print6");
		exit();
	}
if(isset($_POST['getfiltrprc61'], $_POST['fprc63'] )) {
$_SESSION['fprc73']='';

			
		header("Location: index.php?modules=print6&page=print6");
		exit();
	}