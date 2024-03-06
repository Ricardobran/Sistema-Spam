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
    <title>Spa | Lista de Clientes</title>

 <?php include('include/header_module.php');?>
<!-- Form Element area Start-->

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
									<h2>Listado de clientes</h2>
                                    <p> A continuación se detalla la lista de todos los clientes del spa.</p>
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
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                    <table id="data-table-basic" class="table table-striped"> 
                        <thead> 
                            <tr> 
                            <th>#</th>
                            <th>Nombre de Cliente</th> 
                            <th>Número Móvil</th> 
                            <th>Fecha de Creación</th>
                            <th>Acción</th> 
                            </tr> 
                        </thead> 
                        <tbody>
                        <?php
                        $ret=mysqli_query($con,"select * from  tbclientes");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>
                            <tr>
                            <th scope="row"><?php echo $cnt;?></th> 
                            <td><?php  echo $row['Name'];?></td>
                            <td><?php  echo $row['MobileNumber'];?></td>
                            <td><?php  echo $row['CreationDate'];?></td> 
                            <td>
                            <a href="edit-customer-detailed.php?editid=<?php echo $row['ID'];?>">Editar</a>  | 
                            <a href="delete-customer.php?editid=<?php echo $row['ID'];?>">Eliminar</a>  |  
                            <a href="add-customer-services.php?addid=<?php echo $row['ID'];?>">Asignar servicio</a>
                            </td> 
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
</div>

<?php include('include/footer_module.html');?>
<?php } ?>