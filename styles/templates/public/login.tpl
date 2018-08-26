 {include '../overall/header.tpl'}
  <body>      
 
     {include '../overall/nav.tpl'} 
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


 {include '../overall/footer.tpl'} 
 <script type="text/javascript">
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

 </script>

  </body>
</html>