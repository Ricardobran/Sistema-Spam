<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>SPA BELLEZA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once('includes/links.php');?>
  </head>
  <body>
  <?php include_once('includes/header.php');?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/portada_thankyou.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Reservación  <span class="typed-words"></span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
      
    <section class="ftco-section ftco-no-pb">
    <div class="container">
    <br>
	<div class="row no-gutters justify-content-center mb-5 pb-2">
    <div class="col-md-6 text-center heading-section ftco-animate">
    <h4 class="w3ls_head">¡Gracias por aplicar! <br><br> Su número de cita es: <?php echo $_SESSION['aptno'];?> <br><br> Te esperamos el día y a la hora de tu elección.</h4>
    </div>
	</div>
	<div class="container-fluid p-0">
	<div class="row no-gutters">
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                <div class="text"></div>
				<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="project">
				<img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
				<div class="text"></div>
				<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
			</div>
		</div>
	</div>
    </div>
	</section>
    <br>
    <br>
    <br>
    <br>
    <?php include_once('includes/footer.php');?>
    <?php include_once('includes/scripts.php');?>

    <script src="js/typed.js"></script>
    <script>
    var typed = new Typed('.typed-words', {
    strings: ["completada"],
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