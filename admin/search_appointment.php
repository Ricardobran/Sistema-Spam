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
    <title>Spa | Buscar cita</title>
    <?php include_once('include/header_module.php');?>

    <div id="page-wrapper" class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Administración de Citas</h2>
                                <h4>Buscar cita</h4>
                                <h5>Buscar Citas / Nombre / Número de Contacto:</h5>
                        </div> 
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form method="post" name="search" action="">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label for="exampleInputEmail1">Buscar por Número de Cita</label> <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
                                    </div>
                                    
                                </div>
                                <button type="submit" name="search" class="btn btn-success notika-btn-success btn-sm">Buscar</button>
                                </form>
                            </div>
                            
                        </div>                      
                    </div>
                </div>
           </div> 
        </div>
    </div>            
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h4 align="center">Resultados sobre la palabra clave "<?php echo $sdata;?>"</h4>
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Número de Cita</th>
                                        <th>Nombre de Cliente</th>
                                        <th>Número de Móvil</th>
                                        <th>Fecha de Cita</th>
                                        <th>Hora de Cita</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $ret=mysqli_query($con,"select *from  tbcita where AptNumber like '%$sdata%' || Name like '%$sdata%' || PhoneNumber like '%$sdata%'");
                                    $num=mysqli_num_rows($ret);
                                    if($num>0){
                                        $cnt=1;
                                        while ($row=mysqli_fetch_array($ret)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $cnt;?></th>
                                        <td><?php  echo $row['AptNumber'];?></td>
                                        <td><?php  echo $row['Name'];?></td>
                                        <td><?php  echo $row['PhoneNumber'];?></td>
                                        <td><?php  echo $row['AptDate'];?></td>
                                        <td><?php  echo $row['AptTime'];?></td>
                                        <td><a href="view_appointment.php?viewid=<?php echo $row['ID'];?>">Detalle de Cita</a></td> </tr>   
                                <?php 
                                    $cnt=$cnt+1;} } 
                                    else { ?>
                                        <tr>
                                            <td colspan="8"> No record found against this search</td>
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

    <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>