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
    <title>Spa | Facturas por fecha</title>
    <?php include_once('include/header_module.php');?>

    	<div id="page-wrapper" class="data-table-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="data-table-list">
							<div class="basic-tb-hd">
								<h2 class="title1">Reporte entre Fechas</h2>
								<h4>Reporte entre Fechas:</h4>
								<?php
									$fdate=$_POST['fromdate'];
									$tdate=$_POST['todate'];
								?>
								<h5 align="center" style="color:blue">Reporte desde <?php echo $fdate?> hasta <?php echo $tdate?></h5>
							</div>
							<div class="table-responsive">
								<table id="data-table-basic" class="table table-striped"> 
							<thead>
								<tr>
									<th>#</th>
									<th>ID Factura</th>
									<th>Nombre Cliente</th>
									<th>Fecha Factura</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$ret=mysqli_query($con,"select distinct tbclientes.Name,tbfactura.BillingId,tbfactura.PostingDate from  tbclientes join tbfactura on tbclientes.ID=tbfactura.Userid  where date(tbfactura.PostingDate) between '$fdate' and '$tdate'");
									$cnt=1;
									while ($row=mysqli_fetch_array($ret)) {
								?>
								<tr>
									<th scope="row"><?php echo $cnt;?></th>
									<td><?php  echo $row['BillingId'];?></td>
									<td><?php  echo $row['Name'];?></td>
									<td><?php  echo $row['PostingDate'];?></td>
									<td><a href="view-invoice.php?invoiceid=<?php  echo $row['BillingId'];?>">Detalle Factura</a></td>
								</tr>
								<?php
									$cnt=$cnt+1;}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>    