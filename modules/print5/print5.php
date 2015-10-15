<?php 


if(isset($_SESSION['fprc51'], $_SESSION['fprc52'],$_SESSION['fprc58'],$_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c42` =1 OR `c48` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc52'],$_SESSION['fprc58'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c42` =1 OR `c48` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc52'],$_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c42` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc58'],$_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c48` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc52'],$_SESSION['fprc58'],$_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE  `c42` =1 OR `c48` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc52'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c42` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc58'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR  `c48` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR  `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc52'],$_SESSION['fprc58'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c42` =1 OR `c48` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc52'], $_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c42` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc58'], $_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c48` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc53'], $_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c43` =1 `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc51'], $_SESSION['fprc53'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c43` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc53'], $_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c43` =1 OR `c49` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc51'], $_SESSION['fprc53'],$_SESSION['fprc58'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 OR `c43` =1 OR `c48` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc53'], $_SESSION['fprc58'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c43` =1 OR `c48` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc54'], $_SESSION['fprc56'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c44` =1 OR `c46` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc53'], $_SESSION['fprc52'],$_SESSION['fprc58'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c42` =1 OR `c43` =1 OR `c48` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc52'], $_SESSION['fprc53'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c42` =1 OR `c43` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc53'], $_SESSION['fprc57'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c43` =1 OR `c47` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}



if(isset($_SESSION['fprc51'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c41` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc52'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c42` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc53'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c43` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc54'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c44` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc55'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c45` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc56'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c46` =1
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc57'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c47` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc58'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c48` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc59'] )) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c49` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

// -------------------------------------------------------------------------------------------------------
if(isset($_SESSION['fprc51'])) {
						$compcritc51=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc52'])) {
						$compcritc52=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc53'])) {
						$compcritc53=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc54'])) {
						$compcritc54=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc55'])) {
						$compcritc55=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc56'])) {
						$compcritc56=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc57'])) {
						$compcritc57=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc58'])) {
						$compcritc58=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
if(isset($_SESSION['fprc59'])) {
						$compcritc59=mysqli_query($link,"
						SELECT * FROM `equip3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}


// -----------------------------------------------------------------------------------------------




if(isset($_POST['getfiltrprc51'], $_POST['fprc51'],$_POST['fprc52'], $_POST['fprc53'] )) {
			$_SESSION['fprc61']='';
			$_SESSION['fprc62']='';
			$_SESSION['fprc63']='';
		
		header("Location: index.php?modules=print6&page=print6");
		exit();
} elseif (isset($_POST['getfiltrprc51'], $_POST['fprc51'],$_POST['fprc52'])) {
			$_SESSION['fprc61']='';
			$_SESSION['fprc62']='';

		header("Location: index.php?modules=print6&page=print6");
		exit();
}
elseif (isset($_POST['getfiltrprc51'], $_POST['fprc51'],$_POST['fprc53'] )) {
			$_SESSION['fprc61']='';
			$_SESSION['fprc63']='';
		
		header("Location: index.php?modules=print6&page=print6");
		exit();
}
elseif (isset($_POST['getfiltrprc51'],$_POST['fprc52'], $_POST['fprc53'] )) {
			$_SESSION['fprc62']='';
			$_SESSION['fprc63']='';
		
		header("Location: index.php?modules=print6&page=print6");
		exit();
}
elseif (isset($_POST['getfiltrprc51'], $_POST['fprc51'] )) {
			$_SESSION['fprc61']='';
		
		header("Location: index.php?modules=print6&page=print6");
		exit();
}
elseif (isset($_POST['getfiltrprc51'], $_POST['fprc52'])) {
			$_SESSION['fprc62']='';
		
		header("Location: index.php?modules=print6&page=print6");
		exit();
}
elseif (isset($_POST['getfiltrprc51'], $_POST['fprc53'])) {
			$_SESSION['fprc63']='';
		
		header("Location: index.php?modules=print6&page=print6");
		exit();
}

















// -------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------



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





?>