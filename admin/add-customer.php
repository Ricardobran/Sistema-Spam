<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } 
else{
if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobilenum=$_POST['mobilenum'];
    $gender=$_POST['gender'];
    $details=$_POST['details'];
 
    include 'include/customer.class.php';
    $new_customer = new customer($id=1,$name, $email, $mobilenum, $gender, $details);
    $new_customer->add();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Spa | Añadir cliente</title>
 <?php include('include/header_module.php');?>

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
									<h2>Agregar información de cliente</h2>
									<p>Aqui se puede actualizar la información de los clientes del spa.</p>
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
                            			<h5>Nombre de cliente</h5>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="form-group">
                                		<div class="nk-int-st">
                                			<input type="text" class="form-control" id="name" name="name" placeholder="Nombre de Cliente" value="" required="true">
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
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Correo" value="" required="true">
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
                                            <input type="text" class="form-control" id="mobilenum" name="mobilenum" placeholder="Número de Móvil" value="" required="true" maxlength="10" pattern="[0-9]+">
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
                                        <h5>Género</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="gender" value="Mujer">
                                              <label style="font-weight: normal; padding-left:10px;"> Mujer</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="gender" value="Hombre">
                                              <label style="font-weight: normal; padding-left:10px;"> Hombre</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="gender" value="No definido">
                                              <label style="font-weight: normal; padding-left:10px;"> No definido</label>
                                              </div>
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
                            			<h5>Detalle del cliente</h5>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="form-group">
                                		<div class="nk-int-st">
                                			<textarea type="text" class="form-control auto-size" id="details" name="details" placeholder="Detalle" required="true" style="overflow: hidden; overflow-wrap: break-word; height: 41px;"></textarea>
                            			</div>
                        			</div>
                    			</div>
                        	</div>
                    	</div>
                	</div>
                </div>
                <div class="row">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class="form-example-int">
                        	<center><button type="submit" name="submit" class="btn btn-success notika-btn-success">Agregar información cliente</button></center>
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