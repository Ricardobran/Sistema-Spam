<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } else{
	if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
     
    
     
   $query=mysqli_query($con, "update  tbcita set Remark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
    $msg="Todos los detalles han sido actualizados";
  }
  else
    {
      $msg="Algo salió mal. Inténtalo de nuevo";
    }  
}

?>
  <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Detalle de Cita</title>
    <?php include_once('include/header_module.php');?>

	<div id="page-wrapper" class="normal-table-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="normal-table-list">
							<div class="basic-tb-hd">
								<h3 class="title1">Detalle de Cita</h3>
								<p style="font-size:16px; color:red" align="center">
									<?php
									if($msg){
										echo $msg;
									}
									?>
								</p>
							</div>
							
								<?php
									$cid=$_GET['viewid'];
									$ret=mysqli_query($con,"select * from tbcita where ID='$cid'");
									$cnt=1;
									while ($row=mysqli_fetch_array($ret)) {
								?>
								<div class="bsc-tbl">
								<table class="table table-sc-ex">
									<tr>
										<th>Número de Cita</th>
										<td><?php  echo $row['AptNumber'];?></td>
									</tr>
									<tr>
										<th>Nombre de Cliente</th>
										<td><?php  echo $row['Name'];?></td>
									</tr>
									<tr>
										<th>Correo Electrónico</th>
										<td><?php  echo $row['Email'];?></td>
									</tr>
									<tr>
										<th>Número de Celular</th>
										<td><?php  echo $row['PhoneNumber'];?></td>
									</tr>
									<tr>
										<th>Fecha de Cita</th>
										<td><?php  echo $row['AptDate'];?></td>
									</tr>
									<tr>
										<th>Hora de Cita</th>
										<td><?php  echo $row['AptTime'];?></td>
									</tr>
									<tr>
										<th>Servicio Solicitado</th>
										<td><?php  echo $row['Services'];?></td>
									</tr>
									<tr>
										<th>Fecha de Solicitud</th>
										<td><?php  echo $row['ApplyDate'];?></td>
									</tr>
									<tr>
										<th>Estado</th>
										<td> <?php
											if($row['Status']=="1"){
												echo "Aceptado";
											}
											if($row['Status']=="2"){
												echo "Rechazado";
											};?>
										</td>
									</tr>
								</table>
								<br>
							</div>
								<div class="bsc-tbl">
									<div class="basic-tb-hd">
								<h3 class="title1">Estado de la cita</h3>
								
							</div>
								<table class="table table-sc-ex">
							<?php if($row['Remark']==""|| $row['Status']==""){ ?>
								<tr>
								</tr>
								<form name="submit" method="post" enctype="multipart/form-data"> 
									<tr>
										<th>Observación :</th>
										<td>
											<div class="form-element-list mg-t-30">
											 <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
											<textarea name="remark" placeholder="" rows="2"  cols="14" class="form-control auto-size"  required="true"></textarea></div></div></div></div></div>
										</td>
									</tr>
									<tr>
										<th>Estado :</th>
										<td>

											<select name="status" class="form-control wd-450" required="true" >
												<option value="1" selected="true">Aceptado</option>
												<option value="2">Rechazado</option>
											</select>
										</td>
									</tr>
									<tr align="center">
										<td colspan="2"><button type="submit" name="submit" class="btn btn-success notika-btn-success">Enviar</button>
										</td>
									</tr>
									</form>
								</table>

							</div>
							<?php } else { ?>
								<div class="bsc-tbl">
								<table class="table table-bordered">
									<tr>
										<th>Observación</th>
										<td><?php echo $row['Remark']; ?></td>
									</tr>
									<tr>
										<th>Fecha de Observación</th>
										<td><?php echo $row['RemarkDate']; ?></td>
									</tr>
								</table>
							</div>
							<?php } ?>
							<?php } ?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>


	<<?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>