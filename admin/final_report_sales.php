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

    <div id="page-wrapper" class="normal-table-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="normal-table-list">
							<div class="basic-tb-hd">
                            	<h2>Reporte de ventas</h2>
                            	<?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];
?>
<?php if($rtype=='mtwise'){
$month1=strtotime($fdate);
$month2=strtotime($tdate);
$m1=date("F",$month1);
$m2=date("F",$month2);
$y1=date("Y",$month1);
$y2=date("Y",$month2);
    ?>
<h4 class="header-title m-t-0 m-b-30">Reporte de ventas mensual</h4>
<h4 align="center" style="color:blue">desde <?php echo $m1."-".$y1;?> hasta <?php echo $m2."-".$y2;?></h4>
                        	</div>
                        	<div class="bsc-tbl">
                        		<table class="table table-sc-ex">
								<thead>
									<tr>
										<th>S.NO</th>
										<th>Mes / Año </th>
										<th>Ventas</th>
									</tr>
								</thead>
									<?php
										$ret=mysqli_query($con,"SELECT month(PostingDate) as lmonth,year(PostingDate) as lyear,sum(Cost) as totalprice from  tbfactura join tbservicios on tbservicios.ID= tbfactura.ServiceId where date(tbfactura.PostingDate) between '$fdate' and '$tdate' group by lmonth,lyear");
										$cnt=1;
										while ($row=mysqli_fetch_array($ret)) {
									?> 
									<tr>
										<td><?php echo $cnt;?></td>
										<td><?php  echo $row['lmonth']."/".$row['lyear'];?></td>
										<td><?php  echo $total=$row['totalprice'];?></td>
									</tr>
									<?php
										$ftotal+=$total;
										$cnt++;
									}?>
									<tr>
										<td colspan="2" align="center">Total </td>
										<td><?php  echo $ftotal;?></td>
									</tr>
								</table>
								</div> 

			<?php } else {
				$year1=strtotime($fdate);
				$year2=strtotime($tdate);
				$y1=date("Y",$year1);
				$y2=date("Y",$year2);
				?>
					<h4 class="header-title m-t-0 m-b-30">Reporte de ventas anual</h4>
					<h4 align="center" style="color:blue">desde <?php echo $y1;?> hasta <?php echo $y2;?></h4>
				</div>
				<div class="bsc-tbl">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>S.NO</th>
								<th>Aaño </th>
								<th>Ventas</th>
							</tr>
						</thead>
						<?php
							$ret=mysqli_query($con,"SELECT year(PostingDate) as lyear,sum(Cost) as totalprice from  tbfactura join tbservicios on tbservicios.ID= tbfactura.ServiceId where date(tbfactura.PostingDate) between '$fdate' and '$tdate' group by lyear");
							$cnt=1;
							while ($row=mysqli_fetch_array($ret)) {
						?>
						<tr>
							<td><?php echo $cnt;?></td>
							<td><?php  echo $row['lyear'];?></td>
							<td><?php  echo $total=$row['totalprice'];?></td>
						</tr>
						<?php
							$ftotal+=$total;
							$cnt++;
						}?>
						<tr>
							<td colspan="2" align="center">Total </td>
							<td><?php  echo $ftotal;?></td>
						</tr>
					</table>
				</div>    
                <?php } ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>   