<?php 

if(isset($_SESSION['user']) and isset($_SESSION['id'])){
	if($_POST){
          


	}else {
 	 $template = new Smarty();
     $template->display('cuentas/cuentas.tpl');
	}
} else {
	header('location: ?view=login');
}
   

 ?>



