<?php /* Smarty version 3.1.27, created on 2018-07-20 19:22:20
         compiled from "/opt/lampp/htdocs/forodeveloper/styles/templates/home/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11510685335b521a4d00c592_75628333%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3947f2ba86b5561d47602843a1f2b559df2f764' => 
    array (
      0 => '/opt/lampp/htdocs/forodeveloper/styles/templates/home/index.tpl',
      1 => 1521486594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11510685335b521a4d00c592_75628333',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b521a4d29e3b8_36107632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b521a4d29e3b8_36107632')) {
function content_5b521a4d29e3b8_36107632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11510685335b521a4d00c592_75628333';
?>
   
   <?php echo $_smarty_tpl->getSubTemplate ('../overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <body> 


 
     <?php echo $_smarty_tpl->getSubTemplate ('../overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div class="container" style="margin-top: 50px;">
      <div class="jumbotron">
        <?php if (isset($_SESSION['user'])) {?>
        <h1 class="text-center" style="font-family: 'PT Sans' ">Bienvenido a ForoDev <?php echo $_SESSION['user'];?>
 </h1>
            <p class="lead" style="font-family:'PT Sans';">Bienvenido a tu espacio !! Donde resolveras y aprenderas sobre tus
            dudas</p>
        <?php } else { ?>
        <h1 class="text-center" style="font-family: 'PT Sans' ">Bienvenido a ForoDev</h1>

            <p class="lead" style="font-family:'PT Sans';">Bienvenido al foro de los developers, un mundo lleno de aprendizaje donde 
        vamos a tratar temas de programacion, frameworks, diseño web y mucha más temática relacionada.</p>
        <a class="btn btn-primary btn-lg" href="?view=login" role="button">Comenzar!</a>
        <?php }?>   
         <div class="imagesdev text-center" style="margin-top: 10px;  padding-bottom: 10px">
              <img src="styles/images/if_nodejs-512_339733.png">
              <img src="styles/images/if_php_282805.svg">
              <img src="styles/images/if_js_282802.svg">
              <img src="styles/images/express.png">
              <img src="styles/images/if_java_386470.svg">
              <img src="styles/images/if_JQuery_logo_282806.svg">
              <img src="styles/images/grunt.png">
              <img src="styles/images/if_docker-icon_copy_1245853.png">
              <img src="styles/images/if_html5_252093.svg">
              <img src="styles/images/mongodb.png">
              <img src="styles/images/if_angular_1296847.svg">
              <img src="styles/images/bootstrap.png">
            </div>    
      </div>

 <?php echo $_smarty_tpl->getSubTemplate ('../overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
</body>
</html><?php }
}
?>