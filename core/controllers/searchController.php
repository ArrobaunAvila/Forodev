<?php 

if(isset($_POST['busqueda']) or ( isset($_SESSION['busqueda']) and isset($_GET['pag']))){

 $template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;

if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] >= 1){
$pagina = $_GET['pag'];
} else {
$pagina = 1;
}
  
 $paginado=5;
  $inicio = ($pagina - 1) * $paginado;


if(isset($_SESSION['busqueda']) and !isset($_POST['busqueda'])){
	$busqueda = $_SESSION['busqueda'];

} else {
 $busqueda = $_POST['busqueda'];
}  

$_SESSION['busqueda']= $busqueda;

$con=ConexionDBD::conection();

  $cantidad = "SELECT COUNT(*) FROM posts WHERE titulo LIKE '%$busqueda%';";
  $cantidad=$con->prepare($cantidad);
  $cantidad->execute();
  $cantidad=$cantidad->get_result();


  $query1= "SELECT * FROM posts WHERE titulo  LIKE '%$busqueda%'  ORDER BY user_posts DESC LIMIT $inicio,$paginado;";
      $stmt=$con->prepare($query1);
       $stmt->execute();
       $sql=$stmt->get_result();

  $result=ConexionDBD::recorrer($cantidad);
  $result =$result[0];
  $paginas = ceil($result / $paginado);

   if(ConexionDBD::rows($sql) > 0){
   
              $query2="SELECT user FROM users WHERE user_id = ?";    
             $stmtt=$con->prepare($query2);
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
              ConexionDBD::cerrarConexion($con);
              $template->assign('posts',$posts);
             }

		$template->assign('titulo','Busqueda');
 $template->assign('pags',$paginas); 
  $template->display('home/foro.tpl');

} else {
 header('location: ?view=foro');
}

 ?>