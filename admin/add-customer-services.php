<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit'])){
$uid=intval($_GET['addid']);
$invoiceid=mt_rand(100000000, 999999999);
$sid=$_POST['sids'];
for($i=0;$i<count($sid);$i++){
   $svid=$sid[$i];
$ret=mysqli_query($con,"insert into tbfactura (Userid,ServiceId,BillingId) values('$uid','$svid','$invoiceid');");
echo '<script>alert("Factura creada con éxito. El número de factura es: "+"'.$invoiceid.'")</script>';
echo "<script>window.location.href ='invoices.php'</script>";}} ?>


 <?php include('include/header_module.php');?>

<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="notika-icon notika-form"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Añadir servicios al cliente</h2>
									<p>Aqui se puede asignar los servicios que el cliente solicitó en el spa.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-element-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                    <table id="data-table-basic" class="table table-striped"> 
						<form method="post">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Nombre de Servicio</th> 
									<th>Precio Servicio</th> 
									<th>Acción</th> 
								</tr> 
							</thead> 
							<tbody>
							<?php
							$ret=mysqli_query($con,"select *from  tbservicios");
							$cnt=1;
							while ($row=mysqli_fetch_array($ret)) {
							?>
								<tr> 
									<th scope="row"><?php echo $cnt;?></th> 
										<td><?php  echo $row['ServiceName'];?></td> 
										<td><?php  echo $row['Cost'];?></td> 
										<td><input type="checkbox" name="sids[]" value="<?php  echo $row['ID'];?>" ></td> 
								</tr>   
							<?php 
							$cnt=$cnt+1;
							}?>
								<tr>
								<td colspan="4" align="center">
									<button type="submit" name="submit" class="btn btn-success notika-btn-success">Enviar</button>
								</td>
								</tr>
							</tbody> 
						</form>
					</table> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
<?php include('include/footer_module.html');?>
<?php } ?>