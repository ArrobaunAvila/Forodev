<?php 

 $template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;
 /*Controlaremos el paginado*/
 

if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){
$pagina = $_GET['pag'];
} else {
$pagina = 1;
}
  $cone=ConexionDBD::conection();
 $paginado=5;
  $inicio = ($pagina - 1) * $paginado;

switch ($type) {
	case 'tops':

    $cone=ConexionDBD::conection();
  $consulta= "SELECT count(*) posts";
  $consulta=$cone->prepare($consulta);
  $consulta->execute();
  $cantidad=$consulta->get_result();

            $query1= "SELECT * FROM posts  ORDER BY puntos DESC LIMIT $inicio,$paginado;";
             $query1=$cone->prepare($query1);
             $query1->execute();
             $sql=$query1->get_result();
      $template->assign('titulo','Los mejores');
		break;
	
	case '1':     


  $query1= "SELECT * FROM posts WHERE categoria='1'  ORDER BY user_posts DESC LIMIT $inicio,$paginado;";
             $stmt=$cone->prepare($query1);
             $stmt->execute();
             $sql=$stmt->get_result();
		$template->assign('titulo','PHP');
		break;

	case '2':


  $cone=ConexionDBD::conection();
  $query1= "SELECT * FROM posts WHERE categoria='2'  ORDER BY user_posts DESC LIMIT $inicio,$paginado;";
             $stmt=$cone->prepare($query1);
             $stmt->execute();
             $sql=$stmt->get_result();
		$template->assign('titulo','Js and Frameworks');
		break;
		
	case '3':

  $cone=ConexionDBD::conection();
  $query1= "SELECT * FROM posts WHERE categoria='3'  ORDER BY user_posts DESC LIMIT $inicio,$paginado;";
             $stmt=$cone->prepare($query1);
             $stmt->execute();
             $sql=$stmt->get_result();
		$template->assign('titulo','Others');
		break;

	default:
        $inicio = ($pagina - 1) * $paginado;
           $cone=ConexionDBD::conection();
            $query1= "SELECT * FROM posts  ORDER BY user_posts DESC LIMIT $inicio,$paginado;";
             $stmt=$cone->prepare($query1);
             $stmt->execute();
             $sql=$stmt->get_result();
             $template->assign('titulo','Inicio');       
		break;
}

  $cone=ConexionDBD::conection();
  $consulta= "SELECT count(*) posts";
  $stmtt=$cone->prepare($consulta);
  $stmtt->execute();
  $cantidad=$stmtt->get_result();

  $result=ConexionDBD::recorrer($cantidad);
  $result =$result[0];
  $paginas = ceil($result / $paginado);

    if(ConexionDBD::rows($sql) > 0){
              $query2="SELECT user FROM users WHERE user_id = ?";    
             $stmtt=$cone->prepare($query2);
             $stmtt->bind_param("i",$id);

              while($datos = ConexionDBD::recorrer($sql)){

                   $id = $datos['autor'];
                   $stmtt->execute();
                   $stmtt->bind_result($autor);
                    $stmtt->fetch();
                    
                $posts[]= array(
                   'id'=> $datos['user_posts'],
                   'titulo' => $datos['titulo'],
                   'contenido' => $datos['contenido'],
                   'autor' => $autor,
                   'puntos' => $datos['puntos'],
                   'categoria' => $datos['categoria']

               );
              }
              ConexionDBD::cerrarConexion($cone);
              $template->assign('posts',$posts);
             }

             $template->assign('pags',$paginas); 
              $template->display('home/foro.tpl');
 ?>