<?php 
	class customer {
		private $name;
		private $email;
		private $mobilenum;
		private $gender;
		private $details;
		private $id;

		function __construct($Id='1',$Name='cliente nuevo',$Email='x',$Mobilenum='x', $Gender='x', $Details='x'){
		$this->id = $Id;
		$this->name = $Name;
		$this->email = $Email;
		$this->mobilenum= $Mobilenum;
		$this->gender = $Gender;
		$this->details = $Details;
		}


		function add(){
			include('include/connection.php');
			$query=mysqli_query($con, "insert into  tbclientes (Name,Email,MobileNumber,Gender,Details) value('".$this->name."','".$this->email."','".$this->mobilenum."','".$this->gender."','".$this->details."')");
    		if ($query) {
    			echo "<script>alert('Cliente ha sido agregado satisfactoriamente.');</script>"; 
    			echo "<script>window.location.href = 'add-customer.php'</script>";   
    			$msg="";
  			}
  			else
    		{
    			$msg="Algo salió mal. Inténtalo de nuevo";  	
    		}
		}
		public function edit(){
			include('include/connection.php');
			$query=mysqli_query($con, "update tbclientes set Name='".$this->name."',Email='".$this->email."',MobileNumber='".$this->mobilenum."',Gender='".$this->gender."',Details='".$this->details."' where ID='".$this->id."' ");
    		if ($query) {
		    $msg="<div class=\"alert alert-success\" role=\"alert\"> La información de cliente ha sido actualizada con éxito.</div>";
		    }
		  	else
		    {
		      $msg="<div class=\"alert alert-danger\" role=\"alert\"> Algo salió mal. Por favor, inténtelo de nuevo.</div>";
		    }
		    return $msg;
		}
		public function delete()
		{
			include('include/connection.php');
			$query=mysqli_query($con, "DELETE from tbclientes where ID='".$this->id."' ");
   			if ($query) {
			    echo "<script>alert('La información de cliente se ha eliminado con exito.');</script>";
			    echo "<script>window.location.href = 'customer-list.php'</script>"; 
			}
		    else
		    {
		    echo "<script>alert('Algo salió mal. Por favor, inténtelo de nuevo.');</script>";
		    }
		}
	}
 ?>