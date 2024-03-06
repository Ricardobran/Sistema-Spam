<?php
session_start();
error_reporting(0);

if (strlen($_SESSION['bsspa']==0)) {
	header('location:logout.php');
} else{
if(isset($_POST['submit']))
  {
    $servname=$_POST['sername'];
    $cost=$_POST['cost'];
    
    include 'include/service.class.php';

    $new_service = new service($servname,$cost);
    $new_service->add();
}
?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Añadir servicio</title>
    
    <?php include_once('include/header_module.php');?>
	<div id="page-wrapper" class="form-element-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
						<div class="floating-numner fm-ele-mg">
							<div class="basic-tb-hd">
								<h2>Administración de Servicios</h2>
                                <h4>Añadir Servicios:</h4>
							</div>
							<div class="row">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group float-lb">
										<div class="nk-int-st">
											<input type="text" class="form-control" id="sername" name="sername"  value="" required="true">
                                            <label class="nk-label">Nombre del servicio</label>
										</div>				
									</div>				
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group float-lb">
										<div class="nk-int-st">
											<input type="text" id="cost" name="cost" class="form-control"  value="" required="true">
                                            <label class="nk-label">Costo</label>
										</div>				
									</div>					
								</div>
							</div>
							<button type="submit" name="submit" class="btn btn-success notika-btn-success waves-effect">Agregar</button>
						</div>
						</form> 
					</div>
				</div>
			</div>
		</div>
         <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>

