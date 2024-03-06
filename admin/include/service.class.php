<?php 
	class service {
		private $name;
		private $cost;
		private $id;

		function __construct($Name='Producto nuevo',$Cost='0',$Id='1'){
		$this->name = $Name;
		$this->cost = $Cost; 
		$this->id = $Id;
		}

		function show(){
			echo "$this->name";
		}
		
		function add(){
			include('include/connection.php');
			$query=mysqli_query($con, "insert into tbservicios(ServiceName,Cost) value('".$this->name."','".$this->cost."')");
    		if ($query) {
    			echo "<script>alert('Servicio ha sido agregado satisfactoriamente.');</script>"; 
    			echo "<script>window.location.href = 'add_service.php'</script>";   
    			$msg="";
  			}
  			else
    		{
    			$msg="Algo salió mal. Inténtalo de nuevo";  	
    		}
		}
		public function edit(){
			include('include/connection.php');
			$query=mysqli_query($con, "update  tbservicios set ServiceName='".$this->name."',Cost='". $this->cost."' where ID='".$this->id."'");
    		if ($query) {
    			$msg="Servicio actualizado satisfactoriamente.";
    			echo "<script>alert('Servicio ha sido editado satisfactoriamente.');</script>"; 
        		echo "<script>window.location.href = 'list_services.php'</script>";
  			}
  			else
    		{
      			$msg="Algo salió mal. Inténtalo de nuevo";
    		}
		}
		public function delete()
		{
			include('include/connection.php');
			$query=mysqli_query($con, "DELETE from tbservicios where ID='".$this->id."' ");
   			 if ($query) {
    			$msg="Servicio eliminado satisfactoriamente.";
  				echo "<script>alert('Servicio ha sido eliminado satisfactoriamente.');</script>"; 
        		echo "<script>window.location.href = 'list_services.php'</script>";
  			}
  			else
    		{
      			$msg="Algo salió mal. Inténtalo de nuevo";
    		}
		}
	}
 ?>