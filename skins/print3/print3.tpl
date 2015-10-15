<div class="contentprint">
	<div class="mmain">
	
		<div class="companies">
			<p style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px;"> Компании <small style="font-weight: 300; font-size:30px;"> выполняющие услуги 3D печати: </small> <br> <b> Сфера применения - 
			<?php   if(isset($_SESSION['prc111'])) { echo 'архитектура'; unset($_SESSION['prc111']); $_SESSION['prc241']=''; } ?>
			<?php   if(isset($_SESSION['prc121'])) { echo 'образование'; unset($_SESSION['prc121']); $_SESSION['prc242']=''; }?> 
			<?php   if(isset($_SESSION['prc131'])) { echo 'медицина'; unset($_SESSION['prc131']); $_SESSION['prc243']=''; }?>
			<?php   if(isset($_SESSION['prc141'])) { echo 'промышленность'; unset($_SESSION['prc141']); $_SESSION['prc244']=''; }?>
			<?php   if(isset($_SESSION['prc151'])) { echo 'реклама, дизайн, искусство'; unset($_SESSION['prc151']); $_SESSION['prc245']=''; }?>
			<?php   if(isset($_SESSION['prc161'])) { echo 'бытовая продукция'; unset($_SESSION['prc161']); $_SESSION['prc246']=''; }?>
			<?php   if(isset($_SESSION['prc171'])) { echo 'прототипирование'; unset($_SESSION['prc171']); $_SESSION['prc247']=''; }?>
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
				<?php if(isset($compcritc21)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc21)) { while($row=mysqli_fetch_assoc($compcritc21)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>

										<?php 
											}} if(isset($compcritc21)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc21']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc22)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc22)) { while($row=mysqli_fetch_assoc($compcritc22)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c38'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>

										<?php 
											}} if(isset($compcritc22)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc22']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc23)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc23)) { while($row=mysqli_fetch_assoc($compcritc23)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc38" value="opr8" > <?php echo $row['c38'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
							
										<?php 
											}} if(isset($compcritc23)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc23']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc24)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc24)) { while($row=mysqli_fetch_assoc($compcritc24)) { ?>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										
										<?php 
											}} if(isset($compcritc24)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc24']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc25)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc25)) { while($row=mysqli_fetch_assoc($compcritc25)) { ?>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
									

										<?php 
											}} if(isset($compcritc25)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc25']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc26)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc26)) { while($row=mysqli_fetch_assoc($compcritc26)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
									

										<?php 
											}} if(isset($compcritc26)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc26']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc27)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc27)) { while($row=mysqli_fetch_assoc($compcritc27)) { ?>
										<input type="checkbox" name="fprc37" value="opr7" > <?php echo $row['c37'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>

										<?php 
											}} if(isset($compcritc27)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc27']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc28)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc28)) { while($row=mysqli_fetch_assoc($compcritc28)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c38'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>

										<?php 
											}} if(isset($compcritc28)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc28']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc29)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc29)) { while($row=mysqli_fetch_assoc($compcritc29)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>


										<?php 
											}} if(isset($compcritc29)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc29']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->


<?php if(isset($compcritc2122)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2122)) { while($row=mysqli_fetch_assoc($compcritc2122)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>

										<?php 
											}} if(isset($compcritc2122)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc21'], $_SESSION['prc22']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2127)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2127)) { while($row=mysqli_fetch_assoc($compcritc2127)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc37" value="opr7" > <?php echo $row['c37'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>

										<?php 
											}} if(isset($compcritc2127)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc21'], $_SESSION['prc27'] ); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2123)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2123)) { while($row=mysqli_fetch_assoc($compcritc2123)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>

										<?php 
											}} if(isset($compcritc2123)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc21'], $_SESSION['prc23']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2129)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2129)) { while($row=mysqli_fetch_assoc($compcritc2129)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>

										<?php 
											}} if(isset($compcritc2129)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc21'], $_SESSION['prc29']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2125)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2125)) { while($row=mysqli_fetch_assoc($compcritc2125)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>



										<?php 
											}} if(isset($compcritc2125)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc21'], $_SESSION['prc25']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2225)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2225)) { while($row=mysqli_fetch_assoc($compcritc2225)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc39" value="opr9" > <?php echo $row['c39'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>


										<?php 
											}} if(isset($compcritc2225)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc22'], $_SESSION['prc25']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2226)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2226)) { while($row=mysqli_fetch_assoc($compcritc2226)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc35" value="opr5" > <?php echo $row['c35'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>



										<?php 
											}} if(isset($compcritc2226)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc22'], $_SESSION['prc26']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2327)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2327)) { while($row=mysqli_fetch_assoc($compcritc2327)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc310" value="opr10" > <?php echo $row['c310'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc34" value="opr4" > <?php echo $row['c34'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc38" value="opr8" > <?php echo $row['c38'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>

										<?php 
											}} if(isset($compcritc2327)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc23'], $_SESSION['prc27']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc2329)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор материала <br> продукта 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc2329)) { while($row=mysqli_fetch_assoc($compcritc2329)) { ?>
										<input type="checkbox" name="fprc31" value="opr1" > <?php echo $row['c31'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>
										<input type="checkbox" name="fprc32" value="opr2" > <?php echo $row['c32'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc36" value="opr6" > <?php echo $row['c36'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a><br>
										<input type="checkbox" name="fprc38" value="opr8" > <?php echo $row['c38'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=materials&page=materials"> *узнать о материале </a> <br>


										<?php 
											}} if(isset($compcritc2329)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc21" value="Выбрать материал">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['prc29'], $_SESSION['prc23']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
</div>