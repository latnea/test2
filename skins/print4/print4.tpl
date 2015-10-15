<div class="contentprint">
	<div class="mmain">
	
		<div class="companies">
			<p style="font-style:open-sans; font-size:30px; font-weight: 700; line-height: 36px;"> Компании <small style="font-weight: 300; font-size:30px;"> выполняющие услуги 3D печати: </small> <br> <b> Сфера применения - 
			<?php   if(isset($_SESSION['prc241'])) { echo 'архитектура'; unset($_SESSION['prc241']); $_SESSION['prc341']=''; } ?>
			<?php   if(isset($_SESSION['prc242'])) { echo 'образование'; unset($_SESSION['prc242']); $_SESSION['prc342']=''; }?>
			<?php   if(isset($_SESSION['prc243'])) { echo 'медицина'; unset($_SESSION['prc243']); $_SESSION['prc343']=''; }?>
			<?php   if(isset($_SESSION['prc244'])) { echo 'промышленность'; unset($_SESSION['prc244']); $_SESSION['prc344']=''; }?>
			<?php   if(isset($_SESSION['prc245'])) { echo 'реклама, дизайн, искусство'; unset($_SESSION['prc245']); $_SESSION['prc345']=''; }?>
			<?php   if(isset($_SESSION['prc246'])) { echo 'бытовая продукция'; unset($_SESSION['prc246']); $_SESSION['prc346']=''; }?>
			<?php   if(isset($_SESSION['prc247'])) { echo 'прототипирование'; unset($_SESSION['prc247']); $_SESSION['prc347']=''; }?>
			<br> Материал для печати -  
			<?php   if(isset($_SESSION['fprc41'])) { echo 'ABS'; $_SESSION['prc411']=''; } ?>
			<?php   if(isset($_SESSION['fprc42'])) { echo 'PLA'; $_SESSION['prc412']=''; } ?>
			<?php   if(isset($_SESSION['fprc43'])) { echo 'Nylon'; $_SESSION['prc413']=''; } ?>
			<?php   if(isset($_SESSION['fprc44'])) { echo 'фотополимер'; $_SESSION['prc414']=''; } ?>
			<?php   if(isset($_SESSION['fprc45'])) { echo 'полиамид'; $_SESSION['prc415']=''; } ?>
			<?php   if(isset($_SESSION['fprc46'])) { echo 'гипс'; $_SESSION['prc416']=''; } ?>
			<?php   if(isset($_SESSION['fprc47'])) { echo 'воск'; $_SESSION['prc417']=''; } ?>
			<?php   if(isset($_SESSION['fprc48'])) { echo 'PP(полипропилен)'; $_SESSION['prc418']=''; } ?>
			<?php   if(isset($_SESSION['fprc49'])) { echo 'PC(поликарбонат)'; $_SESSION['prc419']=''; } ?>
			<?php   if(isset($_SESSION['fprc410'])) { echo 'металл'; $_SESSION['prc410']=''; } ?>
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
				<?php if(isset($compcritc41)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc41)) { while($row=mysqli_fetch_assoc($compcritc41)) { ?>
										<input type="checkbox" name="fprc41" value="opr1" > <?php echo $row['c41'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc42" value="opr2" > <?php echo $row['c42'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>
										<input type="checkbox" name="fprc49" value="opr9" > <?php echo $row['c49'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc48" value="opr8" > <?php echo $row['c48'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<?php 
											}} if(isset($compcritc41)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc41']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc42)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc42)) { while($row=mysqli_fetch_assoc($compcritc42)) { ?>
										<input type="checkbox" name="fprc41" value="opr1" > <?php echo $row['c41'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>
										<input type="checkbox" name="fprc49" value="opr9" > <?php echo $row['c49'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>

										<?php 
											}} if(isset($compcritc42)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc42']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc43)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc43)) { while($row=mysqli_fetch_assoc($compcritc43)) { ?>
										<input type="checkbox" name="fprc41" value="opr1" > <?php echo $row['c41'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc48" value="opr8" > <?php echo $row['c48'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>

										<?php 
											}} if(isset($compcritc43)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc43']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc44)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc44)) { while($row=mysqli_fetch_assoc($compcritc44)) { ?>
										<input type="checkbox" name="fprc44" value="opr4" > <?php echo $row['c44'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc46" value="opr6" > <?php echo $row['c46'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>
										<input type="checkbox" name="fprc48" value="opr8" > <?php echo $row['c48'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>

										<?php 
											}} if(isset($compcritc44)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc44']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc45)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc45)) { while($row=mysqli_fetch_assoc($compcritc45)) { ?>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>

										<?php 
											}} if(isset($compcritc45)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc45']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc46)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc46)) { while($row=mysqli_fetch_assoc($compcritc46)) { ?>
										<input type="checkbox" name="fprc42" value="opr2" > <?php echo $row['c42'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>
										<input type="checkbox" name="fprc48" value="opr8" > <?php echo $row['c48'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>

										<?php 
											}} if(isset($compcritc46)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc46']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc47)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc47)) { while($row=mysqli_fetch_assoc($compcritc47)) { ?>
										<input type="checkbox" name="fprc48" value="opr8" > <?php echo $row['c48'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>

										<?php 
											}} if(isset($compcritc47)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc47']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc48)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc48)) { while($row=mysqli_fetch_assoc($compcritc48)) { ?>
										<input type="checkbox" name="fprc41" value="opr1" > <?php echo $row['c41'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>

										<?php 
											}} if(isset($compcritc48)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc48']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc49)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc49)) { while($row=mysqli_fetch_assoc($compcritc49)) { ?>
										<input type="checkbox" name="fprc41" value="opr1" > <?php echo $row['c41'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc49" value="opr9" > <?php echo $row['c49'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>

										<?php 
											}} if(isset($compcritc49)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc49']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php if(isset($compcritc410)) { ?>
					<div class="filtr3">
						<p class="fpr1" style="font-style:open-sans; font-size:20px; font-weight: 500; line-height: 22px; color#fffff;"> <b> <br> Выбор технологии <br> 3D печати: </b> <br></p>
						
						<form action="" method="post">
							<div>
								<div>
									<?php }?>
													
									<?php   if(isset($compcritc410)) { while($row=mysqli_fetch_assoc($compcritc410)) { ?>
										<input type="checkbox" name="fprc43" value="opr3" > <?php echo $row['c43'];?><a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a> <br>
										<input type="checkbox" name="fprc47" value="opr7" > <?php echo $row['c47'];?> <a style="font-size:10px; color:#fac9cd; text-decoration:none; " href="index.php?modules=main&page=main"> *узнать о технологии </a><br>

										<?php 
											}} if(isset($compcritc410)) {	
											 ?>
										</div>
										</div>
										<br>
					
								<input style=" margin-left:0px; margin-top:15px;" type="submit" name="getfiltrprc41" value="Выбрать технологию">
								<input style=" margin-left:0px; margin-top:10px;" type="reset" value="Очистить">
							</form>		
						</div>
					<?php unset($_SESSION['fprc410']); } ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------->
</div>