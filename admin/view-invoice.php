<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } else{
  ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Reporte de ventas</title>
    <?php include_once('include/header_module.php');?>
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
									<h2>Factura</h2>
                                    <p> A continuación se detalla la factura recién emitida.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container" id="exampl" style="width: 90%; background: white;">		
	<?php
	$invid=intval($_GET['invoiceid']);
	$ret=mysqli_query($con,"select DISTINCT  tbfactura.PostingDate,tbclientes.Name,tbclientes.Email,tbclientes.MobileNumber,tbclientes.Gender
	from  tbfactura 
	join tbclientes on tbclientes.ID=tbfactura.Userid 
	where tbfactura.BillingId='$invid'");
	$cnt=1;
	while ($row=mysqli_fetch_array($ret)) {
	?>							
	<div class="table-responsive bs-example widget-shadow">
		<br>
		<h4>Factura #<?php echo $invid;?></h4>
		<table class="table table-bordered" width="100%" border="1"> 
			<tr>
			<th colspan="6">Detalle de Cliente</th>	
			</tr>
			 <tr> 
				<th>Nombre</th> 
				<td><?php echo $row['Name']?></td> 
				<th>No de Contacto.</th> 
				<td><?php echo $row['MobileNumber']?></td>
				<th>Correo </th> 
				<td><?php echo $row['Email']?></td>
			</tr> 
			 <tr> 
				<th>Género</th> 
				<td><?php echo $row['Gender']?></td> 
				<th>Fecha de Factura</th> 
				<td colspan="3"><?php echo $row['PostingDate']?></td> 
			</tr> 
<?php }?>
</table> 
<table class="table table-bordered" width="100%" border="1"> 
<tr>
<th colspan="3">Detalle de Servicios</th>	
</tr>
<tr>
<th>#</th>	
<th>Nombre de Servicio</th>
<th>Costo</th>
</tr>

<?php
$ret=mysqli_query($con,"select tbservicios.ServiceName,tbservicios.Cost  
	from  tbfactura 
	join tbservicios on tbservicios.ID=tbfactura.ServiceId 
	where tbfactura.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
	?>

<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['ServiceName']?></td>	
<td style="text-align:center"><?php echo $subtotal=$row['Cost']?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$subtotal;
} ?>

<tr>
<th colspan="2" style="text-align:center">Total</th>
<th><?php echo $gtotal?></th>	

</tr>
</table>
  <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
</div>
</div>
<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}
</script>

<?php include("include/footer_module.html"); ?>
<?php }  ?>