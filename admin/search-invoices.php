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
									<h2>Buscar facturas</h2>
                                    <p> A continuación podrá buscar la factura por código.</p>
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
                <div class="form-element-list mg-t-30">
                <form method="post" name="search" action="">
                <p style="font-size:16px; color:red" align="center"> <?php if($msg){echo $msg;}  ?> </p>
                <div class="row">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            			<div class="form-element-list mg-t-30">
            				<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="floating-numner form-rlt-mg">
                            			<label>Buscar por número de factura o número de producto</label>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="form-group">
                                		<div class="nk-int-st">
                                			<input id="searchdata" type="text" name="searchdata" required="true" class="form-control col-2" aria-label="Recipient's username" aria-describedby="button-addon2">
                            			</div>
                        			</div>
                    			</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="form-group">
                                		<div class="nk-int-st">
                                			<button type="submit" name="search" class="btn btn-success notika-btn-success col-3">Buscar factura</button> 
                            			</div>
                        			</div>
                    			</div>
                        	</div>
                    	</div>
                    	<div class="row">
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        		<div class="form-group">
                            		<div class="nk-int-st">
                            			<?php
										if(isset($_POST['search']))
										{ 
										$sdata=$_POST['searchdata'];
										  ?>
										  <h4 align="center">Resultado relacionado con la palabra clave "<?php echo $sdata;?>" </h4> 
										<table class="table table-bordered"> 
											<thead> <tr> 
												<th>#</th> 
												<th>ID de factura</th> 
												<th>Nombre de cliente</th> 
												<th>Fecha de factura</th> 
												<th>Acción</th>
											</tr> 
											</thead> 
											<tbody>
											<?php
											$ret=mysqli_query($con,"select distinct  tbclientes.Name,tbfactura.BillingId,tbfactura.PostingDate from  tbclientes   
												join tbfactura on tbclientes.ID=tbfactura.Userid  where tbfactura.BillingId like '%$sdata%'");
											$num=mysqli_num_rows($ret);
											if($num>0){
											$cnt=1;
											while ($row=mysqli_fetch_array($ret)) {
											?>
									 		<tr> 
											 	<th scope="row"><?php echo $cnt;?></th> 
											 	<td><?php  echo $row['BillingId'];?></td>
											 	<td><?php  echo $row['Name'];?></td>
											 	<td><?php  echo $row['PostingDate'];?></td> 
									 			<td><a href="view-invoice.php?invoiceid=<?php  echo $row['BillingId'];?>">Detalle</a></td> 
									  		</tr>   
									  		<?php 
											$cnt=$cnt+1;
											} } 
											else { ?>
									  		<tr>
									    		<td colspan="8"> No se encontraron registros relacionados con esta búsqueda</td>
									  		</tr>
											<?php } }?>
											</tbody> 
										</table> 
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
</div>


<?php include('include/footer_module.html');?>

<?php }  ?>