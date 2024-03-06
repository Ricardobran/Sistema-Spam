<?php
session_start();
error_reporting(0);
include('include/connection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=$_POST['password'];
    //$password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbadmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['bsspa']=$ret['ID'];
     header('location:index.php');
    }
    else{
    $msg="Información Inválida.";
    }
  }
  ?>
  <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa | Citas Aceptadas</title>
    <?php include_once('include/header_module.php');?>

    <div class="login-content">

        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
               <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div>
                <button class="btn btn-success notika-btn-success btn-lg waves-effect" type="submit" name="login" value="Iniciar sesión">Iniciar sesión</button>
                
                </form>
            </div>
        </div>
    </div>

    <?php include_once('include/footer_module.html');?>
</body>
</html>
