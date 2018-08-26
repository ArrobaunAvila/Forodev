{include '../overall/header.tpl'}
  <body>      
 
     {include '../overall/nav.tpl'} 
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


 {include '../overall/footer.tpl'} 
 <script type="text/javascript">
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

 </script>

  </body>
</html>