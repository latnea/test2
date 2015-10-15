<div class="contentprint">
	<div class="mmain">
	
		<div class="companies">
			
				<p style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 26px;"> Компании выполняющие: </p>
				<ul> 
				<?php   if(isset($_SESSION['pr'])) { echo '<li style="font-weight: 300; font-size:28px; color:#26292b;"> <b > услуги 3D печати </b> </li>  '; }?>
				<?php   if(isset($_SESSION['mo'])) { echo '<li style="font-weight: 300; font-size:28px; color:#26292b;"> <b>услуги 3D моделирования </b> </li> '; }?> 
				<?php   if(isset($_SESSION['sk'])) { echo '<li style="font-weight: 300; font-size:28px; color:#26292b;"> <b>услуги 3D сканирования </b> </li>  '; }?>
				<?php   if(isset($_SESSION['p'])) { echo '<li style="font-weight: 300; font-size:28px; color:#26292b;"> <b>продажу 3D принтеров  </b> </li>  '; }?>
				<?php   if(isset($_SESSION['s'])) { echo '<li style="font-weight: 300; font-size:28px; color:#26292b;"> <b>продажу 3D сканеров  </b> </li>  '; }?>
				<?php   if(isset($_SESSION['m'])) { echo '<li style="font-weight: 300; font-size:28px; color:#26292b;"> <b>продажу материалов  </b> </li> '; }?>
				</ul>
			
			<hr>
			<ul>
				<?php while($row=mysqli_fetch_assoc($comppr1)) { ?>
					<div style="overflow:hidden; width:260px; float:left; margin-top:15px; margin-left:-20px;">
						    <?php echo $row['logoCompany'];?> 
					</div>
					<div style="height:180px; width:600px; float:left; margin-left:20px; margin-bottom:10px; border-bottom:1px solid #a3999a; line-height: 20px;">
							<li typre="none"> <?php echo '<b>'. $row['nameCompany'].'</b><br>'.$row['aboutCompany'].'<br>'.$row['adress'].'<br><b>Цена:</b> '.$row['price'].'<br><b>Рейтинг:</b> '.$row['rate']; ?>
							 <br> <a style="color:#e2192b; font-size:16px; text-decoration:none;" href=""> <b> Выбрать! </b> </a> </li>
					</div>
				<?php } ?>
				<!-- <input type="submit" name="gget" value="Применить"> -->
			</ul>
		</div>

		<?php   if(isset($compcrit1)) { ?>
		<div class="filtr" style=" margin-left:980px;  ">
				<?php  } else {?>
		<div class="filtr" style=" margin-left:980px; position:fixed; ">
				<?php }?>
			
				<div class="filtr1">
						<p class="fp1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px;"> <b> Фильтр: </b> <br></p>
						<p class="fp2" style="font-style:open-sans; font-size:15px; font-weight: 500; line-height: 22px;"> <b> Вид товара: </b> </p>
						
				<form action="" method="post">
					<div>
						<div>

							<?php if(isset($_SESSION['p']))  { ?>
								<input type="checkbox" name="choice2[]" value="f2p" checked> 3D Принтеры <br>
								<?php unset($_SESSION['p']); } else {  ?> 
								<input type="checkbox" name="choice2[]" value="f2p"> 3D Принтеры <br>  <!--printeri -->
							<?php } ?>

							<?php if(isset($_SESSION['s']))  { ?>
								<input type="checkbox" name="choice2[]" value="f2s" checked> 3D Cканеры <br>
								<?php unset($_SESSION['s']); } else {  ?> <input type="checkbox" name="choice2[]" value="f2s"> 3D Cканеры <br>   <!--skaneri -->
							<?php } ?>

							<?php if(isset($_SESSION['m']))  { ?>
								<input type="checkbox" name="choice2[]" value="f2m" checked> Материалы <br>
								<?php unset($_SESSION['m']); } else {  ?> <input type="checkbox" name="choice2[]" value="f2m"> Материалы <br>    <!--materiali -->
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
								<input type="checkbox" name="choice2[]" value="f21pr" checked> 3D Печать <br>
								<?php  unset($_SESSION['pr']);} else {  ?> <input type="checkbox" name="choice2[]" value="f21pr"> 3D Печать <br>         <!--3DPrint -->
							<?php } ?>

							<?php if(isset($_SESSION['mo']))  { ?>
								<input type="checkbox" name="choice2[]" value="f21mo" checked> 3D Моделирование <br>
								<?php unset($_SESSION['mo']); } else {  ?> <input type="checkbox" name="choice2[]" value="f21mo"> 3D Моделирование <br>  <!--3DModel-->
							<?php } ?> 

							<?php if(isset($_SESSION['sk']))  { ?>
								<input type="checkbox" name="choice2[]" value="f21sk" checked> 3D Сканирование <br>
								<?php unset($_SESSION['sk']); } else {  ?> <input type="checkbox" name="choice2[]" value="f21sk"> 3D Сканирование <br>    <!--3DSkan-->
							<?php } ?> 

						</div>
					</div>
		
				</div>
					<br>
					<input style="float:left; margin-left:30px; margin-top:15px;" type="submit" name="getfiltr2" value="Применить">
					<input style="float:left; margin-left:10px; margin-top:15px;" type="reset" value="Очистить">
						<br>
				</form>

				<?php if(isset($compcrit1)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор области применения <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcrit1)) { while($row=mysqli_fetch_assoc($compcrit1)) { ?>
										<input type="checkbox" name="choicecrit1[]" value="fprc11" > <?php echo $row['arch'];?> <br>
										<input type="checkbox" name="choicecrit1[]" value="fprc12" > <?php echo $row['educ'];?> <br>
										<input type="checkbox" name="choicecrit1[]" value="fprc13" > <?php echo $row['medi'];?> <br>
										<input type="checkbox" name="choicecrit1[]" value="fprc14" > <?php echo $row['prom'];?> <br>
										<input type="checkbox" name="choicecrit1[]" value="fprc15" > <?php echo $row['rekl'];?> <br>
										<input type="checkbox" name="choicecrit1[]" value="fprc16" > <?php echo $row['bito'];?> <br>
										<input type="checkbox" name="choicecrit1[]" value="fprc17" > <?php echo $row['prot'];?> <br>

										
									<?php 
											}} if(isset($compcrit1)) { ?>


								</div>
							</div>
					<br>
				

				

					<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc1" value="Выбрать область применения">
					<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
			</form>
					
		</div>
				<?php }?>


	</div>