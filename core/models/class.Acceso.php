<?php 
/**
 * @Description 
 * Class model login para el acceso y logueo del usuario 
 */
class Acceso{

	private $user,$pass,$email;

	/**
	 * Description
	 * @method  Login / verifica si el usuario existe en la base de datos
	 * @return type
	 * 
	 */
	public function Login(){
		try {
			if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['session'])){
				
				$con = ConexionDBD::conection();  
                  $this->pass =  $this->Encrypt($_POST['pass']); //Utilizamos Encrypt para encriptar
                 $this->user=$_POST['user'];
                 //Query para la base datos
			    $query="SELECT * FROM users WHERE user = ? AND pass = ?"; 
               
			    if($stmt=$con->prepare($query)){
			    	$stmt->bind_param("ss",$this->user,$this->pass);
			    	$stmt->execute();
			         $result=$stmt->get_result();
                
			    	if(ConexionDBD::rows($result) > 0){
			    		$datos=ConexionDBD::recorrer($result);
			    		
			    		$_SESSION['id']=$datos['user_id'];
			    		$_SESSION['user']=$datos['user'];
			     		$_SESSION['email']=$datos['email'];
			     		
			     		$_SESSION['nombre']=$_datos['nombre'];
			     		$_SESSION['apellido']=$_datos['apellido'];
			     		$_SESSION['fecha']=$_datos['fecha_nacimiento'];
			     		$_SESSION['cambio']=$_datos['cambio'];

                     if($_POST['session'] == true){
                     ini_set('session.cookie_lifetime', time() +(60*60*24*2));
                     echo 1;
                    } else {
                     	throw new Exception(2);
                     }
			    	}
			    	$stmt->close(); 
			    	ConexionDBD::cerrarConexion($con);
			    }
                  
			} else {
				throw new Exception("Error: Datos Vacío!");				
			}

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	private function Encrypt($string){
		$sizeof = strlen($string)-1;
		$result='';
		for($x = $sizeof; $x >=0;$x--){
			$result.= $string[$x]; 
		}
		$result = md5($result);
		return $result; 
	}
	
  
	 private function Encrypto($cadena){
	 	$cost = 10;
	 	$salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);
	 	$salt = strtr($salt, array('+' => '.')); 
	 	$salt = sprintf("$2a$%02d$", $cost) . $salt;
	 	$hash = crypt($cadena, $salt);

	 	return $hash;
     }

   /**
    * Description
    * @method Registrar / registra usuarios en la base de datos
    * @return type
    */

	public function Registrar(){
       try {
       	   
       	   if(!empty($_POST['user']) and !empty($_POST['email']) and !empty($_POST['pass'])){

       	   	 
       	   	  $conexion =ConexionDBD::conection();

       	   	  $this->user = $_POST['user'];
       	   	  $this->email = $_POST['email'];
              $this->pass =  $this->Encrypt($_POST['pass']);

       	   	  $query="SELECT * FROM users WHERE user = ? OR email = ?"; 

			    if($stmt=$conexion->prepare($query)){
			    	$stmt->bind_param("ss",$this->user,$this->email);
			    	$stmt->execute();
			         $result=$stmt->get_result();
                       
			    	if(ConexionDBD::rows($result) == 0){
			    		$stmt->close();
			    		
                     $query2= "INSERT INTO users (user,pass,email) VALUES (?,?,?)" ;
                     $state= $conexion->prepare($query2);
                     $state->bind_param("sss",$this->user,$this->pass,$this->email);
                     $state->execute();
                         $state->close();
    					
                        $query3 = "SELECT MAX(user_id) AS id FROM users";
                        $state2 = $conexion->prepare($query3);
                        $state2->execute();
                        
                         $id= $state2->get_result();
                        $id =ConexionDBD::recorrer($id);
                        $_SESSION['id']=$id[0];
			    		$_SESSION['user']=$this->user;
			     		$_SESSION['email']=$this->email;   
			     		echo 1;
			     		$state2->close();
			     		
                    } else {                     
                     	$datos=ConexionDBD::recorrer($result);
                
                     	if( strtolower($this->user) == strtolower($datos['user'])){
                          throw new Exception(2);
                     	}else if(strtolower($this->email) == strtolower($datos['email'])){
                     		throw new Exception(3);
                     	}
                     }
			    	}
			    	ConexionDBD::cerrarConexion($conexion); 
       	   }else {
       	   	throw new Exception("Error: Datos Vacío!");
       	   	
       	   } 
       } catch (Exception $e) {
       	  echo $e->getMessage();
       }
      
	}

	public function Recuperar(){

	}

}


 ?>