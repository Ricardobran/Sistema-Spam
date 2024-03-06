<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
    $query=mysqli_query($con,"insert into tbcita(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
    if ($query) {
    $ret=mysqli_query($con,"select AptNumber from tbcita where Email='$email' and  PhoneNumber='$phone'");
    $result=mysqli_fetch_array($ret);
    $_SESSION['aptno']=$result['AptNumber'];
     echo "<script>window.location.href='thank-you.php'</script>";	
    }
    else
    {
      $msg="Algo salió mal. Inténtalo de nuevo";
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>SPA BELLEZA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once('includes/links.php');?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    $('.phone_with_ddd').mask('00000000');
</script>
    


  </head>
  <body>
    <?php include_once('includes/header.php');?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/portada_contacto.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10"> 
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Ponte en contacto con nosotros para <span class="typed-words"></span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col" data-aos="fade">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="col-sm-12 bg-white"><form action="#" method="post" class="appointment-form" style="margin-top: -150px;">
      <br>
      <div class="col-sm-12 bg-white"> <center><h1><p>Reserva una cita</p></h1></center></div>
        <div class="col-sm-12 bg-white"><br></div>
          <div class="row">
            <div class="col-sm-12 bg-white">
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
              </div>
            </div>
            <br>         
            <div class="col-sm-12 bg-white"> 
              <div class="form-group ">
                <input type="email" class="form-control" id="appointment_email" placeholder="Correo" name="email"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="true">
              </div>
            </div>
            <br>
            <div class="col-sm-12">
              <div class="form-group bg-white">
                <div class="select-wrap bg-white">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="services" id="services" required="true" class="form-control">
                    <option value="">Selecciona nuestros servicios</option>
                    <?php $query=mysqli_query($con,"select * from tbservicios");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                   <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
                   <?php } ?> 
                  </select>
                </div>
              </div>
            </div>
            <br>
            <div class="col-sm-12 bg-white">
              <div class="form-group">                 
                <input type="date" class="form-control appointment_date" placeholder="Fecha" name="adate" id='adate' required="true">
              </div>    
            </div>
            <br>
            <div class="col-sm-12 bg-white">
              <div class="form-group">
                <input type="time" class="form-control appointment_time" placeholder="Hora" name="atime" id='atime' required="true">
              </div>
            </div>
            <br>
            <div class="col-sm-12 bg-white">
              <div class="form-group">
                <input type="text" class="form-control phone_with_ddd" id="phone" name="phone" placeholder="Teléfono" required="true" maxlength="8" >
              </div>
            </div>
          </div>
          <br>          
          <div class="form-group">
            <center><input type="submit" name="submit" value="HAZ UNA CITA" class="btn btn-primary"></center>
          </div>
          <br>
        </form>
      </div>
    </div>
    <?php
    $ret=mysqli_query($con,"select * from tbpagina where PageType='contactanos' ");
    $cnt=1;
    while ($row=mysqli_fetch_array($ret)) {
    ?>
      <div class="col"  data-aos="fade" data-aos-delay="100">
        <div class="p-4 mb-3 bg-white">
          <p class="mb-0 font-weight-bold">Direccion del local:</p>
          <p class="mb-4"><span class="text">  <?php echo $row['PageDescription'];?></span></p>
          <p class="mb-0 font-weight-bold">Teléfono:</p>
          <p class="mb-4"><a href="#"><span class="text">  +<?php echo $row['MobileNumber'];?></span></a></p>
          <p class="mb-0 font-weight-bold">Correo electrónico:</p>
          <p class="mb-0"><a href="#"><span class="text">  <?php echo $row['Email'];?></span></a></p>    
          <?php } ?>
        </div>
        <br>
        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3">Informacion del servicio</h3>
          <p class="text-justify">Por medio de este formulario puede solicitar su cita. Esa cita queda reservada el dia y la hora de su elección. Nuestro servicio es 100% profesional y garantizado con productos de alta calidad y equipo de primera, contamos con variedad de servicios y de diferentes precios. ¡RESERVA YA! </p>
          <p><a href="#" class="btn btn-primary px-4 py-2 text-white btn-pill btn-sm">Más información</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
    
    <?php include_once('includes/footer.php');?>
    <?php include_once('includes/scripts.php');?>
    <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["un servicio de calidad"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>
  </body>
</html>