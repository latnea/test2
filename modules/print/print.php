<?php 



 //---------------------------------------- VIVOD SPISKA PREDPRIJATIJ
	

function IsIsset ($SES) {
	if(isset($SES)) {
	return true;
	}
}
if(isset($_SESSION['p']) AND IsIsset($_SESSION['p'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `ep` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['s']) AND IsIsset($_SESSION['s'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `es` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['m']) AND IsIsset($_SESSION['m'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `em` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['pr']) AND IsIsset($_SESSION['pr'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `spr` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['sk']) AND IsIsset($_SESSION['sk'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `ssk` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['mo']) AND IsIsset($_SESSION['mo'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `smo` =1 
				") or exit(mysqli_error());
}

/*

// 3s + 3e

if(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `ep` =1 OR `es` =1 OR `em` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

// ----- 3s + 2e

} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['m'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `em` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


// 3e + 2s


} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `ep` =1 OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'],$_SESSION['mo'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `smo` =1 OR `ep` =1 OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'],$_SESSION['sk'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1 OR `ssk` =1 OR `ep` =1 OR `em` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


// 3s + 1e


} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['p'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'],$_SESSION['sk'], $_SESSION['mo'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1 OR `ssk` =1 OR `smo` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


// 3e + 1s

} elseif(isset($_SESSION['pr'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ep` =1 OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['sk'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `ep` =1 OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'], $_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ep` =1 OR `em` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

// 2e + 2s

} elseif(isset($_SESSION['pr'], $_SESSION['sk'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ssk` =1 OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['sk'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ssk` =1 OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['sk'], $_SESSION['m'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ssk` =1 OR `em` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);





} elseif(isset($_SESSION['pr'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `smo` =1 OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `smo` =1 OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['mo'], $_SESSION['m'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `smo` =1 OR `em` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);



} elseif(isset($_SESSION['sk'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `smo` =1 OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['sk'], $_SESSION['mo'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `smo` =1 OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['sk'], $_SESSION['mo'], $_SESSION['m'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `smo` =1 OR `em` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

// -- 2s + 1e

} elseif(isset($_SESSION['pr'], $_SESSION['sk'], $_SESSION['p'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ssk` =1 OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['sk'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ssk` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['sk'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ssk` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


//----


} elseif(isset($_SESSION['pr'], $_SESSION['mo'], $_SESSION['p'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `smo` =1 OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['mo'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `smo` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['pr'], $_SESSION['mo'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `smo` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

// ----

} elseif(isset($_SESSION['mo'], $_SESSION['sk'], $_SESSION['p'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ssk` =1 OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'], $_SESSION['sk'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ssk` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'], $_SESSION['sk'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ssk` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


// -- 2e + 1s


} elseif(isset($_SESSION['pr'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['sk'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'], $_SESSION['p'], $_SESSION['s'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ep` =1 OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);



} elseif(isset($_SESSION['pr'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['sk'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'], $_SESSION['p'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ep` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);




} elseif(isset($_SESSION['pr'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['sk'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['mo'], $_SESSION['s'], $_SESSION['m'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `es` =1 OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


//---- 1 e + 1s

	} elseif(isset($_SESSION['p'], $_SESSION['pr'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

	} elseif(isset($_SESSION['p'], $_SESSION['sk'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

	} elseif(isset($_SESSION['p'], $_SESSION['mo'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `ep` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


} elseif(isset($_SESSION['s'], $_SESSION['pr'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['s'], $_SESSION['sk'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['s'], $_SESSION['mo'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['m'], $_SESSION['pr'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `spr` =1  OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['m'], $_SESSION['sk'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ssk` =1  OR `es` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);

} elseif(isset($_SESSION['m'], $_SESSION['mo'])) {
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `smo` =1  OR `em` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);


// 3s------

} elseif(isset($_SESSION['mo'], $_SESSION['pr'] , $_SESSION['sk'])) {
		$comppr1=mysqli_query($link,"
			SELECT * FROM `comp3D`
			WHERE  `smo` = 1 OR `spr`=1 OR `ssk`=1
			") or exit(mysqli_error());
		//unset($_SESSION['mo']);
		//unset($_SESSION['pr']);

// 2s------

		} elseif(isset($_SESSION['mo'], $_SESSION['pr'])) {
		$comppr1=mysqli_query($link,"
			SELECT * FROM `comp3D`
			WHERE  `smo` = 1 OR `spr`=1
			") or exit(mysqli_error());
		//unset($_SESSION['mo']);
		//unset($_SESSION['pr']);

		} elseif(isset($_SESSION['mo'], $_SESSION['sk'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `smo` = 1 OR `ssk`=1
					") or exit(mysqli_error());
				//unset($_SESSION['mo']);
				//unset($_SESSION['sk']);

		} elseif(isset($_SESSION['pr'], $_SESSION['sk'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `spr` = 1 OR `ssk`=1
					") or exit(mysqli_error());
				//unset($_SESSION['pr']);
				//unset($_SESSION['sk']);

// 1s------

		} elseif(isset($_SESSION['pr'])) {
			$comppr1=mysqli_query($link, "SELECT * FROM `comp3D` WHERE `spr`=1 ") or exit(mysqli_error());
			//unset($_SESSION['pr']);
		}
		elseif(isset($_SESSION['sk'])) {
			$comppr1=mysqli_query($link, "SELECT * FROM `comp3D` WHERE `ssk`=1 ") or exit(mysqli_error());
			//unset($_SESSION['sk']);
		}
		elseif(isset($_SESSION['mo'])) {
			$comppr1=mysqli_query($link, "SELECT * FROM `comp3D` WHERE `smo`=1 ") or exit(mysqli_error());
		//	unset($_SESSION['mo']);
		}


 -------------------------------3e----------------------------------------

if(isset($_SESSION['p'], $_SESSION['s'], $_SESSION['m'])) {								
		$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `ep` =1 OR `es` =1 OR `em` =1										
				") or exit(mysqli_error());
		//unset($_SESSION['p']);	
		//unset($_SESSION['s']);
		//unset($_SESSION['m']);

// ----- 2e

		} elseif(isset($_SESSION['m'], $_SESSION['p'])) {								
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `ep` = 1 OR `em`=1 								
					") or exit(mysqli_error());
				//unset($_SESSION['m']);
				//unset($_SESSION['p']);

		} elseif(isset($_SESSION['m'], $_SESSION['s'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `es` = 1 OR `em`=1
					") or exit(mysqli_error());
				//unset($_SESSION['m']);
				//unset($_SESSION['s']);

		} elseif(isset($_SESSION['p'], $_SESSION['s'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `ep` = 1 OR `es`=1
					") or exit(mysqli_error());
				//unset($_SESSION['p']);
				//unset($_SESSION['s']);

// ------1e

		} elseif(isset($_SESSION['p'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `ep` = 1
					") or exit(mysqli_error());
				
		} elseif(isset($_SESSION['s'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `es` = 1
					") or exit(mysqli_error());
				//unset($_SESSION['s']);

		} elseif(isset($_SESSION['m'])) {
				$comppr1=mysqli_query($link,"
					SELECT * FROM `comp3D`
					WHERE  `em` = 1
					") or exit(mysqli_error());
				//unset($_SESSION['m']);
		}


 ------------------------------------------ VIVOD SPISKA SFER PRIMENENIJA

*/
if(isset($_SESSION['pr'])) {
		$compcrit1=mysqli_query($link,"
		SELECT * FROM `sfera3D`
		") or exit(mysqli_error());
		//unset($_SESSION['pr']);
	}

 /*------------------------------------------ PROVERKA VIBORA FLAZHKOV PO UMOLCHANIJU-------------------------------------------------------------------*/
function IsChecked ($chkname, $value) {
	if(!empty($_POST[$chkname])) {
		foreach($_POST[$chkname] as $chkval) {
			if ($chkval==$value) {
				return true;
			}
		}
	}
	return false;
}

if(IsChecked ('choice2', 'f2p')) { 
	$_SESSION['p']='';
	header("Location: index.php?modules=print&page=print");
}
if (IsChecked('choice2', 'f2s')) { 
	$_SESSION['s']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice2', 'f2m')) { 
	$_SESSION['m']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice2', 'f21pr')) { 
	$_SESSION['pr']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice2', 'f21mo')) { 
	$_SESSION['mo']='';
	header("Location: index.php?modules=print&page=print");
}
if(IsChecked ('choice2', 'f21sk')) { 
	$_SESSION['sk']='';
	header("Location: index.php?modules=print&page=print");
}

if(isset($_POST['getfiltr2'])){
	if(empty($choice2)) {
		$fail = 'Вы ничего не выбрали';
	}
}


 // --- VIVOD POVTORNO PREDPRIJATIJ-----------------------------------------------------------


/*

function IsIsset1 ($SES) {
	if(isset($SES)) {
	return true;
	}
}
if(isset($_SESSION['p']) AND IsIsset1($_SESSION['p'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `ep` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['s']) AND IsIsset1($_SESSION['s'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `es` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['m']) AND IsIsset1($_SESSION['m'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `em` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['pr']) AND IsIsset1($_SESSION['pr'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `spr` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['sk']) AND IsIsset1($_SESSION['sk'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `ssk` =1 
				") or exit(mysqli_error());
}
elseif(isset($_SESSION['mo']) AND IsIsset1($_SESSION['mo'])) {
	$comppr1=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `smo` =1 
				") or exit(mysqli_error());
}




/*


if(isset($_POST['getfiltr2'] , $_POST['f1p'],$_POST['f1s'], $_POST['f1m'] )) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		header("Location: index.php?modules=print&page=print");
		exit(); 
		} elseif(isset($_POST['getfiltr2'] , $_POST['f1p'], $_POST['f1s'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				header("Location: index.php?modules=print&page=print");
				exit(); 
		} elseif(isset($_POST['getfiltr2'] , $_POST['f1p'], $_POST['f1m'])) {
				$_SESSION['p']='';
				$_SESSION['m']='';
				header("Location: index.php?modules=print&page=print");
				exit(); 
		} elseif(isset($_POST['getfiltr2'] , $_POST['f1m'], $_POST['f1s'])) {
				$_SESSION['m']='';
				$_SESSION['s']='';
				header("Location: index.php?modules=print&page=print");
				exit(); 

					} elseif(isset($_POST['getfiltr2'] , $_POST['f1p'])) {
							$_SESSION['p']='';
							header("Location: index.php?modules=print&page=print");
							exit(); 
					} elseif(isset($_POST['getfiltr2'] , $_POST['f1s'])) {
							$_SESSION['s']='';
							header("Location: index.php?modules=print&page=print");
							exit();
					} elseif(isset($_POST['getfiltr2'] , $_POST['f1m'])) {
							$_SESSION['m']='';
							header("Location: index.php?modules=print&page=print");
							exit();  

							} elseif(isset($_POST['getfiltr2'] , $_POST['f1pr'], $_POST['f1sk'], $_POST['f1mo'])) {
									$_SESSION['pr']='';
									$_SESSION['sk']='';
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit(); 
								} elseif(isset($_POST['getfiltr2'] , $_POST['f1pr'], $_POST['f1sk'])) {
										$_SESSION['pr']='';
										$_SESSION['sk']='';
										header("Location: index.php?modules=print&page=print");
										exit(); 
								} elseif(isset($_POST['getfiltr2'] , $_POST['f1pr'], $_POST['f1mo'])) {
										$_SESSION['pr']='';
										$_SESSION['mo']='';
										header("Location: index.php?modules=print&page=print");
										exit();
								} elseif(isset($_POST['getfiltr2'] , $_POST['f1mo'], $_POST['f1sk'])) {
										$_SESSION['mo']='';
										$_SESSION['sk']='';
										header("Location: index.php?modules=print&page=print");
										exit(); 

									} elseif(isset($_POST['getfiltr2'] , $_POST['f1pr'])) {
											$_SESSION['pr']='';
											header("Location: index.php?modules=print&page=print");
											exit(); 
									} elseif(isset($_POST['getfiltr2'] , $_POST['f1sk'])) {
											$_SESSION['sk']='';
											header("Location: index.php?modules=print&page=print");
											exit(); 
									} elseif(isset($_POST['getfiltr2'] , $_POST['f1mo'])) {
											$_SESSION['mo']='';
											header("Location: index.php?modules=print&page=print");
											exit(); 
									}


// ------------------------------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------

*/

// VIBOR SFER PRIMENENIJA

function IsChecked2 ($chkname, $value) {
	if(!empty($_POST[$chkname])) {
		foreach($_POST[$chkname] as $chkval) {
			if ($chkval==$value) {
				return true;
			}
		}
	}
	return false;
}

if(IsChecked2 ('choicecrit1', 'fprc11')) { 
	$_SESSION['prc11']='';
	header("Location: index.php?modules=print2&page=print2");
}
if(IsChecked2 ('choicecrit1', 'fprc12')) { 
	$_SESSION['prc12']='';
	header("Location: index.php?modules=print2&page=print2");
}
if(IsChecked2 ('choicecrit1', 'fprc13')) { 
	$_SESSION['prc13']='';
	header("Location: index.php?modules=print2&page=print2");
}
if(IsChecked2 ('choicecrit1', 'fprc14')) { 
	$_SESSION['prc14']='';
	header("Location: index.php?modules=print2&page=print2");
}
if(IsChecked2 ('choicecrit1', 'fprc15')) { 
	$_SESSION['prc15']='';
	header("Location: index.php?modules=print2&page=print2");
}
if(IsChecked2 ('choicecrit1', 'fprc16')) { 
	$_SESSION['prc16']='';
	header("Location: index.php?modules=print2&page=print2");
}
if(IsChecked2 ('choicecrit1', 'fprc17')) { 
	$_SESSION['prc17']='';
	header("Location: index.php?modules=print2&page=print2");
}

if(isset($_POST['getfiltrprc1'])){
	if(empty($choicecrit1)) {
		$fail = 'Вы ничего не выбрали';
	}
}





/*

if(isset($_POST['getfiltrprc1'], $_POST['fprc11'])) {
		$_SESSION['prc11']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}
elseif(isset($_POST['getfiltrprc1'], $_POST['fprc12'])) {
		$_SESSION['prc12']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}
elseif(isset($_POST['getfiltrprc1'], $_POST['fprc13'])) {
		$_SESSION['prc13']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}
elseif(isset($_POST['getfiltrprc1'], $_POST['fprc14'])) {
		$_SESSION['prc14']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}
elseif(isset($_POST['getfiltrprc1'], $_POST['fprc15'])) {
		$_SESSION['prc15']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}
elseif(isset($_POST['getfiltrprc1'], $_POST['fprc16'])) {
		$_SESSION['prc16']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}
elseif(isset($_POST['getfiltrprc1'], $_POST['fprc17'])) {
		$_SESSION['prc17']='';
		header("Location: index.php?modules=print2&page=print2");
		exit();
}





// ------------------------------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------------------------------







// ------ 3e + 3s

if(isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();
//----- ------ 2e + 3s

	} elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
		$_SESSION['p']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

		//----- ------ 1e + 3s

		    }elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
				$_SESSION['p']='';
				$_SESSION['pr']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
				$_SESSION['s']='';
				$_SESSION['pr']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
				$_SESSION['m']='';
				$_SESSION['pr']='';
				$_SESSION['sk']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();


// ------ 3e + 2s

	}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['sk']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3mo'])) {
		$_SESSION['p']='';
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['pr']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

	}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3sk'], $_POST['f3mo'])) {
		$_SESSION['s']='';
		$_SESSION['m']='';
		$_SESSION['p']='';
		$_SESSION['sk']='';
		$_SESSION['mo']='';
		header("Location: index.php?modules=print&page=print");
		exit();

// ------ 3e + 1s

			}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				$_SESSION['m']='';
				$_SESSION['pr']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3sk'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				$_SESSION['m']='';
				$_SESSION['sk']='';
				header("Location: index.php?modules=print&page=print");
				exit();

			}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f2m'], $_POST['f3mo'])) {
				$_SESSION['s']='';
				$_SESSION['m']='';
				$_SESSION['p']='';
				$_SESSION['mo']='';
				header("Location: index.php?modules=print&page=print");
				exit();


// ------ 2e + 2s

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f3pr'], $_POST['f3sk'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f3pr'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['pr']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'],  $_POST['f3sk'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();



					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'],  $_POST['f3sk'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();



					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3mo'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'],  $_POST['f3sk'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();



// ----2e + 1s	-------

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f3pr'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'], $_POST['f3sk'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2s'],  $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['s']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'], $_POST['f3pr'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'], $_POST['f3sk'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f2m'],  $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['m']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'], $_POST['f3pr'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'], $_POST['f3sk'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f2m'],  $_POST['f3mo'])) {
						$_SESSION['s']='';
						$_SESSION['m']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


// ------2s + 1e	-------

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3pr'], $_POST['f3sk'])) {
						$_SESSION['p']='';
						$_SESSION['sk']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3pr'], $_POST['f3sk'])) {
						$_SESSION['s']='';
						$_SESSION['pr']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3sk'])) {
						$_SESSION['m']='';
						$_SESSION['sk']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3pr'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['mo']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3pr'], $_POST['f3mo'])) {
						$_SESSION['s']='';
						$_SESSION['mo']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3pr'], $_POST['f3mo'])) {
						$_SESSION['m']='';
						$_SESSION['mo']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3sk'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['sk']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3sk'], $_POST['f3mo'])) {
						$_SESSION['s']='';
						$_SESSION['mo']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3sk'], $_POST['f3mo'])) {
						$_SESSION['m']='';
						$_SESSION['mo']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();




//-------1s + 1e	-------


					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3pr'])) {
						$_SESSION['p']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3sk'])) {
						$_SESSION['p']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2p'], $_POST['f3mo'])) {
						$_SESSION['p']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3pr'])) {
						$_SESSION['s']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3sk'])) {
						$_SESSION['s']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2s'], $_POST['f3mo'])) {
						$_SESSION['s']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();


					}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3pr'])) {
						$_SESSION['m']='';
						$_SESSION['pr']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3sk'])) {
						$_SESSION['m']='';
						$_SESSION['sk']='';
						header("Location: index.php?modules=print&page=print");
						exit();

					}elseif (isset($_POST['getfiltr2'], $_POST['f2m'], $_POST['f3mo'])) {
						$_SESSION['m']='';
						$_SESSION['mo']='';
						header("Location: index.php?modules=print&page=print");
						exit();

		
//-------3 e	-------


} elseif(isset($_POST['getfiltr2'] , $_POST['f2p'], $_POST['f2s'], $_POST['f2m'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				$_SESSION['m']='';
				header("Location: index.php?modules=print&page=print");
				exit();

//-------2 e	-------
		
		} elseif(isset($_POST['getfiltr2'] , $_POST['f2p'], $_POST['f2m'])) {
				$_SESSION['p']='';
				$_SESSION['m']='';
				header("Location: index.php?modules=print&page=print");
				exit();

		} elseif(isset($_POST['getfiltr2'] , $_POST['f2p'], $_POST['f2s'])) {
				$_SESSION['p']='';
				$_SESSION['s']='';
				header("Location: index.php?modules=print&page=print");
				exit();

		} elseif(isset($_POST['getfiltr2'] , $_POST['f2m'], $_POST['f2s'])) {
				$_SESSION['m']='';
				$_SESSION['s']='';
				header("Location: index.php?modules=print&page=print");
				exit();

		//-------1 e	-------
			
					} elseif(isset($_POST['getfiltr2'] , $_POST['f2p'])) {
							$_SESSION['p']='';
							header("Location: index.php?modules=print&page=print");
							exit();

					} elseif(isset($_POST['getfiltr2'] , $_POST['f2m'])) {
							$_SESSION['m']='';
							header("Location: index.php?modules=print&page=print");
							exit();

					} elseif(isset($_POST['getfiltr2'] , $_POST['f2s'])) {
					$_SESSION['s']='';
					header("Location: index.php?modules=print&page=print");
					exit();


				//-------3s	-------

							}	elseif(isset($_POST['getfiltr2'] , $_POST['f3pr'], $_POST['f3sk'], $_POST['f3mo'])) {
									$_SESSION['pr']='';
									$_SESSION['sk']='';
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit();

				//-------2s	-------

							} 	elseif(isset($_POST['getfiltr2'] , $_POST['f3pr'], $_POST['f3mo'])) {
									$_SESSION['pr']='';
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit();

							}	elseif(isset($_POST['getfiltr2'] , $_POST['f3pr'], $_POST['f3sk'])) {
									$_SESSION['pr']='';
									$_SESSION['sk']='';
									header("Location: index.php?modules=print&page=print");
									exit();

							}	elseif(isset($_POST['getfiltr2'] , $_POST['f3mo'], $_POST['f3sk'])) {
									$_SESSION['mo']='';
									$_SESSION['sk']='';
									header("Location: index.php?modules=print&page=print");
									exit();

				//-------1s	-------

							}	elseif(isset($_POST['getfiltr2'] , $_POST['f3pr'])) {
									$_SESSION['pr']='';
									header("Location: index.php?modules=print&page=print");
									exit();

							}	elseif(isset($_POST['getfiltr2'] , $_POST['f3sk'])) {
									$_SESSION['sk']='';
									header("Location: index.php?modules=print&page=print");
									exit();
							}	elseif(isset($_POST['getfiltr2'] , $_POST['f3mo'])) {
									$_SESSION['mo']='';
									header("Location: index.php?modules=print&page=print");
									exit();
							}
*/


?>