<?php
session_start();
error_reporting(0);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SPA BELLEZA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once('includes/links.php');?>
  </head>
  <body>
  <?php include_once('includes/header.php');?>

  <div class="site-blocks-cover overlay" style="background-image: url(images/portada_prices.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <div class="row justify-content-center mb-4">
            <div class="col-md-10 text-center">
              <h1 data-aos="fade-up" class="mb-5">Todo lo mejor <span class="typed-words"></span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
      
    <section class="ftco-section ftco-no-pb">
    	<section class="ftco-section">
      <div class="site-section bg-light">
      <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h2 class="mb-4">Precios</h2>
            <p>Nuestros precios por servicio y la duración del tratamiento.</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div class="row no-gutters">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-beauty-treatment-1"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Facial</h3>
                    <p>20 min <br> $30</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-relax"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Masaje</h3>
                    <p>30 min <br> $20 </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-spa"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Corte de cabello</h3>
                    <p>30 min <br> $20 </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-treatment"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Aroma</h3>
                    <p>20 min <br> $10 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="row no-gutters">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-hand-cream"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Manicure</h3>
                    <p>40 min <br> $25</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-spa"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Tinte</h3>
                    <p>2 hr <br> $50</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-pedicure"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Pedicure</h3>
                    <p>40 min <br> $15</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-wax"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Depilación</h3>
                    <p>25 min <br> $20</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="row no-gutters">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-eye"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Cejas</h3>
                    <p>20 min <br> $30</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-massage-1"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Masaje de pies</h3>
                    <p>30 min <br> $20 </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-towels"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Exfoliación</h3>
                    <p>30 min <br> $20 </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-beauty-treatment"></span>
                  </div>
                  <div class="text mt-2">
                    <h3>Maquillaje</h3>
                    <p>20 min <br> $10 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h5 class="mb-4"><br><br>Aceptamos todas las tarjetas de crédito y débito.<br> También transacciones bancarias y efectivo.</h5>
          </div>
        </div>
    </div>
  </section>
</section>


    <?php include_once('includes/footer.php');?>
    <?php include_once('includes/scripts.php');?>
   <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["para tí"],
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