<div class="contentprint">
	<div class="mmain">
	
		<div class="companies">
			<p style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px;"> Компании <small style="font-weight: 300; font-size:30px;"> выполняющие услуги 3D печати: </small> <br> <b> Сфера применения - 
			<?php   if(isset($compcritc11)) { echo 'архитектура'; unset($_SESSION['prc11']); } ?>
			<?php   if(isset($compcritc12)) { echo 'образование'; unset($_SESSION['prc12']); } ?>
			<?php   if(isset($compcritc13)) { echo 'медицина'; unset($_SESSION['prc13']); }?>
			<?php   if(isset($compcritc14)) { echo 'промышленность'; unset($_SESSION['prc14']); }?>
			<?php   if(isset($compcritc15)) { echo 'реклама, дизайн, искусство'; unset($_SESSION['prc15']); }?>
			<?php   if(isset($compcritc16)) { echo 'бытовая продукция'; unset($_SESSION['prc16']); }?>
			<?php   if(isset($compcritc17)) { echo 'прототипирование'; unset($_SESSION['prc17']); }?>
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
				<?php if(isset($compcritc11)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (архитектура): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc11)) { while($row=mysqli_fetch_assoc($compcritc11)) { ?>
										<input type="checkbox" name="fprc21" value="opr1" > <?php echo $row['c21'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать о свойстве </a> <br>
										<input type="checkbox" name="fprc22" value="opr2" > <?php echo $row['c22'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc27" value="opr7" > <?php echo $row['c27'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать о свойстве </a> <br> <br>

										<?php 
											}} if(isset($compcritc11)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (архитектура)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc11']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->


				<?php if(isset($compcritc12)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (образование): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
									<?php   if(isset($compcritc12)) { while($row=mysqli_fetch_assoc($compcritc12)) { ?>
										<input type="checkbox" name="fprc21" value="opr1" > <?php echo $row['c21'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc22" value="opr2" > <?php echo $row['c22'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc23" value="opr3" > <?php echo $row['c23'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">*узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc29" value="opr9" > <?php echo $row['c29'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>	

											<?php 
											}} if(isset($compcritc12)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (образование)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc12']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
				<?php if(isset($compcritc13)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (медицина): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc13)) { while($row=mysqli_fetch_assoc($compcritc13)) { ?>
										<input type="checkbox" name="fprc21" value="opr1" > <?php echo $row['c21'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc22" value="opr2" > <?php echo $row['c22'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc25" value="opr5" > <?php echo $row['c25'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc27" value="opr7" > <?php echo $row['c27'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>

										<?php 
											}} if(isset($compcritc13)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (медицина)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc13']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc14)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (промышленность): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc14)) { while($row=mysqli_fetch_assoc($compcritc14)) { ?>
										<input type="checkbox" name="fprc21" value="opr1" > <?php echo $row['c21'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc26" value="opr6" > <?php echo $row['c26'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc27" value="opr7" > <?php echo $row['c27'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>

										<?php 
											}} if(isset($compcritc14)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (промышленность)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc14']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc15)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (Рекл., искусс., диз.): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc15)) { while($row=mysqli_fetch_assoc($compcritc15)) { ?>
										<input type="checkbox" name="fprc23" value="opr3" > <?php echo $row['c23'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc27" value="opr7" > <?php echo $row['c27'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc28" value="opr8" > <?php echo $row['c28'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc29" value="opr9" > <?php echo $row['c29'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>

										<?php 
											}} if(isset($compcritc15)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (Рекл.,искусс.,диз.)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc15']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc16)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (Бытовая прод.): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc16)) { while($row=mysqli_fetch_assoc($compcritc16)) { ?>
										<input type="checkbox" name="fprc22" value="opr2" > <?php echo $row['c22'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc23" value="opr3" > <?php echo $row['c23'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc25" value="opr5" > <?php echo $row['c25'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br><br>
										<input type="checkbox" name="fprc29" value="opr7" > <?php echo $row['c29'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>

										<?php 
											}} if(isset($compcritc16)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (Бытовая прод.)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc16']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc17)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор физических свойств <br> продукта 3D печати (прототипирование): </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc17)) { while($row=mysqli_fetch_assoc($compcritc17)) { ?>
										<input type="checkbox" name="fprc21" value="opr1" > <?php echo $row['c21'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc23" value="opr3" > <?php echo $row['c23'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials">* узнать о свойстве </a> <br> <br>
										<input type="checkbox" name="fprc29" value="opr9" > <?php echo $row['c29'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о свойстве </a> <br> <br>

										<?php 
											}} if(isset($compcritc17)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:10px;" type="submit" name="getfiltrprc21" value="Выбрать Физ.свойства (прототипирование)">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc17']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
	
</div>
</div>