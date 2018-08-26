<?php /* Smarty version 3.1.27, created on 2018-07-20 19:22:30
         compiled from "/opt/lampp/htdocs/forodeveloper/styles/templates/public/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6279878585b521a56e6b7d7_59554786%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f7333d1b73bb260e6ea30076be271e58456d68' => 
    array (
      0 => '/opt/lampp/htdocs/forodeveloper/styles/templates/public/registro.tpl',
      1 => 1517272187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6279878585b521a56e6b7d7_59554786',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b521a56eeeb47_08839935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b521a56eeeb47_08839935')) {
function content_5b521a56eeeb47_08839935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6279878585b521a56e6b7d7_59554786';
echo $_smarty_tpl->getSubTemplate ('../overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <body>      
 
     <?php echo $_smarty_tpl->getSubTemplate ('../overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div class="container" style="margin-top: 100px;">
<h2 style="text-align: center;">Registro</h2>
<div class="row" style=" width: 500px; margin: 0 auto;">

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduce tu Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nombre de Usuario</label>
    <input type="text" class="form-control" id="username" placeholder="Introduce Tu Usuario">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="password" placeholder="Introduce Tu Contraseña">
  </div>

  <button type="button" class="btn btn-primary" id="send_request">Registrar</button>

<center>
 <div id="Ajax_Notifi"></div>
 </div>
 </center>

  </div>
 </div>


 <?php echo $_smarty_tpl->getSubTemplate ('../overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
 <?php echo '<script'; ?>
 type="text/javascript">
   window.onload = function(){
   document.getElementById('send_request').onclick = function() {
         
         var connect,user,pass,email,form,result;

         user = document.getElementById('username').value;
         pass = document.getElementById('password').value;
         email = document.getElementById('email').value;
        
         if(user != '' && email != '' && pass != ''){
          form = 'user='+user+'&pass='+pass+'&email='+email;
         connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

          connect.onreadystatechange = function() {
           if(connect.readyState == 4 && connect.status == 200){
            var $response=connect.responseText;
            console.log($response);
             if($response == 1){
                    result = '<div class="alert alert-dismissible alert-success">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<stron> Conectado!</strong> <a href="#" class="alert-link"></a>Registrado con exito';
          result +='</div>';
  
          location.href= '?view=index';
           document.getElementById('Ajax_Notifi').innerHTML = result;
             } else if($response == 2){
               result = '<div class="alert alert-dismissible alert-danger">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Verificar</a> Usuario ya existe';
          result +='</div>';
            document.getElementById('Ajax_Notifi').innerHTML = result;
             } else if($response == 3){
               result = '<div class="alert alert-dismissible alert-danger">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Verificar</a> Email Ya existe.';
          result +='</div>';
            document.getElementById('Ajax_Notifi').innerHTML = result;
             }
           } else if(connect.readyState != 4) {
               result = '<div class="alert alert-dismissible alert-warning">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<strong>Procesando...</strong> <a href="#" class="alert-link"></a>';
          result +='</div>';
          document.getElementById('Ajax_Notifi').innerHTML = result;
           }
         }
       connect.open('POST','?view=registro',true);
       connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
       connect.send(form);

         } else {
          result = '<div class="alert alert-dismissible alert-danger">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Verificar</a> Campos Requeridos.';
          result +='</div>';

          document.getElementById('Ajax_Notifi').innerHTML = result;
         }
     }
   }

 <?php echo '</script'; ?>
>

  </body>
</html><?php }
}
?>