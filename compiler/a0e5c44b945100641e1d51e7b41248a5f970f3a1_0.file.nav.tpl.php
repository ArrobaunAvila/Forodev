<?php /* Smarty version 3.1.27, created on 2018-07-20 19:22:21
         compiled from "/opt/lampp/htdocs/forodeveloper/styles/templates/overall/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16355112365b521a4d4738b7_21843661%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e5c44b945100641e1d51e7b41248a5f970f3a1' => 
    array (
      0 => '/opt/lampp/htdocs/forodeveloper/styles/templates/overall/nav.tpl',
      1 => 1521493557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16355112365b521a4d4738b7_21843661',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b521a4d547cc8_13005371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b521a4d547cc8_13005371')) {
function content_5b521a4d547cc8_13005371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16355112365b521a4d4738b7_21843661';
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" style="background-color: #ff5722">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="?view=index"><img src="styles/images/if_code_nuevosvg.svg" style="width: 40px; padding-top: 10px;"></a>
      <a class="navbar-brand" href="?view=index">ForoDev</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-left: 20px;">
       <?php if (isset($_GET['view']) && $_GET['view'] == 'foro' || $_GET['view'] == 'search') {?>
        <li class="active"><a href="?view=foro">Foro</a></li>
          <form class="navbar-form navbar-left" role="search" action="?view=search" method="POST">
       <div class="form-group">
      <input class="form-control" type="search" name="busqueda" placeholder="Buscar Posts" aria-label="Search">
       </div>
         <button class="btn btn-default" name="submit" type="submit">Search</button>
         </form>
        <?php } else { ?>
        <li><a href="?view=foro">Foro</a></li>
        <li><a href="https://avilacardenasdaniel.000webhostapp.com/" target="_Plank">Blog Dev<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Ir a la Tienda</a></li>
        <?php }?>
      </ul>

   

      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['user'])) {?>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['user'];?>
 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="?view=perfil&user=<?php echo $_SESSION['id'];?>
">Perfil</a></li>
            <li><a href="?view=cuenta">Cuenta</a></li>
            <li><a href="?view=logout">Salir</a></li>
          </ul>
        </li>
        <?php } else { ?>
        <?php if (isset($_GET['view']) && $_GET['view'] == 'login') {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=login">Login</a></li>
        <?php if (isset($_GET['view']) && $_GET['view'] == 'registro') {?>
        <li class="active">
        <?php } else { ?>
        <li><?php }?><a href="?view=registro">Registrarme</a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav><?php }
}
?>