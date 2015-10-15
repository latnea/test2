<?php 

// ---------------------  vivod predprijatij po sfere primenenija

if(isset($_SESSION['prc111'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c11` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc121'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c12` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc131'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c13` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc141'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c14` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc151'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c15` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc161'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c16` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}
elseif(isset($_SESSION['prc171'])) {
		$comppr2=mysqli_query($link,"
				SELECT * FROM `comp3D`
				WHERE `c17` =1 
				") or exit(mysqli_error());
		//unset($_SESSION['pr']);
		//unset($_SESSION['sk']);
		//unset($_SESSION['mo']);
}

// ----------------------------------------------------------------------------------------
// Vivod kriteriev - materiali

// dvojnie


if(isset($_SESSION['prc21'], $_SESSION['prc22'])) {
						$compcritc2122=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc21'], $_SESSION['prc27'])) {
						$compcritc2127=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc21'], $_SESSION['prc23'])) {
						$compcritc2123=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc21'], $_SESSION['prc25'])) {
						$compcritc2125=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc21'], $_SESSION['prc29'])) {
						$compcritc2129=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc22'], $_SESSION['prc25'])) {
						$compcritc2225=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc22'], $_SESSION['prc26'])) {
						$compcritc2226=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc23'], $_SESSION['prc27'])) {
						$compcritc2327=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
} elseif(isset($_SESSION['prc23'], $_SESSION['prc29'])) {
						$compcritc2329=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}

// odinarnie

elseif(isset($_SESSION['prc21'])) {
						$compcritc21=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc22'])) {
						$compcritc22=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc23'])) {
						$compcritc23=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc24'])) {
						$compcritc24=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc25'])) {
						$compcritc25=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc26'])) {
						$compcritc26=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc27'])) {
						$compcritc27=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc28'])) {
						$compcritc28=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}
elseif(isset($_SESSION['prc29'])) {
						$compcritc29=mysqli_query($link,"
						SELECT * FROM `materials3D`
						") or exit(mysqli_error());
						//unset($_SESSION['pr']);
}


// -------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------
// VIBOR MATERIALA
unset($_SESSION['fprc41']);
unset($_SESSION['fprc42']);
unset($_SESSION['fprc43']);
unset($_SESSION['fprc44']);
unset($_SESSION['fprc45']);
unset($_SESSION['fprc46']);
unset($_SESSION['fprc47']);
unset($_SESSION['fprc48']);
unset($_SESSION['fprc49']);
unset($_SESSION['fprc410']);

if(isset($_POST['getfiltrprc21'], $_POST['fprc31'])) {
			$_SESSION['fprc41']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc32'])) {
			$_SESSION['fprc42']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc33'])) {
			$_SESSION['fprc43']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc34'])) {
			$_SESSION['fprc44']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc35'])) {
			$_SESSION['fprc45']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc36'])) {
			$_SESSION['fprc46']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc37'])) {
			$_SESSION['fprc47']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc38'])) {
			$_SESSION['fprc48']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc39'])) {
			$_SESSION['fprc49']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}
if(isset($_POST['getfiltrprc21'], $_POST['fprc310'])) {
			$_SESSION['fprc410']='';
		
		header("Location: index.php?modules=print4&page=print4");
		exit();
}



// -------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------












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