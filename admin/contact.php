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
$email=$_POST['email'];
$mobnumber=$_POST['mobnumber'];
$timing=$_POST['timing'];
    $query=mysqli_query($con,"update tbpagina set PageTitle='$pagetitle',Email='$email',MobileNumber='$mobnumber',Timing='$timing',PageDescription='$pagedes' where  PageType='contactanos'");
    if ($query) {
    $msg="<div class=\"alert alert-success\" role=\"alert\"> La página de contacto ha sido actualizada con éxito.</div>";
  }
  else
    {
      $msg="Algo salió mal. Por favor, inténtelo de nuevo";
    }
}
?>
  <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Contacto</title>
 <?php include('include/header_module.php');?>
<!-- Form Element area Start-->


<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<?php if($msg) {echo $msg;}?></div>
      <?php
      $ret=mysqli_query($con,"select * from  tbpagina where PageType='contactanos'");
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
									<p>Contacto</p>
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
                                        <h5>Correo electrónico</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="email" id="email" value="<?php  echo $row['Email'];?>" required="true">
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
                                        <h5>Número de teléfono</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="mobnumber" id="mobnumber" value="<?php  echo $row['MobileNumber'];?>" required="true">
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
                                        <h5>Horario de atención</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="timing" id="timing" value="<?php  echo $row['Timing'];?>" required="true">
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
                                			<textarea name="pagedes" id="pagedes" rows="5" class="form-control auto-size"  style="overflow: hidden; overflow-wrap: break-word; height: 41px;"><?php  echo $row['PageDescription'];?></textarea>
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
                        	<center><button type="submit" name="submit" class="btn btn-success notika-btn-success">Actualizar información de contacto</button></center>
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