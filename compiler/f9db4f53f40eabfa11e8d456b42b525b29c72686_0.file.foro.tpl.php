<?php /* Smarty version 3.1.27, created on 2018-07-20 19:22:42
         compiled from "/opt/lampp/htdocs/forodeveloper/styles/templates/home/foro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19533804755b521a62caacc1_12371123%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9db4f53f40eabfa11e8d456b42b525b29c72686' => 
    array (
      0 => '/opt/lampp/htdocs/forodeveloper/styles/templates/home/foro.tpl',
      1 => 1521483907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19533804755b521a62caacc1_12371123',
  'variables' => 
  array (
    'titulo' => 0,
    'posts' => 0,
    'pt' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b521a62dbfeb3_28470036',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b521a62dbfeb3_28470036')) {
function content_5b521a62dbfeb3_28470036 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19533804755b521a62caacc1_12371123';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color: #3e2723; color: white">
          
          <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
              
              <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
              <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->value) {
$_smarty_tpl->tpl_vars['pt']->_loop = true;
$foreach_pt_Sav = $_smarty_tpl->tpl_vars['pt'];
?>
                <tr>
                  <td><a href=""><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
                  <td><a href=""><?php echo $_smarty_tpl->tpl_vars['pt']->value['autor'];?>
</a></td>
                  <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pt']->value['puntos'];?>
</td>
                  <td style="text-align: center;">0</td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
                <?php } else { ?>
                <tr>
                  <td colspan="4">No se han encontrado resultados</td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
          <div>


           <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
            <ul class="pagination">
              <?php if (!isset($_GET['pag'])) {?>
              <li class="page-item disabled">
                <a  class="page-link disabled" href="#">Anterior</a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['pags']->value >= 1) {?>
                <?php if (isset($_GET['type'])) {?>
                    <li class="page-item"><a class="page-link" href="?view=foro&type=<?php echo $_GET['type'];?>
&pag=2">Siguiente</a></li>
                    <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'search') {?>  
                   <li class="page-item"> <a class="page-link" href="?view=search&pag=2">Siguiente</a></li>
                    <?php } else { ?>
              <li class="page-item">
               <a  class="page-link" href="?view=foro&pag=2">Siguiente</a>
             </li>
             <?php }?>
             <?php } else { ?>
             <li class="page-item disabled">
               <a  class="page-link" href="#">Siguiente</a>
             </li>
             <?php }?>
             <?php } else { ?>

             <?php if ($_GET['pag'] <= 1) {?>
             <li class="page-item disabled">
               <a  class="page-link" href="#">Anterior</a>
             </li>
              <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'search') {?>  
              <li><a class="page-link" href="?view=search&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a></li>
                    <?php } else { ?>
             <li class="page-item">
              <a  class="page-link" href="?view=foro&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a>
            </li>
            <?php }?>
 
            <?php if ($_smarty_tpl->tpl_vars['pags']->value >= 1 && $_GET['pag'] >= 1 && $_GET['pag'] <= $_smarty_tpl->tpl_vars['pags']->value) {?>
            <li class="page-item">
              <a  class="page-link" href="?view=foro&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a>
            </li>
            <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'search') {?>  
              <a class="page-link" href="?view=search&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a>
              <?php } else { ?>
            <li class="page-item disabled">
              <a  class="page-link" href="#">Siguiente</a>
            </li>
            <?php }?>
            <?php }?> 
          </ul>
          </div>
          <?php }?>
        </div>
      </div>
    </div>    

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html> <?php }
}
?>