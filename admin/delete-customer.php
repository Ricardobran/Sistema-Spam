<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    $query=mysqli_query($con, "delete from tbclientes where ID='$eid' ");

    include 'include/customer.class.php';
    $new_customer = new customer($id=$eid,'', '', '', '', '');
    $new_customer->delete();
}
  ?>
  <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Eliminar Cliente</title>
 <?php include('include/header_module.php');?>
<!-- Form Element area Start-->

<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form method="post">
                                    <div>
                                    <p class="text-center">¿Está seguro que desea eliminar la información del cliente?</p>
                                    </div>
                                    <div class="justify-content-center">
                                    <center>
                                    <button type="submit" name="submit" class="btn btn-danger notika-btn-danger">Eliminar información de cliente</button>
                                    <button type="button" onclick="window.location.href = 'customer-list.php'" class="btn btn-success notika-btn-success">Regresar a listado</button>
                                    </center>
                                    </div>
                                </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('include/footer_module.html');?>
<?php } ?>