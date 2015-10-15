<div class="contentprint">
	<div class="mmain">
	
		<div class="companies">
			<p style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px;"> Компании <small style="font-weight: 300; font-size:30px;"> выполняющие услуги 3D печати: </small> <br> <b> Сфера применения - 
			<?php   if(isset($_SESSION['prc441'])) { echo 'архитектура'; unset($_SESSION['prc441']); } ?>
			<?php   if(isset($_SESSION['prc441'])) { echo 'образование'; unset($_SESSION['prc442']); }?>
			<?php   if(isset($_SESSION['prc443'])) { echo 'медицина'; unset($_SESSION['prc443']); }?>
			<?php   if(isset($_SESSION['prc444'])) { echo 'промышленность'; unset($_SESSION['prc444']); }?>
			<?php   if(isset($_SESSION['prc445'])) { echo 'реклама, дизайн, искусство'; unset($_SESSION['prc445']); }?>
			<?php   if(isset($_SESSION['prc446'])) { echo 'бытовая продукция'; unset($_SESSION['prc446']); }?>
			<?php   if(isset($_SESSION['prc447'])) { echo 'прототипирование'; unset($_SESSION['prc447']); }?>
			<br> Материал для печати -  
			<?php   if(isset($_SESSION['prc541'])) { echo 'ABS'; unset($_SESSION['prc541']); } ?>
			<?php   if(isset($_SESSION['prc542'])) { echo 'PLA'; unset($_SESSION['prc542']); } ?>
			<?php   if(isset($_SESSION['prc543'])) { echo 'Nylon'; unset($_SESSION['prc543']); } ?>
			<?php   if(isset($_SESSION['prc544'])) { echo 'фотополимер'; unset($_SESSION['prc544']); } ?>
			<?php   if(isset($_SESSION['prc545'])) { echo 'полиамид'; unset($_SESSION['prc545']); } ?>
			<?php   if(isset($_SESSION['prc546'])) { echo 'гипс'; unset($_SESSION['prc546']); } ?>
			<?php   if(isset($_SESSION['prc547'])) { echo 'воск'; unset($_SESSION['prc547']); } ?>
			<?php   if(isset($_SESSION['prc548'])) { echo 'PP(полипропилен)'; unset($_SESSION['prc548']); } ?>
			<?php   if(isset($_SESSION['prc549'])) { echo 'PC(поликарбонат)'; unset($_SESSION['prc549']); } ?>
			<?php   if(isset($_SESSION['prc5410'])) { echo 'металл'; unset($_SESSION['prc5410']); } ?>
			<br> Технология печати - 
			<?php   if(isset($_SESSION['prc511'])) { echo 'FDM'; unset($_SESSION['prc511']); } ?>
			<?php   if(isset($_SESSION['prc512'])) { echo 'CJP'; unset($_SESSION['prc512']); } ?>
			<?php   if(isset($_SESSION['prc513'])) { echo 'SLS'; unset($_SESSION['prc513']); } ?>
			<?php   if(isset($_SESSION['prc514'])) { echo 'SLA'; unset($_SESSION['prc514']); } ?>
			<?php   if(isset($_SESSION['prc515'])) { echo 'SLM'; unset($_SESSION['prc515']); } ?>
			<?php   if(isset($_SESSION['prc516'])) { echo 'microSLA'; unset($_SESSION['prc516']); } ?>
			<?php   if(isset($_SESSION['prc517'])) { echo 'DMS'; unset($_SESSION['prc517']); } ?>
			<?php   if(isset($_SESSION['prc518'])) { echo 'MJM'; unset($_SESSION['prc518']); } ?>
			<?php   if(isset($_SESSION['prc519'])) { echo 'LOM'; unset($_SESSION['prc519']); } ?>
				<br> Цена:  
			<?php   if(isset($_SESSION['fprc61'])) { echo 'выбран персональный 3D принтер';  } ?>
			<?php   if(isset($_SESSION['fprc62'])) { echo 'выбран профессиональный 3D принтер';  } ?>
			<?php   if(isset($_SESSION['fprc63'])) { echo 'выбран производственный 3D принтер';  } ?>




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
				<?php if(isset($compcritc61)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор ценового диапазона <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc61)) { while($row=mysqli_fetch_assoc($compcritc61)) { ?>
										<input type="checkbox" name="fprc61" value="opr1" > <?php echo $row['c61'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<input type="checkbox" name="fprc62" value="opr2" > <?php echo $row['c62'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<input type="checkbox" name="fprc63" value="opr2" > <?php echo $row['c63'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										
										<?php 
											}} if(isset($compcritc61)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc61" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc61']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc62)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор ценового диапазона <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc62)) { while($row=mysqli_fetch_assoc($compcritc62)) { ?>
										<input type="checkbox" name="fprc61" value="opr1" > <?php echo $row['c61'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<input type="checkbox" name="fprc62" value="opr2" > <?php echo $row['c62'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<input type="checkbox" name="fprc63" value="opr2" > <?php echo $row['c63'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<?php 
											}} if(isset($compcritc62)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc61" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc62']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php if(isset($compcritc63)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор ценового диапазона <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc63)) { while($row=mysqli_fetch_assoc($compcritc63)) { ?>
										<input type="checkbox" name="fprc61" value="opr1" > <?php echo $row['c61'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<input type="checkbox" name="fprc62" value="opr2" > <?php echo $row['c62'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										<input type="checkbox" name="fprc63" value="opr2" > <?php echo $row['c63'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=price&page=price">*узнать о цене </a> <br>
										
										<?php 
											}} if(isset($compcritc63)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc61" value="Выбрать оборудование">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc63']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->

</div>