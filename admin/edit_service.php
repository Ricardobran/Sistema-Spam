<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
   header('location:logout.php');
  } else{
$cid=$_GET['editid'];

if(isset($_POST['submit']))
  {
    $servname=$_POST['sername'];
    $cost=$_POST['cost'];
    $eid=$_GET['editid'];
     
    include 'include/service.class.php';

    $new_service = new service($servname,$cost,$eid);
    $new_service->edit();
}
  
  if(isset($_POST['delete']))
  {

    $eid=$_GET['editid'];
     include 'include/service.class.php';

    $new_service = new service('','',$eid);
    $new_service->delete();
}

  ?>
  <!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Editar servicio</title>
    <?php include_once('include/header_module.php');?>
    
  <div id="page-wrapper" class="form-element-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form method="post">
            <div class="floating-numner fm-ele-mg">
              <div class="basic-tb-hd"> 
                <h2>Administración de Servicios</h2>
                <h4>Actualizar Servicios:</h4>
              </div>
              <div class="row">
                
                <p style="font-size:16px; color:red" align="center"> <?php if($msg){echo $msg;}  ?> </p>
                <?php
                  $ret=mysqli_query($con,"SELECT * FROM `tbservicios` WHERE ID='$cid'");
                  $cnt=1;
                  while ($row=mysqli_fetch_array($ret)) {
                ?> 
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group float-lb">
                    <div class="nk-int-st nk-toggled">
                      <input type="text" class="form-control" id="sername" name="sername" value="<?php  echo $row['ServiceName'];?>" required="true">
                      <label class="nk-label">Nombre Servicio</label>
                    </div>
                  </div>          
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group float-lb">
                    <div class="nk-int-st nk-toggled">
                      <label class="nk-label">Costo</label>
                      <input type="text" id="cost" name="cost" class="form-control" value="<?php  echo $row['Cost'];?>" required="true">
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="modals-default-cl">
                  <button type="submit" name="submit" class="btn btn-success notika-btn-success">Actualizar</button> 
                  <button type="button" class="btn btn-danger notika-btn-danger" data-toggle="modal" data-target="#myModalseven">Eliminar</button>

                  <div class="modal animated shake" id="myModalseven" role="dialog">
                                    <div class="modal-dialog modals-default nk-red">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Eliminando un servicio</h2>
                                                <p>¿Está seguro que desea eliminar este servicio? Una vez se elimine, este cambio es permanente y no podrá deshacerse.</p>
                                                <p>La información a eliminar es la siguiente:</p>
                                                <form method="post">

                                                  <p style="font-size:16px; color:green" align="center"> <?php if($msg){echo $msg;}  ?> </p>
                <?php
                  $ret=mysqli_query($con,"SELECT * FROM `tbservicios` WHERE ID='$cid'");
                  $cnt=1;
                  while ($row=mysqli_fetch_array($ret)) {
                ?> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <p class="nk-label">Nombre Servicio</p>
                      <input type="text" class="form-control" id="sername" name="sername" value="<?php  echo $row['ServiceName'];?>" required="true" disabled>                      
                    </div>
                  </div>          
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <p class="nk-label">Costo</p>
                      <input type="text" id="cost" name="cost" class="form-control" value="<?php  echo $row['Cost'];?>" required="true" disabled>
                    </div>
                  </div>
                </div>
                <?php } ?>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="delete" class="btn btn-default" >Eliminar</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                              </div>    
                </div>
              </div>
            </form>
          </div>
        </div>        
      </div>
    </div>
     <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>