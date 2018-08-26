<?php /* Smarty version 3.1.27, created on 2018-07-20 19:22:31
         compiled from "/opt/lampp/htdocs/forodeveloper/styles/templates/public/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5089121905b521a57ebc279_93632565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cfe5dff56314d1152fe34614d2226e825584b90' => 
    array (
      0 => '/opt/lampp/htdocs/forodeveloper/styles/templates/public/login.tpl',
      1 => 1518216404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5089121905b521a57ebc279_93632565',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b521a58007249_20086021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b521a58007249_20086021')) {
function content_5b521a58007249_20086021 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5089121905b521a57ebc279_93632565';
?>
 <?php echo $_smarty_tpl->getSubTemplate ('../overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <body>      
 
     <?php echo $_smarty_tpl->getSubTemplate ('../overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div class="container" style="margin-top: 100px;">
<h2 style="text-align: center;">Iniciar Sesion</h2>
<div class="row" style=" width: 500px; margin: 0 auto;">

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Introduce tu Usuario">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Introduce tu Contraseña">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="session" value="1">
    <label class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
  </div>
  <button type="button" class="btn btn-primary" id="send_request">Iniciar Sesion</button>

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

         var connect,user,pass,session,form,result;

         user = document.getElementById('user').value;
         pass = document.getElementById('password').value;
         session = document.getElementById('session').checked ? true : false;
        
         if(user != '' && pass != ''){
          form = 'user='+user+'&pass='+pass+'&session='+session;
         connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

          connect.onreadystatechange = function() {
           if(connect.readyState == 4 && connect.status == 200){
            var $response=connect.responseText;
            console.log($response);
             if($response == 1){
                    result = '<div class="alert alert-dismissible alert-success">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<stronConectado!</strong> <a href="#" class="alert-link"></a>Bienvenido';
          result +='</div>';
  
          location.href= '?view=foro';
           document.getElementById('Ajax_Notifi').innerHTML = result;
             } else{
               result = '<div class="alert alert-dismissible alert-danger">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Verificar</a> Credenciales Incorrectas.';
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
       connect.open('POST','?view=login',true);
       connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
       connect.send(form);

         } else {
          result = '<div class="alert alert-dismissible alert-danger">';
          result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result +='<strong>Oh snap!</strong> <a href="#" class="alert-link">Verificar</a> Usuario y Contreseña vacios.';
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