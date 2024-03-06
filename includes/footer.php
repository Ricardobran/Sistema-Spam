<?php
error_reporting(0);
include('includes/dbconnection.php');
?>
<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h3 class="ftco-heading-2">Spa Belleza</h3>
          <?php
          $ret=mysqli_query($con,"select * from tbpagina where PageType='Acercade' ");
          $cnt=1;
          while ($row=mysqli_fetch_array($ret)) {
          ?>
          <p class="text-justify"><?php  echo substr($row['PageDescription'],0,200);?> 
          <a href="about.php">Ver más...</a></p><?php } ?>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h3 class="ftco-heading-2 text-center">Redes sociales</h3>
            <ul class="ftco-footer-social list-unstyled mt-3 d-flex align-items-center justify-content-center">
              <li class="ftco-animate"><a href="https://www.twitter.com"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com"><span class="icon-instagram"></span></a></li>
            </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h3 class="ftco-heading-2">¿Tienes alguna pregunta?</h3>
            <div class="block-23 mb-3">
            <?php
            $ret=mysqli_query($con,"select * from tbpagina where PageType='contactanos' ");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {
            ?>
              <ul class="list-unstyled">
                <li>
                  <a href="#">
                    <span class="icon icon-map-marker"></span>
                    <span class="text"><?php echo $row['PageDescription'];?></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon icon-phone"></span>
                    <span class="text">+<?php echo $row['MobileNumber'];?></span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon icon-envelope"></span>  
                    <span class="text"><?php echo $row['Email'];?></span>
                  </a>
                </li>
              </ul>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>2021 &copy; Spa Belleza</p>
      </div>
    </div>
  </div>
</footer>