<div class="contentprint">
	<div class="mmain">
	
		<div class="companies">
			<p style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px;"> Компании <small style="font-weight: 300; font-size:30px;"> выполняющие услуги 3D печати: </small> <br> <b> Сфера применения - 
			<?php   if(isset($_SESSION['prc341'])) { echo 'архитектура'; unset($_SESSION['prc341']); $_SESSION['prc441']=''; } ?>
			<?php   if(isset($_SESSION['prc342'])) { echo 'образование'; unset($_SESSION['prc342']); $_SESSION['prc442']=''; }?>
			<?php   if(isset($_SESSION['prc343'])) { echo 'медицина'; unset($_SESSION['prc343']);    $_SESSION['prc443']=''; }?>
			<?php   if(isset($_SESSION['prc344'])) { echo 'промышленность'; unset($_SESSION['prc344']); $_SESSION['prc444']=''; }?>
			<?php   if(isset($_SESSION['prc345'])) { echo 'реклама, дизайн, искусство'; unset($_SESSION['prc345']); $_SESSION['prc445']=''; }?>
			<?php   if(isset($_SESSION['prc346'])) { echo 'бытовая продукция'; unset($_SESSION['prc346']); $_SESSION['prc446']=''; }?>
			<?php   if(isset($_SESSION['prc347'])) { echo 'прототипирование'; unset($_SESSION['prc347']); $_SESSION['prc447']=''; }?>
			<br> Материал для печати -  
			<?php   if(isset($_SESSION['prc411'])) { echo 'ABS'; unset($_SESSION['prc411']); $_SESSION['prc541']=''; } ?>
			<?php   if(isset($_SESSION['prc412'])) { echo 'PLA'; unset($_SESSION['prc412']);  $_SESSION['prc542']='';} ?>
			<?php   if(isset($_SESSION['prc413'])) { echo 'Nylon'; unset($_SESSION['prc413']);  $_SESSION['prc543']='';} ?>
			<?php   if(isset($_SESSION['prc414'])) { echo 'фотополимер'; unset($_SESSION['prc414']); $_SESSION['prc544']=''; } ?>
			<?php   if(isset($_SESSION['prc415'])) { echo 'полиамид'; unset($_SESSION['prc415']); $_SESSION['prc545']=''; } ?>
			<?php   if(isset($_SESSION['prc416'])) { echo 'гипс'; unset($_SESSION['prc416']);  $_SESSION['prc546']='';} ?>
			<?php   if(isset($_SESSION['prc417'])) { echo 'воск'; unset($_SESSION['prc417']);  $_SESSION['prc547']='';} ?>
			<?php   if(isset($_SESSION['prc418'])) { echo 'PP(полипропилен)'; unset($_SESSION['prc418']);  $_SESSION['prc548']='';} ?>
			<?php   if(isset($_SESSION['prc419'])) { echo 'PC(поликарбонат)'; unset($_SESSION['prc419']); $_SESSION['prc549']=''; } ?>
			<?php   if(isset($_SESSION['prc410'])) { echo 'металл'; unset($_SESSION['prc5410']); } ?>
			<br> Технология печати - 
			<?php   if(isset($_SESSION['fprc51'])) { echo 'FDM';  $_SESSION['prc511']='';  } ?>
			<?php   if(isset($_SESSION['fprc52'])) { echo 'CJP';  $_SESSION['prc512']='';  } ?>
			<?php   if(isset($_SESSION['fprc53'])) { echo 'SLS'; $_SESSION['prc513']='';  } ?>
			<?php   if(isset($_SESSION['fprc54'])) { echo 'SLA';  $_SESSION['prc514']='';  } ?>
			<?php   if(isset($_SESSION['fprc55'])) { echo 'SLM';   $_SESSION['prc515']='';  } ?>
			<?php   if(isset($_SESSION['fprc56'])) { echo 'microSLA';   $_SESSION['prc516']='';  } ?>
			<?php   if(isset($_SESSION['fprc57'])) { echo 'DMS';   $_SESSION['prc517']='';  } ?>
			<?php   if(isset($_SESSION['fprc58'])) { echo 'MJM';  $_SESSION['prc518']='';  } ?>
			<?php   if(isset($_SESSION['fprc59'])) { echo 'LOM';   $_SESSION['prc519']='';  } ?>




			 </b> </p>
			<br>

			
			<hr>
			<ul>
				<?php while($row=mysqli_fetch_assoc($comppr2)) { ?>
					<div style="overflow:hidden; width:260px; float:left; margin-top:15px; margin-left:-20px;">
						    <?php echo $row['logoCompany'];?> 
					</div>
					<div style="height:180px; width:600px; float:left; margin-left:20px; margin-bottom:10px; border-bottom:1px solid #a3999a; line-height: 20px;">
							<li typre="none"> <?php echo '<b>'. $row['nameCompany'].'</b><br>'.$row['aboutCompany'].'<br>'.$row['adress'].'<br><b>Цена:</b> '.$row['price'].'<br><b>Рейтинг:</b> '.$row['rate']; ?> </li>
					</div>
				<?php } ?>
				<!-- <input type="submit" name="gget" value="Применить"> -->
			</ul>
		</div>

		
		<div class="filtr" style=" margin-left:980px;  ">

				<div class="filtr1">
						<p class="fp1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px;"> <b> Фильтр: </b> <br></p>
						<p class="fp2" style="font-style:open-sans; font-size:15px; font-weight: 500; line-height: 22px;"> <b> Вид товара: </b> </p>
						<form action="" method="post">
					<div>
						<div>

							<?php if(isset($_SESSION['p']))  { ?>
								<input type="checkbox" name="f2p" value="o1" checked> 3D Принтеры <br>
								<?php unset($_SESSION['p']); } else {  ?> 
								<input type="checkbox" name="f2p" value="o11"> 3D Принтеры <br>  <!--printeri -->
							<?php } ?>

							<?php if(isset($_SESSION['s']))  { ?>
								<input type="checkbox" name="f2s" value="o2" checked> 3D Cканеры <br>
								<?php unset($_SESSION['s']); } else {  ?> <input type="checkbox" name="f2s" value="o21"> 3D Cканеры <br>   <!--skaneri -->
							<?php } ?>

							<?php if(isset($_SESSION['m']))  { ?>
								<input type="checkbox" name="f2m" value="o3" checked> Материалы <br>
								<?php unset($_SESSION['m']); } else {  ?> <input type="checkbox" name="f2m" value="o31"> Материалы <br>    <!--materiali -->
							<?php } ?>


						</div>
					</div>
					<br>
				

				</div>

				<div class="filtr2">
						<p class="fp1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px;"> <b> Фильтр: </b> <br></p>
						<p class="fp2" style="font-style:open-sans; font-size:15px; font-weight: 500; line-height: 22px;"> <b> Вид услуги: </b> </p>
					
					<div>
						<div>

							<?php if(isset($_SESSION['pr']))  { ?>
								<input type="checkbox" name="f3pr" value="o4" checked> 3D Печать <br>
								<?php  unset($_SESSION['pr']);} else {  ?> <input type="checkbox" name="f3pr" value="o41"> 3D Печать <br>         <!--3DPrint -->
							<?php } ?>

							<?php if(isset($_SESSION['mo']))  { ?>
								<input type="checkbox" name="f3mo" value="o5" checked> 3D Моделирование <br>
								<?php unset($_SESSION['mo']); } else {  ?> <input type="checkbox" name="f3mo" value="o51"> 3D Моделирование <br>  <!--3DModel-->
							<?php } ?> 

							<?php if(isset($_SESSION['sk']))  { ?>
								<input type="checkbox" name="f3sk" value="o6" checked> 3D Сканирование <br>
								<?php unset($_SESSION['sk']); } else {  ?> <input type="checkbox" name="f3sk" value="o61"> 3D Сканирование <br>    <!--3DSkan-->
							<?php } ?> 

						</div>
					</div>
		
				</div>
					<br>
					<input style="float:left; margin-left:30px; margin-top:15px;" type="submit" name="getfiltr2" value="Применить">
					<input style="float:left; margin-left:10px; margin-top:15px;" type="reset" value="Очистить">
						<br>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
				<?php if(isset($compcritc51)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc51)) { while($row=mysqli_fetch_assoc($compcritc51)) { ?>
										<input type="checkbox" name="fprc51" value="opr1" > <?php echo $row['c51'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc51)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc51']);
					unset($_SESSION['fprc52']);
					unset($_SESSION['fprc53']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc52)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc52)) { while($row=mysqli_fetch_assoc($compcritc52)) { ?>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc53" value="opr3" > <?php echo $row['c53'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc52)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc52']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc53)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc53)) { while($row=mysqli_fetch_assoc($compcritc53)) { ?>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc53" value="opr3" > <?php echo $row['c53'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc53)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc53']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->


	<?php if(isset($compcritc54)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc54)) { while($row=mysqli_fetch_assoc($compcritc54)) { ?>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc53" value="opr3" > <?php echo $row['c53'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc54)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc54']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc55)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc55)) { while($row=mysqli_fetch_assoc($compcritc55)) { ?>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc53" value="opr3" > <?php echo $row['c53'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc55)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc55']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc56)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc56)) { while($row=mysqli_fetch_assoc($compcritc56)) { ?>
										<input type="checkbox" name="fprc51" value="opr1" > <?php echo $row['c51'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc56)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc56']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc57)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc57)) { while($row=mysqli_fetch_assoc($compcritc57)) { ?>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										<input type="checkbox" name="fprc53" value="opr3" > <?php echo $row['c53'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc57)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc57']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc58)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор оборудования <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc58)) { while($row=mysqli_fetch_assoc($compcritc58)) { ?>
										<input type="checkbox" name="fprc52" value="opr2" > <?php echo $row['c52'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать об оборудовании </a> <br>
										
										<?php 
											}} if(isset($compcritc58)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc51" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc58']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php unset($_SESSION['fprc51']);
	unset($_SESSION['fprc52']);
	unset($_SESSION['fprc53']); 
	unset($_SESSION['fprc54']); 
	unset($_SESSION['fprc55']); 
	unset($_SESSION['fprc56']); 
	unset($_SESSION['fprc57']); 
	unset($_SESSION['fprc58']); 
	unset($_SESSION['fprc59']); 

 ?>

</div>