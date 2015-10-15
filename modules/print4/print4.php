<?php

// vivod predprijatij, osuwestvljajuwih pechatj po vibrannim materialam.

if(isset($_SESSION['fprc41'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c31` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
if(isset($_SESSION['fprc42'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c32` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc43'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c33` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc44'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c34` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc45'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c35` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc46'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c36` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc47'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c37` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc48'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c38` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc49'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c39` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

if(isset($_SESSION['fprc410'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c310` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}


// vivod sledujuwih kriteriev


if(isset($_SESSION['fprc41'])) {
						$compcritc41=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc42'])) {
						$compcritc42=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc42'])) {
						$compcritc43=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc44'])) {
						$compcritc44=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc45'])) {
						$compcritc45=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc46'])) {
						$compcritc46=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc47'])) {
						$compcritc47=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc48'])) {
						$compcritc48=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc49'])) {
						$compcritc49=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['fprc410'])) {
						$compcritc410=mysqli_query($link,"
						SELECT * FROM `techno3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
unset($_SESSION['fprc51']);
unset($_SESSION['fprc52']);
unset($_SESSION['fprc53']);
unset($_SESSION['fprc54']);
unset($_SESSION['fprc55']);
unset($_SESSION['fprc56']);
unset($_SESSION['fprc57']);
unset($_SESSION['fprc58']);
unset($_SESSION['fprc59']);



// -------------------------------------------------------------------------------------------------------------------
// Vibor tehnologiii

// ABS

if(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc42'], $_POST['fprc48'], $_POST['fprc49'] )) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc52']='';
			$_SESSION['fprc58']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}

elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc42'], $_POST['fprc48'] )) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc52']='';
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc42'], $_POST['fprc49'] )) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc52']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc48'], $_POST['fprc49'] )) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc58']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc42'],$_POST['fprc48'], $_POST['fprc49'] )) {
			$_SESSION['fprc52']='';
			$_SESSION['fprc58']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc42'])) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc52']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc48'])) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc49'])) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc42'],$_POST['fprc48'])) {
			$_SESSION['fprc52']='';
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc42'],$_POST['fprc49'])) {
			$_SESSION['fprc52']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc48'],$_POST['fprc49'])) {
			$_SESSION['fprc58']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}

//pla
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc49'], $_POST['fprc43'])) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc53']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc43'])) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc53']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc43'],$_POST['fprc49'])) {
			$_SESSION['fprc53']='';
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}

// nylon

elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'],$_POST['fprc48'], $_POST['fprc43'])) {
			$_SESSION['fprc51']='';
			$_SESSION['fprc53']='';
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc48'], $_POST['fprc43'])) {
			$_SESSION['fprc53']='';
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}

// fotopolimer
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc44'], $_POST['fprc46'])) {
			$_SESSION['fprc54']='';
			$_SESSION['fprc56']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}


// gips

elseif(isset($_POST['getfiltrprc41'], $_POST['fprc42'],$_POST['fprc43'], $_POST['fprc48'])) {
			$_SESSION['fprc52']='';
			$_SESSION['fprc53']='';
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}

elseif(isset($_POST['getfiltrprc41'], $_POST['fprc42'], $_POST['fprc43'])) {
			$_SESSION['fprc52']='';
			$_SESSION['fprc53']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}

// metaall
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc43'], $_POST['fprc47'])) {
			$_SESSION['fprc53']='';
			$_SESSION['fprc57']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}


elseif(isset($_POST['getfiltrprc41'], $_POST['fprc41'])) {
			$_SESSION['fprc51']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc42'])) {
			$_SESSION['fprc52']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc43'])) {
			$_SESSION['fprc53']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc44'])) {
			$_SESSION['fprc54']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc45'])) {
			$_SESSION['fprc55']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc46'])) {
			$_SESSION['fprc56']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc47'])) {
			$_SESSION['fprc57']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc48'])) {
			$_SESSION['fprc58']='';
		
		header("Location: index.php?modules=print5&page=print5");
		exit();
}
elseif(isset($_POST['getfiltrprc41'], $_POST['fprc49'])) {
			$_SESSION['fprc59']='';
		
		header("Location: index.php?modules=print5&page=print5");
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