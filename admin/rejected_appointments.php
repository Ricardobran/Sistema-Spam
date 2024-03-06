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
    <title>Spa | Citas Rechazadas</title>
    <?php include_once('include/header_module.php');?>

		<div id="page-wrapper" class="data-table-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="data-table-list">
							<div class="basic-tb-hd">
								<h2>Administración de Citas</h2>
                                <h4>Citas Rechazadas</h4>
							</div>
							<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th> Número de Cita</th>
									<th>Nombre de Cliente</th>
									<th>Número de Móvil</th>
									<th>Fecha de Cita</th>
									<th>Hora de Cita</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$ret=mysqli_query($con,"select *from  tbcita where Status='2'");
									$cnt=1;
									while ($row=mysqli_fetch_array($ret)) {
								?>
								<tr>
									<th scope="row"><?php echo $cnt;?></th>
									<td><?php  echo $row['AptNumber'];?></td>
									<td><?php  echo $row['Name'];?></td>
									<td><?php  echo $row['PhoneNumber'];?></td>
									<td><?php  echo $row['AptDate'];?></td>
									<td><?php  echo $row['AptTime'];?></td>
									<td><a href="view_appointment.php?viewid=<?php echo $row['ID'];?>">Detalle</a></td>
								</tr>
								<?php $cnt=$cnt+1;}?>
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