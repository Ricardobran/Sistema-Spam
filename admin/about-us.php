<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
  	$bpmsaid=$_SESSION['bsspa'];
     $pagetitle=$_POST['pagetitle'];
$pagedes=$_POST['pagedes'];
     
    $query=mysqli_query($con,"update tbpagina set PageTitle='$pagetitle',PageDescription='$pagedes' where  PageType='Acercade'");
    if ($query) {
    $msg="<div class=\"alert alert-success\" role=\"alert\"> La página \"acerca de\" ha sido actualizada con éxito.</div>";
  }
  else
    {
      $msg="Ocurrió un error. Por favor intente de nuevo.";
    }
}
?>
  <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Acerca de</title>
 <?php include('include/header_module.php');?>
<!-- Form Element area Start-->


<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<?php if($msg) {echo $msg;}?></div>
	<?php
	$ret=mysqli_query($con,"select * from  tbpagina where PageType='Acercade'");
	$cnt=1;
	while ($row=mysqli_fetch_array($ret)) {
	?>
	</div>
</div>

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
									<h2>Actualizar información de página</h2>
									<p>Acerca de</p>
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
            	<div>
				</div>
                <div class="form-element-list mg-t-30">
                <form method="post">
                <div class="row">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            			<div class="form-element-list mg-t-30">
            				<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="floating-numner form-rlt-mg">
                            			<h5>Título de la página</h5>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="form-group">
                                		<div class="nk-int-st">
                                			<input type="text" class="form-control" id="pagetitle" name="pagetitle" value="<?php  echo $row['PageTitle'];?>" required="true">
                            			</div>
                        			</div>
                    			</div>
                        	</div>
                    	</div>
                	</div>
                </div>

                <div class="row">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            			<div class="form-element-list mg-t-30">
            				<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="floating-numner form-rlt-mg">
                            			<h5>Descripción de la página</h5>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="form-group">
                                		<div class="nk-int-st">
                                			<textarea name="pagedes" id="pagedes" rows="5" cols="5" class="form-control"><?php  echo $row['PageDescription'];?></textarea>
                            			</div>
                        			</div>
                    			</div>
                        	</div>
                    	</div>
                	</div>
                </div>
				<?php } ?>
                <div class="row">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class="form-example-int">
                        	<center><button type="submit" name="submit" class="btn btn-success notika-btn-success">Actualizar información del spa</button></center>
                    	</div>
                	</div>
        		</div>
        		</form>
    			</div>
			</div>
		</div>
	</div>
</div>

<?php include('include/footer_module.html');?>
<?php } ?>