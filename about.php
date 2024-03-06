<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
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

  <div class="site-blocks-cover overlay" style="background-image: url(images/portada_about.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10"> 
          <div class="row justify-content-center mb-4">
            <div class="col-md-10 text-center">
              <h1 data-aos="fade-up" class="mb-5">Experiencia en <span class="typed-words"></span></h1>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

<?php
$ret=mysqli_query($con,"select * from tbpagina where PageType='acercade' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded mb-3">
          <img src="images/about_2.jpg" alt="Image" class="img-fluid rounded mb-3">
          <img src="images/about_3.jpg" alt="Image" class="img-fluid rounded mb-3">
        </div>
        <div class="col-md-5 ml-auto">
          <h2 class="text-primary mb-3"><span class="subheading"><?php  echo $row['PageTitle'];?></span></h2>
          <p class="text-justify"><?php  echo $row['PageDescription'];?></p>
          <ul class="ul-check list-unstyled success">
            <li><p class="text-justify">Mejora física: Gracias al tratamiento de un spa, se consigue la relajación muscular, por lo que las dolencias de este tipo remiten y tienden a mejorar. Desde lumbagos, pasando por cualquier dolor de espalda, dolores musculares o torceduras de cualquier tipo, la mezcla de aguas termales, masajes y otros tipos de tratamientos, consigue que el dolor y el malestar desaparezca. También, son claramente beneficiosos para problemas óseos, especialmente, para la artritis, que aunque no la eliminan, por ser ésta una dolencia crónica, sí consigue remitir el dolor y retrasar la expansión.</p></li>
            <li><p class="text-justify">Mejora psíquica: El estrés es el mal endémico de nuestra sociedad, de una sociedad que se mueve a demasiada velocidad, y este estrés provoca dolencias psíquicas muy agudas. A través de un tratamiento en un Spa, la persona consigue centrarse en su propio cuerpo, en su propia mente, aislarse del exterior, por lo que se aleja de sus problemas del día a día y al sentirse cómodo y relajado, empieza a notar como su estrés, como su malestar psíquico y mental empiezan a remitir.</p></li>
            <li><p class="text-justify">Mejora estética: Cuando estamos en un Spa, nuestra estética y aspecto exterior pueden mejorar considerablemente. Esta mejora viene motivada por diferentes motivos. En un Spa, nos sentimos mejor, más tranquilos, más relajados, más serenos y esta sensación de bienestar y tranquilidad se transmite de nuestro interior a nuestro exterior.</p>
            </li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">Testimonios de clientes satisfechos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel-2 owl-carousel">
              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/cliente_1.jpg" alt="Image" class="img-fluid rounded-circle w-100 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Alma Martí</h2>
                  <blockquote>&ldquo;Viví una experiencia maravillosa en Spa Belleza, tienen un ambiente de relajación y paz inigualable!&rdquo;</blockquote>
                </div>
              </div>
              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/cliente_2.jpg" alt="Image" class="img-fluid rounded-circle w-100 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Juan Martinez</h2>
                  <blockquote>&ldquo;Fui a Spa Belleza por un corte de cabello y me hicieron sentir como en casa, salí del lugar muy relajado y satisfecho.&rdquo;</blockquote>
                </div>
              </div>
              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/cliente_3.jpg" alt="Image" class="img-fluid rounded-circle w-100 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">Daniela Venegas</h2>
                  <blockquote>&ldquo;Las estilistas de Spa Belleza son las mejores de la ciudad, son muy agradables y se sostiene una charla muy amena mientras trabajan en mi cabello!&rdquo;</blockquote>
                </div>
              </div>
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
            strings: ["nuestro Spa"],
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