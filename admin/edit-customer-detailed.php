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
    $eid=$_GET['editid'];
     
    include 'include/customer.class.php';
    $new_customer = new customer($id=$eid,$name, $email, $mobilenum, $gender, $details);
    $msg = $new_customer->edit();
    echo $msg;
}
?>
  <!DOCTYPE html>
<html class="no-js" lang="ES">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Editar Cliente</title>
 <?php include('include/header_module.php');?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php if($msg) {echo $msg;}?></div>
        <?php
        $cid=$_GET['editid'];
        $ret=mysqli_query($con,"select * from  tbclientes where ID='$cid'");
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
									<h2>Actualizar información de cliente</h2>
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
                                			<input type="text" class="form-control" id="name" name="name"  value="<?php  echo $row['Name'];?>" required="true">
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
                                            <input type="text" id="email" name="email" class="form-control"  value="<?php  echo $row['Email'];?>" required="true">
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
                                            <input type="text" id="mobilenum" name="mobilenum" class="form-control"  value="<?php  echo $row['MobileNumber'];?>" required="true">
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
                                            <?php if($row['Gender']=="Hombre"){?>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="Hombre" checked="true">
  <label style="font-weight: normal; padding-left: 10px;">Hombre</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="Mujer">
  <label style="font-weight: normal; padding-left: 10px;">Mujer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="No definido">
  <label style="font-weight: normal; padding-left: 10px;">No definido</label>
</div>
    <?php } elseif($row['Gender']=="Mujer") {?>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="Hombre">
  <label style="font-weight: normal; padding-left: 10px;">Hombre</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="Mujer" checked="true">
  <label style="font-weight: normal; padding-left: 10px;">Mujer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="No definido">
  <label style="font-weight: normal; padding-left: 10px;">No definido</label>
</div>
    <?php } else{?>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="Hombre">
  <label style="font-weight: normal; padding-left: 10px;">Hombre</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="Mujer">
  <label style="font-weight: normal; padding-left: 10px;">Mujer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="No definido" checked="true">
  <label style="font-weight: normal; padding-left: 10px;">No definido</label>
</div>
    <?php }?>
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
                                			<textarea type="text" class="form-control" id="details" name="details" placeholder="Detalle" required="true" rows="6" cols="4"><?php  echo $row['Details'];?></textarea>
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
                                        <h5>Fecha de creación</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" id="" name="" class="form-control"  value="<?php  echo $row['CreationDate'];?>" readonly='true'>
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
                        	<center><button type="submit" name="submit" class="btn btn-success notika-btn-success">Actualizar información cliente</button></center>
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