<?php 


// Vivodim SPISOK PREDPRIJATIJ

if(isset($_SESSION['prc11'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c11` =1 
				") or exit(mysqli_error());
		$_SESSION['prc111']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc12'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c12` =1 
				") or exit(mysqli_error());
		$_SESSION['prc121']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc13'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c13` =1 
				") or exit(mysqli_error());
		$_SESSION['prc131']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc14'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c14` =1 
				") or exit(mysqli_error());
		$_SESSION['prc141']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc15'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c15` =1 
				") or exit(mysqli_error());
		$_SESSION['prc151']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc16'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c16` =1 
				") or exit(mysqli_error());
		$_SESSION['prc161']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc17'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c17` =1 
				") or exit(mysqli_error());
		$_SESSION['prc171']='';
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

// ------------------------------------------------------------------------------------------------------------------------------
// Vivodim spisok sledujuwih kriteriev: fiz. svojstva

		if(isset($_SESSION['prc11'])) {
				$compcritc11=mysqli_query($link,"
				SELECT * FROM `fiz3D`
				") or exit(mysqli_error());
				unset($_SESSION['prc11']);

		}
		elseif(isset($_SESSION['prc12'])) {
						$compcritc12=mysqli_query($link,"
						SELECT * FROM `fiz3D`
						") or exit(mysqli_error());
						unset($_SESSION['prc12']);
		}
		elseif(isset($_SESSION['prc13'])) {
						$compcritc13=mysqli_query($link,"
						SELECT * FROM `fiz3D`
						") or exit(mysqli_error());
						unset($_SESSION['prc13']);
		}		
		elseif(isset($_SESSION['prc14'])) {
						$compcritc14=mysqli_query($link,"
						SELECT * FROM `fiz3D`
						") or exit(mysqli_error());
						unset($_SESSION['prc14']);
		}
		elseif(isset($_SESSION['prc15'])) {
						$compcritc15=mysqli_query($link,"
						SELECT * FROM `fiz3D`
						") or exit(mysqli_error());
						unset($_SESSION['prc15']);
		}
		elseif(isset($_SESSION['prc16'])) {
						$compcritc16=mysqli_query($link,"
						SELECT * FROM `fiz3D`
						") or exit(mysqli_error());
						unset($_SESSION['prc16']);
		}
		elseif(isset($_SESSION['prc17'])) {
						$compcritc17=mysqli_query($link,"
						SELECT * FROM `fiz3D`
						") or exit(mysqli_error());
						unset($_SESSION['prc17']);
		}

// ------------------------------------------------------------------------------------------------------------------------------


// Proverka zapolnenija fizicheskih svojstv

// Suwestvujuwie kombinacii

/* if(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc27'] )) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc27 ']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc23'], $_POST['fprc29'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc23']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc25'], $_POST['fprc27'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc26'],$_POST['fprc27'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc26']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc27'],$_POST['fprc28'], $_POST['fprc29'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc27']='';
		$_SESSION['prc28']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc25'],$_POST['fprc26'], $_POST['fprc29'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		$_SESSION['prc26']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc23'],$_POST['fprc29'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc23']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();

// drugie sochitanija

} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc23'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc23']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc29'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc23'],$_POST['fprc29'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc23']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc25'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'],$_POST['fprc27'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc25'],$_POST['fprc27'],$_POST['fprc21'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc25']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc25'],$_POST['fprc27'],$_POST['fprc22'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc26'],$_POST['fprc27'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc26']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc27'],$_POST['fprc28'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc27']='';
		$_SESSION['prc28']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc27'],$_POST['fprc29'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc27']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc28'],$_POST['fprc29'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc28']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc27'],$_POST['fprc28'],$_POST['fprc29'])) {
		$_SESSION['prc27']='';
		$_SESSION['prc28']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}  elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc25'],$_POST['fprc29'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc26'],$_POST['fprc25'],$_POST['fprc29'])) {
		$_SESSION['prc26']='';
		$_SESSION['prc25']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
// dvojnie sochetanija
*/ if(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc22'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc22']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc27'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc25'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc25']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc23'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc23']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc29'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc25'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc26'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc26']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc29'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc27'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
/*
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc25'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc25']='';
		header("Location: index.php?modules=print3&page=print3");
		exit(); 
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc25'],$_POST['fprc27'])) {
		$_SESSION['prc25']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc21'],$_POST['fprc26'])) {
		$_SESSION['prc21']='';
		$_SESSION['prc26']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc26'],$_POST['fprc27'])) {
		$_SESSION['prc26']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc27'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc23'],$_POST['fprc28'])) {
		$_SESSION['prc23']='';
		$_SESSION['prc28']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc27'],$_POST['fprc28'])) {
		$_SESSION['prc27']='';
		$_SESSION['prc28']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc27'],$_POST['fprc29'])) {
		$_SESSION['prc27']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc28'],$_POST['fprc29'])) {
		$_SESSION['prc28']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc22'],$_POST['fprc26'])) {
		$_SESSION['prc22']='';
		$_SESSION['prc26']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc26'],$_POST['fprc25'])) {
		$_SESSION['prc26']='';
		$_SESSION['prc25']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc26'],$_POST['fprc29'])) {
		$_SESSION['prc26']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
} elseif(isset($_POST['getfiltrprc21'], $_POST['fprc25'],$_POST['fprc29'])) {
		$_SESSION['prc25']='';
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
*/

if(isset($_POST['getfiltrprc21'], $_POST['fprc21'])) {
		$_SESSION['prc21']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc22'])) {
		$_SESSION['prc22']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc23'])) {
		$_SESSION['prc23']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc24'])) {
		$_SESSION['prc24']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc25'])) {
		$_SESSION['prc25']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc26'])) {
		$_SESSION['prc26']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc27'])) {
		$_SESSION['prc27']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc28'])) {
		$_SESSION['prc28']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc29'])) {
		$_SESSION['prc29']='';
		header("Location: index.php?modules=print3&page=print3");
		exit();
}








// ------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------

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