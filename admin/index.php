<?php
session_start();
error_reporting(0);
include('include/connection.php');
if (strlen($_SESSION['bsspa']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard de Spa</title>
    <?php include_once('include/header_module.php');?>

  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="breadcomb-wp">
              <div class="breadcomb-icon">
                <i class="notika-icon notika-windows"></i>
              </div>
              <div class="breadcomb-ctn">
                <h2>Bienvenido</h2>
                <p>Bienvenido al sistema administrador de Spa</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id="page-wrapper" class="container">
  <div class="row justify-content-between p-lg-2 p-md-2">    
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn btn-info notika-btn-info mt-sm-2 mb-sm-1 mt-xs-1 mb-xs-2" href="">
      <?php
        $query1=mysqli_query($con,"Select * from tbclientes");
        $totalcust=mysqli_num_rows($query1);
      ?>
      <a href="customer-list.php" style="color:white;">
        <div class="stats-left ">
          <h5>Total</h5>
          <h3>Clientes</h3>
        </div>
        <div class="stats-right">
          <h4> <?php echo $totalcust;?></h4>
        </div>
        <div class="clearfix"> </div>
      </a> 
    </div>
       
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn btn-purple notika-btn-purple mt-sm-2 mb-sm-1 mt-xs-2 mb-xs-1" style="color: white;" >
        <?php
          $query2=mysqli_query($con,"Select * from tbcita");
          $totalappointment=mysqli_num_rows($query2);
        ?>
        <a href="list_appointments.php" style="color:white;">
          <div class="stats-left">
            <h5>Total</h5>
            <h3>Citas</h3>
          </div>
          <div class="stats-right">
            <h4> <?php echo $totalappointment;?></h4>
          </div>
          <div class="clearfix"> </div> 
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn btn-pink notika-btn-pink mt-sm-2 mb-sm-1 mt-xs-2 mb-xs-1" style="color: white;" >
        <?php
          $query5=mysqli_query($con,"Select * from  tbservicios");
          $totalser=mysqli_num_rows($query5);
        ?>
        <a href="list_services.php" style="color:white;">
          <div class="stats-left">
            <h5>Total</h5>
            <h3>Servicios</h3>
          </div>
          <div class="stats-right">
            <h4> <?php echo $totalser;?></h4>
          </div>
          <div class="clearfix"> </div>
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 btn btn-teal notika-btn-teal mt-sm-2 mb-sm-1 mt-xs-2 mb-xs-1" style="color: white;" >
        <?php
          $query9=mysqli_query($con,"select tbfactura.ServiceId as ServiceId, tbservicios.Cost from tbfactura join tbservicios  on tbservicios.ID=tbfactura.ServiceId");
          while($row9=mysqli_fetch_array($query9)){
            $total_sale=$row9['Cost'];
            $totalsale+=$total_sale;
          }
        ?>
        <a href="invoices.php" style="color:white;">
          <div class="stats-left">
            <h5>Total</h5>
            <h3>Ventas</h3>
          </div>
          <div class="stats-right">
            <h4><?php echo $totalsale;?></h4>
            </div>
            <div class="clearfix"> </div>
          </a>
    </div>
  </div>
<hr>
  <div class="row justify-content-around">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 btn btn-success notika-btn-success mt-sm-2 mb-sm-1 mt-xs-1 mb-xs-2">
      <?php $query3=mysqli_query($con,"Select * from tbcita where Status='1'");
        $totalaccapt=mysqli_num_rows($query3);
      ?>
      <a href="accepted_appointments.php" style="color:white;">
        <div class="stats-left">
          <h5>Total</h5>
          <h3>Citas Aceptadas</h3>
        </div>
        <div class="stats-right">
          <h4><?php echo $totalaccapt;?></h4>
        </div>
        <div class="clearfix"> </div>
      </a>
    </div>
                 
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 btn btn-danger notika-btn-danger mt-sm-2 mb-sm-1 mt-xs-1 mb-xs-2">
      <?php $query4=mysqli_query($con,"Select * from tbcita where Status='2'");
        $totalrejapt=mysqli_num_rows($query4);
      ?>
      <a href="rejected_appointments.php" style="color:white;">
        <div class="stats-left ">
          <h5>Total</h5>
          <h3>Citas Rechazadas</h3>
        </div>
        <div class="stats-right">
          <h4> <?php echo $totalrejapt;?></h4>
        </div>
        <div class="clearfix"> </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 btn btn-warning notika-btn-warning mt-sm-2 mb-sm-1 mt-xs-1 mb-xs-2">
      <?php $query4=mysqli_query($con,"Select * from tbcita where Status=''");
        $totalrejapt=mysqli_num_rows($query4);
      ?>
      <a href="pending_appointments.php" style="color:black;">
        <div class="stats-left ">
          <h5>Total</h5>
          <h3>Citas por aprobar</h3>
        </div>
        <div class="stats-right">
          <h4> <?php echo $totalrejapt;?></h4>
        </div>
        <div class="clearfix"> </div>
      </a>
    </div>
  </div>
<hr>
 <div class="row justify-content-around">

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 btn btn-success notika-btn-success mt-sm-2 mb-sm-1 mt-xs-1 mb-xs-2">
      <?php
        $query6=mysqli_query($con,"select tbfactura.ServiceId as ServiceId, tbservicios.Cost from tbfactura join tbservicios  on tbservicios.ID=tbfactura.ServiceId where date(PostingDate)=CURDATE();");
        while($row=mysqli_fetch_array($query6)){
          $todays_sale=$row['Cost'];
          $todysale+=$todays_sale;
        }
      ?>
      <a href="report_sales.php" style="color:white;">
        <div class="stats-left">
          <h5>Hoy</h5>
          <h3>Ventas</h3>
        </div>
        <div class="stats-right">
          <h4> <?php echo $todysale;?></h4>
        </div>
        <div class="clearfix"> </div>
      </a> 
    </div>

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 btn btn-success notika-btn-success mt-sm-2 mb-sm-1 mt-xs-1 mb-xs-2">
      <?php
        $query8=mysqli_query($con,"select tbfactura.ServiceId as ServiceId, tbservicios.Cost from tbfactura join tbservicios  on tbservicios.ID=tbfactura.ServiceId where date(PostingDate)>=(DATE(NOW()) - INTERVAL 7 DAY);");
        while($row8=mysqli_fetch_array($query8)){
          $sevendays_sale=$row8['Cost'];
          $tseven+=$sevendays_sale;
        }
      ?>
      <a href="report_sales.php" style="color:white;">
        <div class="stats-left">
          <h5>Últimos 7 días</h5>
          <h3>Ventas</h3>
        </div>
        <div class="stats-right">
          <h4> <?php echo $tseven;?></h4>
        </div>
        <div class="clearfix"> </div> 
      </a> 
    </div>
  </div>       
</div>

    <?php include_once('include/footer_module.html');?>
<?php } ?>
</body>
</html>