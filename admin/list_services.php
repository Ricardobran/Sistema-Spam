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
    <title>Spa | Servicios ofertados</title>
    <?php include_once('include/header_module.php');?>
    
    <div id="page-wrapper" class="data-table-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="data-table-list">
                            <div class="basic-tb-hd">
                                <h2>Administración de Servicios</h2>
                                <h4>Servicios ofertados:</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre de Servicio</th>
                                            <th>Precio de Servicio</th>
                                            <th>Fecha de Creación</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $ret=mysqli_query($con,"SELECT * FROM tbservicios");
                                            $cnt=1;
                                            while ($row=mysqli_fetch_array($ret)) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $cnt;?></th>
                                            <td><?php  echo $row['ServiceName'];?></td>
                                            <td><?php  echo $row['Cost'];?></td>
                                            <td><?php  echo $row['CreationDate'];?></td>
                                            <td><a href="edit_service.php?editid=<?php echo $row['ID'];?>"><i class="notika-icon notika-edit"></i> Editar</a></td>
                                        </tr>  
                                        <?php 
                                            $cnt=$cnt+1;
                                        }?>
                                    </tbody>
                                </table>
                            </div>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
         <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>