<?php /* Smarty version 3.1.27, created on 2018-07-20 19:22:42
         compiled from "/opt/lampp/htdocs/forodeveloper/styles/templates/overall/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7376409255b521a62dc9527_62155646%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8183478d39a2661ea1bcee4faf522e4397f40d' => 
    array (
      0 => '/opt/lampp/htdocs/forodeveloper/styles/templates/overall/menu.tpl',
      1 => 1521482564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7376409255b521a62dc9527_62155646',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b521a62e4ad03_29160450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b521a62e4ad03_29160450')) {
function content_5b521a62e4ad03_29160450 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7376409255b521a62dc9527_62155646';
?>
       <ul class="nav nav-sidebar">
       <?php if (isset($_GET['view']) && $_GET['view'] == 'cuentas') {?>
          <li class="active"> <a href="?view=search">Tu cuenta</a></li>
         <?php }?>

          <?php if (isset($_GET['view']) && $_GET['view'] == 'search') {?>
          <li class="active"> <a href="?view=search">Resultado Busqueda</a></li>
         <?php }?>

          <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
          <li class="active"><?php } else { ?><li><?php }?><a href="?view=foro&type=tops">Los mejores</a></li> 

            <?php if ((!isset($_GET['type']) && isset($_GET['view']) && $_GET['view'] == 'foro') || (!isset($_GET['view']))) {?>
            <li class="active"><?php } else { ?><li><?php }?><a href="?view=index">Inicio</a></li>

            <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
          <li class="active"><?php } else { ?><li><?php }?><a href="?view=foro&type=1">PHP</a></li>
             <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
          <li class="active"><?php } else { ?><li><?php }?><a href="?view=foro&type=2">Js</a></li>
             <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
          <li class="active"><?php } else { ?><li><?php }?><a href="?view=foro&type=3">Other</a></li>
          </ul><?php }
}
?>