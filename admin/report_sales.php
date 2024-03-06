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
<form method="post" name="bwdatesreport"  action="final_report_sales.php" enctype="multipart/form-data">
								
    <div id="page-wrapper" class="datepicker-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="datepicker-int mg-t-30">
							<div class="cmp-tb-hd">
								<h2>Reporte de Ventas</h2>
                            <p>Seleccione las ffechas de incio y fin del reporte</p>
                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
									echo $msg;  }  ?> 
								</p>
							</div>
							
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
										<label for="exampleInputEmail1">Fecha de Inicio</label> <input type="date" class="form-control1" name="fromdate" id="fromdate" value="" required='true'>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
										<label for="exampleInputPassword1">Fecha Hasta</label><input type="date" class="form-control1" name="todate" id="todate" value="" required='true'>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center" >
									<label for="exampleInputPassword1">Tipo de Reporte</label> <input type="radio" name="requesttype" value="mtwise" checked="true"> Mensual
                  					<input type="radio" name="requesttype" value="yrwise"> Anual 
                  					<div>
                  						<button type="submit" name="submit" class="btn btn-lg btn-success notika-btn-success">Enviar</button> 
                  					</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form> 
	<?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>    